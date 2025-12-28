<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'faculty_id',
        'homework_id',
        'student_id',
        'subject_id',
        'grade',
        'remarks',
    ];
}
