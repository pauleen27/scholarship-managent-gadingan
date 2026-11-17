@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Edit Applicant</h2>

        <a href="{{ route('applicants.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
                @csrf
                @method('PUT')

                <h5 class="mb-3">Personal Information</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control"
                            value="{{ old('first_name', $applicant->first_name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control"
                            value="{{ old('middle_name', $applicant->middle_name) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control"
                            value="{{ old('last_name', $applicant->last_name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Suffix</label>
                        <input type="text" name="suffix" class="form-control"
                            value="{{ old('suffix', $applicant->suffix) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control"
                            value="{{ old('birthdate', $applicant->birthdate) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="Male" {{ old('gender', $applicant->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender', $applicant->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                            value="{{ old('email', $applicant->email) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control"
                            value="{{ old('contact_number', $applicant->contact_number) }}" required>
                    </div>
                </div>

                <hr>

                <h5 class="mb-3">Educational Information</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">School Name</label>
                        <input type="text" name="school_name" class="form-control"
                            value="{{ old('school_name', $applicant->school_name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Course / Strand</label>
                        <input type="text" name="course" class="form-control"
                            value="{{ old('course', $applicant->course) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Year Level</label>
                        <select name="year_level" class="form-select" required>
                            @foreach(['Grade 11', 'Grade 12', '1st Year', '2nd Year', '3rd Year', '4th Year', '5th Year'] as $level)
                                <option value="{{ $level }}" {{ old('year_level', $applicant->year_level) == $level ? 'selected' : '' }}>
                                    {{ $level }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <hr>

                <h5 class="mb-3">Scholarship Information</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Scholarship Type</label>
                        <select name="scholarship_type" class="form-select" required>
                            @foreach(['Academic Scholarship', 'Financial Assistance', 'Athletic Scholarship', 'Merit Scholarship', 'Government Scholarship'] as $type)
                                <option value="{{ $type }}" {{ old('scholarship_type', $applicant->scholarship_type) == $type ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Application Status</label>
                        <select name="application_status" class="form-select" required>
                            @foreach(['Pending', 'Approved', 'Rejected'] as $status)
                                <option value="{{ $status }}" {{ old('application_status', $applicant->application_status) == $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">
                    Update Applicant
                </button>

                <a href="{{ route('applicants.index') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

@endsection
