<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function forget_password()
    {
        return view('admin.Forget_password');
    }
}
