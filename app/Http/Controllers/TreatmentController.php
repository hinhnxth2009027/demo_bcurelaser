<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Treatment;

class TreatmentController extends Controller
{
    public function list()
    {
        $treatment = Treatment::all();
        return view('treatment', [
            'list' => $treatment,
        ]);
    }

    public function detail($slug)
    {
        $detail = Treatment::where('slug', $slug)->first();
        return view('treatment-detail', [
            'detail' => $detail,
        ]);
    }
}
