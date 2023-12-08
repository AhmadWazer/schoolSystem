<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AttendanceController extends Controller
{
    public function attendance()
    {
        return view('school.attendance');
    }
    public function attendanceShow(Request $request)
    {
        $selectedClass = $request->selectedClass;
        $attend = DB::table('attendance')->where('class_id',$selectedClass)->get();
        foreach ($attend as $attendance) {
            // Fetch student name
            $student = DB::table('users')->where('id', $attendance->student_id)->first();
            $attendance->student_name = $student->name;
    
            // Fetch teacher name
            $teacher = DB::table('users')->where('id', $attendance->teacher_id)->first();
            $attendance->teacher_name = $teacher->name;
        }
        return response()->json($attend);
    }
    public function subAttend(Request $request)
    {
        $selectedSubject = $request->selectedSubject;
        $subject = DB::table('attendance')->where('subject_id',$selectedSubject)->get();
        foreach ($subject as $attendance) {
            // Fetch student name
            $student = DB::table('users')->where('id', $attendance->student_id)->first();
            $attendance->student_name = $student->name;
    
            // Fetch teacher name
            $teacher = DB::table('users')->where('id', $attendance->teacher_id)->first();
            $attendance->teacher_name = $teacher->name;
            // get class name
            $classes = DB::table('classes')->where('id', $attendance->class_id)->first();
            $attendance->class_name = $classes->c_name;
        }
        return response()->json($subject);
    }
    public function searchattend(Request $request)
    {
        $selectedDate = $request->selectedDate;
        $selectClass = $request->selectClass;
        $date = DB::table('attendance')->where('attend_date',$selectedDate)
        ->where('class_id',$selectClass)->get();
        foreach ($date as $attendance) {
            // get student name
            $student = DB::table('users')->where('id', $attendance->student_id)->first();
            $attendance->student_name = $student->name;
            // get teacher name
            $teacher = DB::table('users')->where('id', $attendance->teacher_id)->first();
            $attendance->teacher_name = $teacher->name;
            // get class name
            $classes = DB::table('classes')->where('id', $attendance->class_id)->first();
            $attendance->class_name = $classes->c_name;
        }
        return response()->json($date);
    }
}
