<x-sidebar />
<div class="container mt-4">
<div class="card text-center">
  <div class="card-header">
    Teacher Details
  </div>
                  @php
                    $tags = explode(',',@$show->assign_subject);
                    $num_tags = count($tags);
                    $ctags = explode(',',@$show->assign_class);
                    $num_ctags = count($ctags);
                  @endphp
  <div class="card-body">
    <h5 class="card-title"><strong>Teacher Name:</strong>{{@$show->name}}</h5>
    <h5 class="card-title"><strong>Teacher Email:</strong> {{@$show->email}}</h5>
    <h5 class="card-title"><strong>Teacher Password:</strong> {{@$show->password}}</h5>
    <h5 class="card-title"><strong>Teacher Phone:</strong> {{@$show->phone}}</h5>
    <h5 class="card-title"><strong>Teacher DOB:</strong> {{@$show->dob}}</h5>
    <h5 class="card-title"><strong>Teacher Gender:</strong> {{@$show->gender}}</h5>
    <h5 class="card-title"><strong>Teacher current_address:</strong> {{@$show->current_address}}</h5>
    <h5 class="card-title"><strong>Teacher permanent_address:</strong> {{@$show->permenent_address}}</h5>
    <h5 class="card-title"><strong>Teacher Image:</strong> {{@$show->image}}</h5>
    <h5 class="card-title"><strong>Teacher Class:</strong> 
                                 @foreach($ctags as $ctag)  
                                @php
                                $clas=DB::table('classes')->where('id',$ctag)->first();
                                @endphp
                                <td> {{ $clas->c_name }},</td>
                                @endforeach</h5>
    <h5 class="card-title"><strong>Teacher Subject-Code:</strong> 
                                 @foreach($tags as $tag)  
                                @php
                                $sub=DB::table('subjects')->where('id',$tag)->first();
                                @endphp
                                <td> {{ $sub->s_code }},</td>
                                @endforeach</h5>

    <a href="/teacher" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>
<x-footer />
