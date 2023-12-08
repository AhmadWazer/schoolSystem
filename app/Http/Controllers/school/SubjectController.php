<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use DB;

class SubjectController extends Controller
{
    public function subject()
    {
        $value = Subject::get();
        return view('school.subject')->with('value',$value);
    }
    public function addeditsubject()
    {
        // $tdata = Teacher::get();
        return view('school.addeditsubject');
    }
    public function store(Request $request)
    {
        $sdata = new Subject;
        $sdata->s_name = $request->s_name;
        $sdata->s_code = $request->s_code;
        $sdata->s_description = $request->s_description;
        $sdata->assign_teacher = $request->assign_teacher;
        $sdata->save();
        return redirect('subject');
    }
    public function edit($id)
    {
        // $tdata = Teacher::get();
        $sdata = Subject::findOrFail($id);
        return view('school.addeditsubject')->with('sdata',$sdata);
    }
    public function update(Request $request, $id)
    {
        
        $sdata = Subject::findOrFail($id);
        $sdata->s_name = $request->s_name;
        $sdata->s_code = $request->s_code;
        $sdata->s_description = $request->s_description;
        $sdata->assign_teacher = $request->assign_teacher;
        $sdata->save();
        return redirect('subject');
    }
    public function delete($id)
    {
        Subject::destory($id);
        
        return redirect('subject');
    }
}
