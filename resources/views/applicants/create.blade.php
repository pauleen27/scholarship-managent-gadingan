@extends('layouts.app')

@section('title', 'Add Applicant - Scholarship Management System')

@section('page-heading', 'Add New Applicant')

@section('content')

<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Add Scholarship Applicant</h4>
        <p class="text-muted">
            Fill in the information below to register a new scholarship applicant.
        </p>
    </div>

    <form action="{{ route('applicants.store') }}" method="POST">

        @csrf

        <!-- PERSONAL INFORMATION -->
        <h5 class="fw-bold text-success mb-3">
            Personal Information
        </h5>

        <div class="row g-3 mb-4">

            <div class="col-md-4">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name"
                    class="form-control" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Middle Name</label>
                <input type="text" name="middle_name"
                    class="form-control" value="{{ old('middle_name') }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name"
                    class="form-control" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Suffix</label>
                <input type="text" name="suffix"
                    class="form-control" value="{{ old('suffix') }}"
                    placeholder="Jr., Sr., III (Optional)">
            </div>

            <div class="col-md-4">
                <label class="form-label">Birthdate</label>
                <input type="date" name="birthdate"
                    class="form-control" value="{{ old('birthdate') }}" required>
                @error('birthdate')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email"
                    class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">Contact Number</label>
                <input type="text" name="contact_number"
                    class="form-control" value="{{ old('contact_number') }}" required>
            </div>

        </div>

        <hr>

        <!-- EDUCATIONAL INFORMATION -->
        <h5 class="fw-bold text-success mb-3">
            Educational Information
        </h5>

        <div class="row g-3 mb-4">

            <div class="col-md-6">
                <label class="form-label">School Name</label>
                <input type="text" name="school_name"
                    class="form-control" value="{{ old('school_name') }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Course / Strand</label>
                <input type="text" name="course"
                    class="form-control" value="{{ old('course') }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Year Level</label>
                <select name="year_level" class="form-select" required>
                    <option value="">Select Year Level</option>
                    <option value="Grade 11">Grade 11</option>
                    <option value="Grade 12">Grade 12</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                    <option value="5th Year">5th Year</option>
                </select>
            </div>

        </div>

        <hr>

        <!-- SCHOLARSHIP INFORMATION -->
        <h5 class="fw-bold text-success mb-3">
            Scholarship Information
        </h5>

        <div class="row g-3 mb-4">

            <div class="col-md-6">
                <label class="form-label">Scholarship Type</label>
                <select name="scholarship_type" class="form-select" required>
                    <option value="">Select Scholarship</option>
                    <option value="Academic Scholarship">Academic Scholarship</option>
                    <option value="Financial Assistance">Financial Assistance</option>
                    <option value="Athletic Scholarship">Athletic Scholarship</option>
                    <option value="Merit Scholarship">Merit Scholarship</option>
                    <option value="Government Scholarship">Government Scholarship</option>
                </select>
            </div>

        </div>

        <!-- BUTTONS -->
        <div class="d-flex justify-content-end gap-2">

            <a href="{{ route('applicants.index') }}"
                class="btn btn-secondary">
                Cancel
            </a>

            <button type="submit" class="btn btn-success">
                Save Applicant
            </button>

        </div>

    </form>

</div>

@endsection
