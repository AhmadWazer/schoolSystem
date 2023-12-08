<?php

namespace App\Http\Controllers\school;

use App\Models\User;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\DateSheet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacher()
    {

        $data = User::where('role', '=', 'teacher')->get();
                    
        return view('school.teacher')->with('data',$data);
    }
    public function addeditteacher()
    {
        $sub = Subject::get();
        $clas = Classes::get();
        
        return view('school.addeditteacher')->with('sub',$sub)->with('clas',$clas);
    }
    public function store(Request $request)
    {        
        $assignedClasses = implode(',', $request->input('assign_clas', []));
        $assignedSubjects = implode(',', $request->input('assign_sub', []));

        $data = new User;
        $data->name = $request->tname;
        $data->email = $request->temail;
        $data->password = $request->tpassword;
        $data->phone = $request->tphone;
        $data->gender = $request->tgender;
        $data->dob = $request->tdob;
        $data->current_address = $request->tcurrentadd;
        $data->permenent_address = $request->tpaddress;
        $data->image = $request->picture;
        $data->assign_class = $assignedClasses;//checkedbox data
        $data->assign_subject = $assignedSubjects;//checkedbox subjects
         $data->save();
         return redirect('/teacher');
    }
    public function show($id)
    {
        $show = User::findOrFail($id);
        return view('school.showteacher')->with('show', $show);
    }
    public function edit($id)
    {
        $teacherdata = User::findOrFail($id);
        $sub = Subject::get();
        $clas = Classes::get();
      
        return view('school.addeditteacher')->with('teacherdata', $teacherdata)->with('sub',$sub)->with('clas',$clas);
    }
    public function update(Request $request, $id)
    {
        $assignedClasses = implode(',', $request->input('assign_clas', []));
        $assignedSubjects = implode(',', $request->input('assign_sub', []));

        $data = User::findOrFail($id);
        $data->name = $request->tname;
        $data->email = $request->temail;
        $data->password = $request->tpassword;
        $data->phone = $request->tphone;
        $data->gender = $request->tgender;
        $data->dob = $request->tdob;
        $data->current_address = $request->tcurrentadd;
        $data->permenent_address = $request->tpaddress;
        $data->image = $request->picture;
        $data->assign_class = $assignedClasses;//checkedbox classes
        $data->assign_subject = $assignedSubjects;//checkedbox subjects
         $data->save();
         return Redirect('/teacher');
    }
    public function delete($id)
    {
        User::destroy($id);
        return Redirect()->route("teacher");
    }
    public function datesheet()
    {    
        $id = Auth::user()->assign_subject;
        $cid = explode(',', Auth::user()->assign_class);

        $subject = Subject::where('id',$id)->get();
        $class = Classes::whereIn('id',$cid)->get();
        // dd($class);
        
        return view('school.datesheet')->with('subject',$subject)->with('class',$class);
    }
    public function saveDS(Request $request)
    {
        $value = new DateSheet;
        $value->description = $request->message;
        $value->class_id = $request->classData;
        $value->subject_id = $request->subjectData;
        $value->date = $request->date;
        $value->start_time = $request->stime;
        $value->end_time = $request->etime;
        $value->teacher_id = $request->teacher;
        // dd($value);
        $value->save();
        return redirect()->route('teacher.datesheet');
    }
}
