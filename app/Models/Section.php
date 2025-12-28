<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'program_id',
        'class',
        'level',
        'limit',
    ];
}
