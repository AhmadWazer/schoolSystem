<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RoleparmisionController extends Controller
{
    public function roleparmision()
    {
        $data = DB::table('role')->get();
        return view('school.roleparmision')->with('data',$data);
    }
}
