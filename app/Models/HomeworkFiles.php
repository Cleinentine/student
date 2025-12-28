<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeworkFiles extends Model
{
    protected $fillable = [
        'homework_id',
        'student_id',
        'path',
    ];
}
