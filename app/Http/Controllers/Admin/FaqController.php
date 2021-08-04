<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Faq::query();
        $query_builder = build_search_query($query_builder, $search, ['question']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.faqs.table', [
            'search' => '',
            'list' => $list,
            'sort' => $sort
        ]);
    }

    public function create()
    {
        return view('admin.faqs.form', [
            'detail' => null
        ]);
    }

    public function store(FaqRequest $request)
    {
        $faq = new Faq();
        $faq->fill($request->validated());
        $faq->save();
        return redirect()->route('list_faq');
    }

    public function edit($id)
    {
        return view('admin.faqs.form', [
            'detail' => Faq::find($id)
        ]);
    }

    public function update(FaqRequest $request, $id)
    {
        $detail = Faq::find($id);
        $detail->update($request->validated());
        $detail->save();
        return redirect()->route('list_faq');
    }

    public function delete($id)
    {

        $detail = Faq::find($id);
        $detail->delete();
        return redirect()->route('list_faq');
    }
}
