<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function list(Request $request)
    {
        $sort = $request->query('sort');
        $query_builder = Banner::query();
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10);
        return view('admin.banners.table', ['list' => $list, 'sort' => $sort,'search'=>'']);
    }

    public function create()
    {
        return view('admin.banners.form', ['detail' => '']);
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->fill($request->all());
        $banner->save();
        return redirect()->route('list_banner');
    }

    public function edit($id)
    {
        return view('admin.banners.form', ['detail' => Banner::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->update($request->all());
        $banner->save();
        return redirect()->route('list_banner');
    }

    public function delete($id)
    {
        Banner::where('id', $id)->delete();
        return back();
    }
}
