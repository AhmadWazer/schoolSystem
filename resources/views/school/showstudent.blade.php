<x-sidebar />
<div class="container mt-4">
<div class="card text-center">
  <div class="card-header">
  Student Details
  </div>

                    @php
                    $tags = explode(',',@$show->student_parent);
                    $stdclass = explode(',',@$show->student_class);
                    
                    @endphp
  <div class="card-body">
    <h5 class="card-title"><strong>Student Name:</strong>{{@$show->name}}</h5>
    <h5 class="card-title"><strong>Student Email:</strong> {{@$show->email}}</h5>
    <h5 class="card-title"><strong>Student Password:</strong> {{@$show->password}}</h5>
    <h5 class="card-title"><strong>Student Roll-Number:</strong> {{@$show->roll_number}}</h5>
    <h5 class="card-title"><strong>Student Phone:</strong> {{@$show->phone}}</h5>
    <h5 class="card-title"><strong>Student DOB:</strong> {{@$show->dob}}</h5>
    <h5 class="card-title"><strong>Student Gender:</strong> {{@$show->gender}}</h5>
    <h5 class="card-title"><strong>Student current_address:</strong> {{@$show->current_address}}</h5>
    <h5 class="card-title"><strong>Student permanent_address:</strong> {{@$show->permenent_address}}</h5>
    <h5 class="card-title"><strong>Assign Class:</strong>
                                  @php
                                  $sum = DB::table('classes')->where('id',$stdclass)->value('c_name');
                                  @endphp
                                  {{ $sum }},
                                </h5>
    <h5 class="card-title"><strong>Student Parent:</strong> 
                                @php
                                $clas=DB::table('users')->where('id',$tags)->value('name');
                                @endphp
                                {{ $clas }},
                                </h5>
    <h5 class="card-title"><strong>Student Image:</strong> {{@$show->image}}</h5>
    <a href="/student" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>
<x-footer />
