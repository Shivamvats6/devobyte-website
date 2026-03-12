<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = CareerApplication::latest();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                  ->orWhere('email', 'like', "%{$request->search}%")
                  ->orWhere('phone', 'like', "%{$request->search}%")
                  ->orWhere('profile', 'like', "%{$request->search}%");
            });
        }

        if ($request->from_date) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->to_date) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $careers = $query->paginate(20)->withQueryString();

        return view('admin.careers.index', compact('careers'));
    }

    public function toggleImportant($id)
    {
        $career = CareerApplication::findOrFail($id);
        $career->is_important = !$career->is_important;
        $career->save();

        return back();
    }

    public function destroy($id)
    {
        $career = CareerApplication::findOrFail($id);

        if ($career->resume && Storage::disk('public')->exists($career->resume)) {
            Storage::disk('public')->delete($career->resume);
        }

        $career->delete();

        return back()->with('success', 'Career application deleted');
    }
}
