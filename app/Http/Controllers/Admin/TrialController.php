<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrialRequest;
use App\Models\Trial;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $type = $request->query('type');
        $query_builder = Trial::query();
        $query_builder = build_search_query($query_builder, $search, ['title']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        if ($type) {
            $query_builder = $query_builder->where('type', $type);
        }
        $list = $query_builder->paginate(10)->appends(['search' => $search, 'type' => $type]);
        return view('admin.trials.table', [
            'search' => $search,
            'list' => $list,
            'type' => $type,
            'sort' => $sort
        ]);
    }

    public function create()
    {
        return view('admin.trials.form', [
            'detail' => null
        ]);
    }

    public function store(TrialRequest $request)
    {
        $trial = new Trial();
        $trial->fill($request->validated());
        $trial->save();
        return redirect()->route('list_trial');
    }

    public function edit($id)
    {
        return view('admin.trials.form', [
            'detail' => Trial::find($id)
        ]);
    }

    public function update(TrialRequest $request, $id)
    {
        $trial = Trial::find($id);
        $trial->update($request->validated());
        $trial->save();
        return redirect()->route('list_trial');
    }

    public function delete($id)
    {
        $detailTrial = Trial::find($id);
        $detailTrial->delete();
        return redirect()->route('list_trial');
    }
}
