<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function exam()
    {
        return view('school.exam');
    }
}
