<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\FacebookReview;
use Illuminate\Http\Request;

class FacebookReviewController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = FacebookReview::query();
        $query_builder = build_search_query($query_builder, $search, ['name', 'title']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.facebook_reviews.table', ['list' => $list, 'search' => $search, 'sort' => $sort]);
    }

    public function create()
    {
        return view('admin.facebook_reviews.form', ['detail' => '']);
    }

    public function store(Request $request)
    {
        $fb_review = new FacebookReview();
        $fb_review->fill($request->all());
        $fb_review->save();
        return redirect()->route('list_facebook_review');
    }

    public function edit($id)
    {
        return view('admin.facebook_reviews.form', ['detail' => FacebookReview::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this_review = FacebookReview::find($id);
        $data = $request->all();
        $this_review->update($data);
        $this_review->save();
        return redirect()->route('list_facebook_review');
    }

    public function delete($id)
    {
        FacebookReview::where('id', $id)->delete();
        return back();
    }
}
