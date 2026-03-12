<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerVacancy;
use Illuminate\Http\Request;

class CareerVacancyController extends Controller
{
    /**
     * List all vacancies
     */
    public function index()
    {
        $vacancies = CareerVacancy::latest()->paginate(10);

        return view('admin.careers.vacancies.index', compact('vacancies'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.careers.vacancies.create');
    }

    /**
     * Store new vacancy
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'experience'       => 'required|string|max:100',
            'deadline'         => 'required|date',
            'summary'          => 'required|string',
            'responsibilities' => 'required|string',
            'requirements'     => 'required|string',
        ]);

        CareerVacancy::create([
            'title'            => $request->title,
            'experience'       => $request->experience,
            'deadline'         => $request->deadline,
            'summary'          => $request->summary,
            'responsibilities' => preg_split("/\r\n|\n|\r/", $request->responsibilities),
            'requirements'     => preg_split("/\r\n|\n|\r/", $request->requirements),
            'is_active'        => $request->has('is_active'),
        ]);

        return redirect()
            ->route('admin.careers.vacancies')
            ->with('success', 'Vacancy created successfully');
    }

    /**
     * Edit vacancy
     */
    public function edit($id)
    {
        $vacancy = CareerVacancy::findOrFail($id);

        return view('admin.careers.vacancies.edit', compact('vacancy'));
    }

    /**
     * Update vacancy
     */
    public function update(Request $request, $id)
    {
        $vacancy = CareerVacancy::findOrFail($id);

        $request->validate([
            'title'            => 'required|string|max:255',
            'experience'       => 'required|string|max:100',
            'deadline'         => 'required|date',
            'summary'          => 'required|string',
            'responsibilities' => 'required|string',
            'requirements'     => 'required|string',
        ]);

        $vacancy->update([
            'title'            => $request->title,
            'experience'       => $request->experience,
            'deadline'         => $request->deadline,
            'summary'          => $request->summary,
            'responsibilities' => $request->responsibilities,
            'requirements'     => $request->requirements,
            'is_active'        => $request->has('is_active'),
        ]);

        return redirect()
            ->route('admin.careers.vacancies')
            ->with('success', 'Vacancy updated successfully');
    }

    /**
     * Delete vacancy
     */
    public function destroy($id)
    {
        CareerVacancy::findOrFail($id)->delete();

        return back()->with('success', 'Vacancy deleted successfully');
    }

    /**
     * Toggle active/inactive
     */
    public function toggleStatus($id)
    {
        $vacancy = CareerVacancy::findOrFail($id);
        $vacancy->update([
            'is_active' => !$vacancy->is_active
        ]);

        return back();
    }
}
