<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'birthdate',
        'gender',
        'email',
        'contact_number',
        'school_name',
        'course',
        'year_level',
        'scholarship_type',
        'application_status',
    ];
}
