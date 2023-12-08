<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Subjent;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        's_name',
        's_code',
        's_discription',
        'assign_teacher'
    ];

}
