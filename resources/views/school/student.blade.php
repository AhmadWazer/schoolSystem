<x-sidebar />

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Students Table</h4>
        <!-- search by class -->
        <div class="container d-flex justify-content-between">
            <div class="">
                <select id="classDropdownBtn" class="btn btn-success dropdown-toggle" onChange()>
                    <option value="" id="attnClass">All</option>
                    @foreach($std as $student)
                        <option value="{{ $student->id }}">{{ $student->c_name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- button -->
            <div class=" ">
                <a class="btn btn-primary " href="/student/addedit">Add Student</a>
            </div>
        </div><br>
        <!-- button -->
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Table Student</h5>
            <div class="table-responsive text-nowrap">
                <table class="table" id="data">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Classes</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="stdtable"  >
                    @foreach($data as $value)
                        @php
                            $stdclass = explode(',',$value->student_class);
                        @endphp
                            @php
                                $sum=DB::table('classes')->where('id',$stdclass)->value('c_name');
                            @endphp
                            <tr class="studentRow">
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $value->name }}</strong>
                                </td>
                                <td>{{ $value->email }}</td>

                                <td>{{ $sum }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <div class="d-flex">
                                                <a class="dropdown-item"
                                                    href="{{ route('student.show', $value->id) }}"><i
                                                        class="bx bxs-bullseye"></i>
                                                    Show</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('student.edit',$value->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('student.delete',$value->id) }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->


        <!--  -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $("#classDropdownBtn").on('change', function (e) {
            e.preventDefault();
            let class_id = $(this).val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/classdetails',
                method: 'post',
                data: {
                    class_id: class_id
                },
                success: function (data) {
                    // Get the table body
                    var tableBody = $('#stdtable').html('');

                    // tableBody=''; 

                    $.each(data, function (index, user) {
                        console.log(user);
                        var newRow = `@php
                                $sum=DB::table('classes')->where('id',$stdclass)->value('c_name');
                            @endphp
                            
                            <tr class="studentRow">
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>${user.name}</strong>
                                </td>
                                <td> ${user.email}</td>

                                <td> ${ user.student_class}</td>
                                <td> ${ user.phone }</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <div class="d-flex">
                                                <a class="dropdown-item"
                                                    href="{{ route('student.show', '') }}/${user.id}"><i
                                                        class="bx bxs-bullseye"></i>
                                                    Show</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('student.edit','') }}/${user.id}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('student.delete','') }}/${user.id}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>`;
                            tableBody.append(newRow);
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Error: " + status + "\nMessage: " + error);
                }
            });
        });
    });
    
</script>
<x-footer />
