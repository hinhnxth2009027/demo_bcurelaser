<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\TreatmentRequest;
use App\Models\Product;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TreatmentController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Treatment::query();
        $query_builder = build_search_query($query_builder, $search, ['title', 'content', 'protocol', 'protocol_images_caption', 'protocol_video_caption']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.treatments.table', ['list' => $list, 'sort' => $sort, 'search' => $search]);
    }

    public function create()
    {
        return view('admin.treatments.form', ['detail' => null]);
    }

    public function store(TreatmentRequest $request)
    {
        $request->validated();
        $treatment = new Treatment();
        $treatment->fill($request->all());
        $treatment->slug = $this->toSlug($treatment->title);
        $treatment->save();
        return redirect()->route('list_treatment');
    }

    public function edit($id)
    {
        return view('admin.treatments.form', ['detail' => Treatment::find($id)]);
    }

    public function update(TreatmentRequest $request, $id)
    {
        $request->validated();
        $treatment = Treatment::find($id);
        if ($treatment->title != $request->get('title')) {
            $treatment->slug = $this->toSlug($request->get('title'));
        }
        $treatment->update($request->all());
        $treatment->save();
        return redirect()->route('list_treatment');
    }

    public function delete($id)
    {
        Treatment::where('id', $id)->delete();
        return back();
    }

    public function toSlug($name)
    {
        $slug = Str::slug($name);
        $now = round(microtime(true));
        if (Treatment::query()->where('slug', $slug)->exists()) {
            $slug .= '-' . $now;
        }
        return $slug;
    }
}
