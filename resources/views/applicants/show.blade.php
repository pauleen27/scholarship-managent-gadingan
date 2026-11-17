@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Applicant Details</h2>

        <a href="{{ route('applicants.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h5 class="mb-3">Personal Information</h5>

            <p><strong>First Name:</strong> {{ $applicant->first_name }}</p>
            <p><strong>Middle Name:</strong> {{ $applicant->middle_name ?? 'N/A' }}</p>
            <p><strong>Last Name:</strong> {{ $applicant->last_name }}</p>
            <p><strong>Suffix:</strong> {{ $applicant->suffix ?? 'N/A' }}</p>
            <p><strong>Birthdate:</strong> {{ $applicant->birthdate }}</p>
            <p><strong>Gender:</strong> {{ $applicant->gender }}</p>
            <p><strong>Email:</strong> {{ $applicant->email }}</p>
            <p><strong>Contact Number:</strong> {{ $applicant->contact_number }}</p>

            <hr>

            <h5 class="mb-3">Educational Information</h5>

            <p><strong>School Name:</strong> {{ $applicant->school_name }}</p>
            <p><strong>Course / Strand:</strong> {{ $applicant->course }}</p>
            <p><strong>Year Level:</strong> {{ $applicant->year_level }}</p>

            <hr>

            <h5 class="mb-3">Scholarship Information</h5>

            <p><strong>Scholarship Type:</strong> {{ $applicant->scholarship_type }}</p>
            <p><strong>Application Status:</strong> {{ $applicant->application_status }}</p>

        </div>
    </div>

</div>

@endsection
