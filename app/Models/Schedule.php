<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'faculty_id',
        'program_id',
        'section_id',
        'semester_id',
        'subject_id',
        'day',
        'location',
        'start',
        'end',
    ];
}
