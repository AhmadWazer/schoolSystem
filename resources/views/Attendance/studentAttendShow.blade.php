<x-sidebar/>
<!-- Attendance -->

 <div class="col-12" id="form">
        <div class="container ">
            <div class=" mb-4 mt-4">
                <div class="card text-center pb-3">
                        <div class="card-header">
                            My Attendance
                        </div>
                        @php
                        $student = explode(',', Auth::user()->email);
                            $studentName = DB::table('users')->whereIn('email',$student)
                            ->get();
                        @endphp
                    <div class="table-responsive text-nowrap pt-3">
                        <table class="table ">
                            <thead>
                                <tr>
                            @foreach($studentName as $stdname)
                                    <th>Date</th>
                                    <th>Class</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Attendance</th>
                            @endforeach
                                </tr>
                            </thead>
                            @php
                            $value = DB::table('attendance')->where('student_id',$stdname->id)->get();
                            @endphp
                            <tbody class="table-border-bottom-0">
                                
                            @foreach($value as $data)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{$data->attend_date}}</strong></td>
                                    <td>{{$data->class_id}}</td>
                                    <td>{{$data->subject_id}}</td>
                                    <td>{{$data->teacher_id}}</td>
                                    <td style="color: {{$data->attend === 'prasent' ? 'green' : 'red'}}">{{$data->attend}}</td>
                                </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>