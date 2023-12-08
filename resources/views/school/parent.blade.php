<x-sidebar />
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Parents Table</h4>

        <!-- button -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="/parent/addedit">Add Parent</a>
        </div><br>
        <!-- button -->
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Table Parent</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Children</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach($pdata as $value)
                    @php
                    $tags = explode(',',$value->id);
                    $students = DB::table('users')
                   ->whereIn('student_parent', $tags)
                    ->get();
                    $num_tags = count($students);
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
                                                <a class="dropdown-item" href="{{route('parent.show', $value->id)}}"><i
                                                        class="bx bxs-bullseye"></i></a>
                                                <a class="dropdown-item" href="{{route('parent.edit',$value->id)}}"><i
                                                        class="bx bx-edit-alt me-1"></i></a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i></a>
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
    </div>
</div>
<x-footer />
