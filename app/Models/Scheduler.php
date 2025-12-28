<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scheduler extends Model
{
    protected $fillable = [
        'schedule_id',
        'duration_start',
        'duration_end',
    ];
}
