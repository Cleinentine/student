<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'homework_id',
        'student_id',
        'remarks',
        'status',
    ];
}
