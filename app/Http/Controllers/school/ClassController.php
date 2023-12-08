<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use DB;

class ClassController extends Controller
{
    public function class()
    { 
        $cdata = Classes::get();
        
        return view('school.class')->with('cdata',$cdata);
    }
    public function addeditclass()
    {
        // $tdata = Teacher::get();
        return view('school.addeditclass');
    }
    public function store(Request $request)
    {
        $cdata = new Classes;
        $cdata->c_name = $request->c_name;
        $cdata->c_numaric_name = $request->c_numaric_name;
        $cdata->c_description = $request->c_description;
        $cdata->assign_teacher = $request->assign_teacher;
        $cdata->save();
        return redirect('class');
    }
    public function edit($id)
    {
        $cdata = Classes::findOrFail($id);
        // $tdata = Teacher::get();
        return view('school.addeditclass')->with('cdata',$cdata);
    }
    public function update(Request $request, $id)
    {
        $cdata = Classes::findOrFail($id);
        $cdata->c_name = $request->c_name;
        $cdata->c_numaric_name = $request->c_numaric_name;
        $cdata->c_description = $request->c_description;
        $cdata->assign_teacher = $request->assign_teacher;
        $cdata->save();
        return redirect('class');
    }
    public function delete($id)
    {
        Classes::destory($id);
        return redirect('class');
    }
}
