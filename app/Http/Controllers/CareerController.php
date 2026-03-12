<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'required|digits_between:10,12',
            'profile' => 'required|string',
            'resume'  => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // ✅ Store file in storage/app/public/resumes
        $path = $request->file('resume')->store('resumes', 'public');

        CareerApplication::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'profile' => $request->profile,
            'resume'  => $path, // ex: resumes/abc123.pdf
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Application submitted successfully!'
        ]);
    }
}
