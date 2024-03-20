<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function cours()
    {
        return view('school.cours');
    }
}
