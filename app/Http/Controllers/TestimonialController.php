<?php

namespace App\Http\Controllers;

use App\Models\FacebookReview;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function list()
    {
        $testimonials = Testimonial::query()->orderBy('sort_number', 'ASC')->get();
        $reviews = FacebookReview::query()->orderBy('sort_number', 'ASC')->get();
        return view('testimonial', [
            'testimonials' => $testimonials,
            'reviews' => $reviews
        ]);
    }
}
