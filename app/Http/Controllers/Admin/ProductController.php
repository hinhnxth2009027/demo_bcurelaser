<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\TechnicalSpecification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Product::query();
        $query_builder = build_search_query($query_builder, $search, ['name']);
        $query_builder = build_sort_query($query_builder, $sort ? $sort : Sort::SORT_NUMBER_ASC);
        $list = $query_builder->paginate(10)->appends(['search' => $search]);
        return view('admin.products.table', ['list' => $list, 'sort' => $sort, 'search' => $search]);
    }

    public function create()
    {
        return view('admin.products.form', ['detail' => '', 'technical' => '']);
    }

    public function store(ProductRequest $request)
    {
        $request->validated();
        $product = new Product();
        $product->fill($request->all());
        $product->slug = $this->toSlug($product->name);
        $product->save();
        $properties = json_decode($request->properties);
        $units = json_decode($request->units);
        $values = json_decode($request->values);
        $notes = json_decode($request->notes);
        for ($i = 0; $i < sizeof($properties); $i++) {
            $technical = new TechnicalSpecification();
            $technical->product_id = $product->id;
            $technical->property = $properties[$i];
            $technical->units = $units[$i];
            $technical->value = $values[$i];
            $technical->notes = $notes[$i];
            $technical->save();
        }
        return redirect()->route('list_product');
    }

    public function edit($id)
    {
        $detail = Product::find($id);
        $technical = TechnicalSpecification::where('product_id', $id)->get();
        return view('admin.products.form', ['detail' => $detail, 'technical' => $technical]);
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        if ($product->name != $request->get('name')) {
            $product->slug = $this->toSlug($request->get('name'));
        }
        $product->update($request->validated());
        $product->save();
        $technical_delete = TechnicalSpecification::where('product_id', $id)->get();
        for ($i = 0; $i < sizeof($technical_delete); $i++) {
            TechnicalSpecification::find($technical_delete[$i]->id)->delete();
        }
        $properties = json_decode($request->properties);
        $units = json_decode($request->units);
        $values = json_decode($request->values);
        $notes = json_decode($request->notes);
        for ($i = 0; $i < sizeof($properties); $i++) {
            $technical = new TechnicalSpecification();
            $technical->product_id = $id;
            $technical->property = $properties[$i];
            $technical->units = $units[$i];
            $technical->value = $values[$i];
            $technical->notes = $notes[$i];
            $technical->save();
        }
        return redirect()->route('list_product');
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return back();
    }

    public function toSlug($name)
    {
        $slug = Str::slug($name);
        $now = round(microtime(true));
        if (Product::query()->where('slug', $slug)->exists()) {
            $slug .= '-' . $now;
        }
        return $slug;
    }
}
