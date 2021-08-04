<?php

namespace App\Http\Controllers;

use App\Enums\TrialType;
use App\Models\Trial;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function list()
    {
        $clinical = Trial::query()->where('type', '=', TrialType::CLINICAL_TRIAL)->get();
        $professional = Trial::query()->where('type', '=', TrialType::PROFESSIONAL_RECOMMENDATIONS)->get();
        return view('trial', [
            'clinical' => $clinical,
            'professional' => $professional,
        ]);
    }
}
