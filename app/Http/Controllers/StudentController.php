<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        return view('school.student');
    }
    public function addeditstudent()
    {
        return view('school.addedit_student');
    }
}
