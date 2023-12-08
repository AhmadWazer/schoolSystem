<x-sidebar />
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Teachers Table</h4>
        <!-- button -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="/teacher/addedit">Add Teacher</a>
        </div><br>
        <!-- button -->
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Table Teachers</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total_Subject</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach($data as $value)
                    @php
                    $tags = explode(',',$value->assign_subject);
                    $num_tags = count($tags);
                    @endphp
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $value->name }}</strong>
                                </td>
                                <td>{{ $value->email }}</td>
                                <td> {{ $num_tags }}</td>
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
                                                    href="{{ route('teacher.show',$value->id) }}"><i
                                                        class="bx bxs-bullseye"></i>
                                                    Show</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('/teacher/update',$value->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('teacher.delete',$value->id) }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->


        <!--  -->
    </div>
</div>
<x-footer />
