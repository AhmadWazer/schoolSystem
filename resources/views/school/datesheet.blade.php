<x-sidebar />
<div class="content-wrapper">
    <div class="container mt-3">
        <div class="card col-7">
            <div class="card-header">
                Create DateSheet
            </div>
            <form action="{{url('/teacher/datesheet')}}" method="post">
                @csrf
                <div class="col-10 m-4">
                    <span class="m-2">Enter Test Related Data</span>
                    <textarea type="text" name="message" class="form-control m-2"></textarea>
                </div>
                @php
                $teacher = Auth::user()->id;
                @endphp
                <input type="hidden" name="teacher"value="{{@$teacher}}">
                
                <div class="m-4 col-12 d-flex">
                    <div class="col-5 ms-2">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-info">Class</span>
                            <select name="classData" id="" class="form-control">
                                <option value="">Classes</option>
                                @foreach($class as $value)
                                <option value="{{$value->id}}">{{$value->c_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-5 ms-2">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-info">Subject</span>
                            <select name="subjectData" id="" class="form-control">
                                <option value="">subjects</option>
                                @foreach($subject as $data)
                                <option value="{{$data->id}}">{{$data->s_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="m-4 col-12 d-flex">
                    <div class="col-5 ms-2">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-info">date</span>
                            <input class="form-control" type="date" name="date" id="">
                        </div>
                    </div>
                    <div class="col-5 ms-2">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-info">start-time</span>
                            <input class="form-control" type="datetime-local" name="stime" id="">
                        </div>
                    </div>
                </div>
                <div class="m-4 col-12 d-flex">
                    <div class="col-5 ms-2">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text bg-info">end-time</span>
                            <input class="form-control" type="datetime-local" name="etime" id="">
                        </div>
                    </div>
                </div>
                <div class="col-3 m-4">
                <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer />
