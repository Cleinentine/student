<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'user_id',
        'student_no',
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'gender'
    ];
}
