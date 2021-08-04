<?php

namespace App\Http\Controllers;

use App\Models\FacebookReview;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Testimonial;

class ProductController extends Controller
{
    public function detail($slug)
    {
        $product = Product::with('specifications')->where('slug', $slug)->first();
        $faqs = Faq::query()->orderBy('sort_number', 'ASC')->get();
        $reviews = FacebookReview::query()->orderBy('sort_number', 'ASC')->get();
        $testimonials = Testimonial::query()->orderBy('sort_number', 'ASC')->limit(6)->get();
        return view('product-detail', [
            'detail' => $product,
            'faqs' => $faqs,
            'reviews' => $reviews,
            'testimonials' => $testimonials
        ]);
    }

    public function list(){
        $products = Product::all();
        return view('products',['products'=>$products]);
    }
}
