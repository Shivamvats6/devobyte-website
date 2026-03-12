<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\CareerApplication;

class DashboardController extends Controller
{
    public function index()
    {
        // COUNTS
        $totalLeads    = Contact::count();
        $totalCareers  = CareerApplication::count();

        // 🕒 LATEST DATA
        $latestLeads    = Contact::latest()->take(5)->get();
        $latestCareers  = CareerApplication::latest()->take(5)->get();

        // 🚧 FUTURE USE (safe defaults)
        $totalBlogs   = 0;
        $totalPages   = 0;

        return view('admin.dashboard', compact(
            'totalLeads',
            'totalCareers',
            'latestLeads',
            'latestCareers',
            'totalBlogs',
            'totalPages'
        ));
    }
}
