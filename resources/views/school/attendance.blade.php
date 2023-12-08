<x-sidebar />
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container mt-3 ms-2">
        @php
            $className = DB::table('classes')->get();
            $subjectName = DB::table('subjects')->get();
        @endphp
        <h3> Attendance</h3>
        <div class=" col-12 d-flex ms-5 mt-3">
            <!-- search by class -->
            <div class="col-2 ms-3">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-info" id="addon-wrapping">CName</span>
                    <select class="form-control" name="" id="selectClass">
                        <option value="">ClassName</option>
                        @foreach($className as $name)
                            <option id="abc" value="{{ $name->id }}">{{ $name->c_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- search by subject -->
            <div class="col-2 ms-5">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-info" id="addon-wrapping">SName</span>
                    <select class="form-control" name="" id="selectSubject">
                        <option value="">SubjectName</option>
                        @foreach($subjectName as $name)
                            <option id="" value="{{ $name->s_code }}">{{ $name->s_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- search by date -->
            <div class="col-2 ms-5">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-info" id="addon-wrapping">Date</span>
                    <input type="date" id="selectDate" class="form-control" placeholder="Class"
                        aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
            <div class="col-2 ms-5">
                <div class="input-group flex-nowrap">
                    <button name="searchBtn" id="searchAttendanceBtn" class="form-control bg-info">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Attendance</h5>
            <div class="table-responsive text-nowrap">
                <table class="table" id="tableAttnd">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Student</th>
                            <th>Class</th>
                            <th>Subject-Code</th>
                            <th>Teacher</th>
                            <th>Attendance</th>
                        </tr>
                    </thead>
                    <tbody  class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>10\11\2023</strong>
                            </td>
                            <td>Student1</td>
                            <td>Class1</td>
                            <td>001</td>
                            <td>Wazir Ahmad</td>
                            <td>P or A </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- search by class -->
<!-- <script>
    $(document).ready(function () {
        // Your existing code

        // Add a click event for the search button
        $("#selectClass").on('change', function (e) {
            e.preventDefault();
            let selectedClass = $(this).val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/cattendance', // Update the URL to your search endpoint
                method: 'post',
                data: {
                    selectedClass: selectedClass
                },
                success: function (data) {
                    // Get the table body
                    var tableBody = $('#tableAttnd').find('tbody');
                    tableBody.empty();  // Clear existing rows

                    $.each(data, function (index, attendance) {
                        var newRow = `
                            <tr>
                                <td>${attendance.attend_date}</td>
                                <td>${attendance.student_name}</td>
                                <td>${attendance.subject_id}</td>
                                <td>${attendance.teacher_name}</td>
                                <td>${attendance.attend}</td>
                            </tr>
                        `;
                        tableBody.append(newRow);
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Error: " + status + "\nMessage: " + error);
                }
            });
        });
    });
</script> -->
<!-- search by subject -->
<script>
    $(document).ready(function () {
        // Your existing code

        // Add a click event for the search button
        $("#selectSubject").on('change', function (e) {
            e.preventDefault();
            let selectedSubject = $(this).val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/subAttendance', // Update the URL to your search endpoint
                method: 'post',
                data: {
                    selectedSubject: selectedSubject
                },
                success: function (data) {
                    // Get the table body
                    var tableBody = $('#tableAttnd').find('tbody');
                    tableBody.empty();  // Clear existing rows

                    $.each(data, function (index, attendance) {
                        var newRow = `
                            <tr>
                                <td>${attendance.attend_date}</td>
                                <td>${attendance.student_name}</td>
                                <td>${attendance.class_name}</td>
                                <td>${attendance.subject_id}</td>
                                <td>${attendance.teacher_name}</td>
                                <td style="color: ${attendance.attend === 'prasent' ? 'green' : 'red'}">${attendance.attend}</td>
                            </tr>
                        `;
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
<!-- search by date -->
<script>
    $(document).ready(function () {
        // Your existing code

        // Add a click event for the search button
        $("#searchAttendanceBtn").on('click', function (e) {
            e.preventDefault();
            let selectedDate = $("#selectDate").val();
            let selectClass = $("#selectClass").val();
            // let selectedSubject = $("#selectedSubject").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/searchAttendance', // Update the URL to your search endpoint
                method: 'post',
                data: {
                    selectedDate: selectedDate,
                    selectClass: selectClass
                    // selectedSubject: selectedSubject
                },

                success: function (data) {
                    // Get the table body
                    var tableBody = $('#tableAttnd').find('tbody');
                    tableBody.empty();  // Clear existing rows

                    $.each(data, function (index, attendance) {
                        var newRow = `
                            <tr>
                                <td>${attendance.attend_date}</td>
                                <td>${attendance.student_name}</td>
                                <td>${attendance.class_name}</td>
                                <td>${attendance.subject_id}</td>
                                <td>${attendance.teacher_name}</td>
                                <td style="color: ${attendance.attend === 'prasent' ? 'green' : 'red'}">${attendance.attend}</td>
                            </tr>
                        `;
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
