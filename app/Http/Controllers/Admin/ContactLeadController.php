<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactLeadController extends Controller
{
    /**
     * Display leads list with search, filter & pagination
     */
    public function index(Request $request)
    {
        $query = Contact::query();

        // 🔍 Search (name, email, phone, service)
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('service', 'like', "%{$search}%");
            });
        }

        // 📅 From date filter
        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        // 📅 To date filter
        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        // ⭐ Important leads first + latest
        $leads = $query
            ->orderByDesc('is_important')
            ->latest()
            ->paginate(20)
            ->withQueryString(); // keep filters during pagination

        return view('admin.leads.index', compact('leads'));
    }

    /**
     * Toggle important (star / unstar)
     */
    public function toggleImportant($id)
    {
        $lead = Contact::findOrFail($id);

        $lead->is_important = ! $lead->is_important;
        $lead->save();

        return back()->with('success', 'Lead updated successfully');
    }

    /**
     * Delete lead
     */
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return back()->with('success', 'Lead deleted successfully');
    }
}
