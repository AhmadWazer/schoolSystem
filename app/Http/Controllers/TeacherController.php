<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher()
    {
        return view('school.teacher');
    }
    public function addeditteacher()
    {
        return view('school.addeditteacher');
    }
}
