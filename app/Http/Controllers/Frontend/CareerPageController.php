<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerVacancy;

class CareerPageController extends Controller
{
    public function index()
    {
        $vacancies = CareerVacancy::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.careers', compact('vacancies'));
    }
}
