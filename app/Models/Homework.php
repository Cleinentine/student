<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'faculty_id',
        'program_id',
        'section_id',
        'title',
        'description',
        'deadline',
    ];
}
