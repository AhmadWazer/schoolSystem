<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateSheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'class_id',
        'subject_id',
        'date',
        'start_time',
        'end_time'
    ];
}
