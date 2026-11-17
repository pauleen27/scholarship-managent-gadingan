<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

// Homepage
Route::get('/', function () {
    return redirect()->route('applicants.index');
});

// Applicant CRUD Routes
Route::resource('applicants', ApplicantController::class);
