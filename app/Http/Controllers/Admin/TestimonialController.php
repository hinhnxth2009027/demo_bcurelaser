<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Testimonial::query();
        $query_builder = build_search_query($query_builder, $search, ['name', 'title']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.testimonials.table', [
            'search' => $search,
            'list' => $list,
            'sort' => $sort
        ]);
    }

    public function create()
    {
        return view('admin.testimonials.form', [
            'detail' => null
        ]);
    }

    public function store(TestimonialRequest $request)
    {
        $testimonial = new Testimonial();
        $testimonial->fill($request->validated());
        $testimonial->save();
        return redirect()->route('list_testimonial');
    }

    public function edit($id)
    {
        $detail = Testimonial::find($id);
        return view('admin.testimonials.form', [
            'detail' => $detail
        ]);
    }

    public function update(TestimonialRequest $request, $id)
    {
        $detail = Testimonial::find($id);
        $detail->update($request->validated());
        $detail->save();
        return redirect()->route('list_testimonial');
    }

    public function delete($id)
    {
        $detail = Testimonial::find($id);
        $detail->delete();
        return redirect()->route('list_testimonial');
    }
}
