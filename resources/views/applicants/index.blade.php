@extends('layouts.app')

@section('title', 'Dashboard - Scholarship Management System')

@section('page-heading', 'Dashboard')

@section('content')

<div class="mb-4">
    <h3 class="fw-bold">Welcome to Scholarship Management System!</h3>
    <p class="text-muted">
        Manage scholarship applicants and monitor their application status.
    </p>
</div>

<!-- Statistics Cards -->
<div class="row g-3 mb-4">

    <!-- Total Applicants -->
    <div class="col-md-6 col-lg-3">
        <div class="content-card">
            <h6 class="text-muted">Total Applicants</h6>
            <h2 class="fw-bold text-success">
                {{ $applicants->count() }}
            </h2>
            <small class="text-muted">All registered applicants</small>
        </div>
    </div>

    <!-- Pending -->
    <div class="col-md-6 col-lg-3">
        <div class="content-card">
            <h6 class="text-muted">Pending Applications</h6>
            <h2 class="fw-bold text-warning">
                {{ $applicants->where('application_status', 'Pending')->count() }}
            </h2>
            <small class="text-muted">Waiting for approval</small>
        </div>
    </div>

    <!-- Approved -->
    <div class="col-md-6 col-lg-3">
        <div class="content-card">
            <h6 class="text-muted">Approved Applications</h6>
            <h2 class="fw-bold text-success">
                {{ $applicants->where('application_status', 'Approved')->count() }}
            </h2>
            <small class="text-muted">Successfully approved</small>
        </div>
    </div>

    <!-- Rejected -->
    <div class="col-md-6 col-lg-3">
        <div class="content-card">
            <h6 class="text-muted">Rejected Applications</h6>
            <h2 class="fw-bold text-danger">
                {{ $applicants->where('application_status', 'Rejected')->count() }}
            </h2>
            <small class="text-muted">Rejected applications</small>
        </div>
    </div>

</div>

<!-- Applicants Table -->
<div class="content-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h5 class="fw-bold mb-1">Recent Applicants</h5>
            <p class="text-muted mb-0">
                List of registered scholarship applicants.
            </p>
        </div>

        <a href="{{ route('applicants.create') }}"
           class="btn btn-success">
            + Add Applicant
        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Applicant Name</th>
                    <th>Email</th>
                    <th>School</th>
                    <th>Scholarship</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            
            
<tbody>

    @forelse($applicants as $applicant)

        <tr>
            <td>{{ $applicant->id }}</td>

            <td>
                {{ $applicant->first_name }}
                {{ $applicant->middle_name }}
                {{ $applicant->last_name }}
                {{ $applicant->suffix }}
            </td>

            <td>{{ $applicant->email }}</td>

            <td>{{ $applicant->school_name }}</td>

            <td>{{ $applicant->scholarship_type }}</td>

            <td>
                @if($applicant->application_status == 'Approved')
                    <span class="badge bg-success">Approved</span>
                @elseif($applicant->application_status == 'Rejected')
                    <span class="badge bg-danger">Rejected</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </td>

            <td>
                <a href="{{ route('applicants.show', $applicant->id) }}"
                    class="btn btn-sm btn-info">
                    View
                </a>

                <a href="{{ route('applicants.edit', $applicant->id) }}"
                    class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('applicants.destroy', $applicant->id) }}"
                    method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this applicant?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

    @empty

        <tr>
            <td colspan="7" class="text-center text-muted py-4">
                No scholarship applicants found.
            </td>
        </tr>

    @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
