<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Subject;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $filter = $request->query('filter');
        $query_builder = Contact::query();
        $query_builder = build_search_query($query_builder, $search, ['name', 'phone', 'email', 'message']);
        if ($filter) {
            $query_builder = $query_builder->where('subject', '=', $filter);
        }
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::CREATED_AT_DESC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.contacts.table', [
            'list' => $list,
            'sort' => $sort,
            'search' => $search,
            'filter' => $filter
        ]);
    }

    public function detail($id)
    {
        return view('admin.contacts.detail', ['detail' => Contact::find($id)]);
    }

    public function delete($id)
    {
        Contact::where('id', $id)->delete();
        return back();
    }
}
