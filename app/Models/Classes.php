<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_name',
        'c_description',
        'c_numaric_name',
        'assign_teacher'
    ];
    
}
