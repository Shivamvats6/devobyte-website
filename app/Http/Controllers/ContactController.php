<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => 'nullable|string|max:20',
        'service' => 'nullable|string|max:255',
        'message' => 'nullable|string',
    ]);

    Contact::create($request->all());

    return redirect()->back()->with([
        'popup_success' => true,
        'success_message' => 'Thank you! Our team will contact you shortly.'
    ]);
}
}
