<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classes;
use App\Models\Subject;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $show = User::where('role', '=', 'student')->get();
        $teach = User::where('role', '=', 'teacher')->get();
        $parent = User::where('role', '=', 'parant')->get();
        $sub = Subject::get();
        $class = Classes::get();
        return view('home')->with('show',$show)->with('teach',$teach)->with('parent',$parent)
        ->with('sub',$sub)->with('class',$class);
    }
    public function pending()
    {
        return view('pending');
    }
    public function studentAtten($id)
    {
        $value = Classes::findOrFail($id);
        return view('school.studentAttendance')->with('value',$value);
    }
    public function save(Request $request)
    {
        // dd($request->all());
        foreach ($request->attend as $studentId => $attendanceValue) {
        DB::table('attendance')->insert([
         'student_id' => $studentId,
         'class_id' => $request->class,
         'subject_id' => $request->subject,
         'attend' => $attendanceValue,
         'attend_date' => $request->date,
         'teacher_id' => $request->teacherId,
        ]);
    }

    return Redirect()->route("home");
    }
    public function stdData(Request $request)
    {
        $studentId = $request->studentId;
        $parentId = $request->parentId;
        $student = DB::table('users')->where('id',$studentId)->get();
        foreach ($student as $data) {
            // Fetch student name
            $classData = DB::table('classes')->where('id', $data->student_class)->first();
            $data->class_name = $classData->c_name;
    
            // Fetch teacher name
            $parent = DB::table('users')->where('id', $data->student_parent)->first();
            $data->parent_name = $parent->name;
        }
        return response()->json($student);
    }
    public function studAttendance(Request $request)
    {
        $attend = $request->attend;
        $attendanceData = DB::table('attendance')->where('student_id',$attend)->get();
        foreach($attendanceData as $value){
            // class name
            $classData = DB::table('classes')->where('id', $value->class_id)->first();
            $value->class_name = $classData->c_name;
            // teacher name
            $teacherData = DB::table('users')->where('id',$value->teacher_id)->first();
            $value->teacher_name = $teacherData->name;
        }
        return response()->json($attendanceData);
    }
}
