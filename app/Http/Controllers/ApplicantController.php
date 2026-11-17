<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // Display all applicants
    public function index()
    {
        $applicants = Applicant::latest()->get();

        return view('applicants.index', compact('applicants'));
    }

    // Show the add applicant form
    public function create()
    {
        return view('applicants.create');
    }

    // Save new applicant
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'suffix' => 'nullable|string|max:20',
            'birthdate' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:applicants,email',
            'contact_number' => 'required|string|max:20',
            'school_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_level' => 'required|string|max:50',
            'scholarship_type' => 'required|string|max:255',
        ]);

        Applicant::create($validated);

        return redirect()->route('applicants.index')
            ->with('success', 'Applicant added successfully!');
    }

    // Show one applicant
    public function show(Applicant $applicant)
    {
        return view('applicants.show', compact('applicant'));
    }

    // Show edit applicant form
    public function edit(Applicant $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    // Update applicant
    public function update(Request $request, Applicant $applicant)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'suffix' => 'nullable|string|max:20',
            'birthdate' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:applicants,email,' . $applicant->id,
            'contact_number' => 'required|string|max:20',
            'school_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_level' => 'required|string|max:50',
            'scholarship_type' => 'required|string|max:255',
            'application_status' => 'required|in:Pending,Approved,Rejected',
        ]);

        $applicant->update($validated);

        return redirect()->route('applicants.index')
            ->with('success', 'Applicant updated successfully!');
    }

    // Delete applicant
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();

        return redirect()->route('applicants.index')
            ->with('success', 'Applicant deleted successfully!');
    }
}
