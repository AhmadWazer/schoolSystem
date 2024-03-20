<x-sidebar />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


<div class="content-wrapper">
    <div class="container mt-2 d-flex ">
        <div class="card col-2 m-2">
            <div class="card-header">Select Month</div>
            <div class="card-body">
                <!-- <label for="selectMonth">Select Month:</label> -->
                <select id="selectMonth" class="btn btn-success m-2">
                    <option value="">Select Month:</option>
                    @for($month = 1; $month <= 12; $month++)
                        @php
                          $monthValue = sprintf("%02d", $month);
                        @endphp
                    <option value="{{ $monthValue }}">
                           {{ date('F', mktime(0, 0, 0, $month, 1)) }}
                    </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="card col-2 m-2">
            <div class="card-header">Select Year</div>
            <div class="card-body">
                <!-- <label for="selectMonth">Select Month:</label> -->
                <select id="selectMonth" class="btn btn-success m-2">
                    <option value="">Select Year:</option>
                    @for($year = 2020; $year <= 2040; $year++)
                        @php
                          $yearValue = sprintf("%02d", $year);
                        @endphp
                    <option value="{{ $yearValue }}">
                           {{ date('Y', mktime(0, 0,1, $year, 0)) }}
                    </option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="bg-danger col-2 text-center m-2 text-white">Absent</div>
                <div class="bg-success col-2 text-center m-2 text-white">Prasent</div>
                <div class="bg-secondary col-2 text-center m-2 text-white">Default</div>
            </div>
            <div class="card-body">
                <div id='dataList'></div>
                <table id="monthDates">
                    <thead>
                        <tr id="day">
                        <!-- all months name & days display here -->
                            <th id="selectedMonth"></th>
                            @for($day = 1; $day <= 31; $day++)
                                <th class="border p-2">{{ $day }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <!-- all attendance display here -->
                    <tbody id="studentAttendance">
                        @foreach($value as $showvalue => $data)
                            <tr id="row-{{ $showvalue }}">
                                <td>{{ $data[0]->name }}</td>

                                @for($day = 1; $day <= 31; $day++)
                                    @php
                                        $attendance = $data->where('attend_date', '2023-12-' . sprintf('%02d',
                                        $day))->first();
                                    @endphp
                                    <td class="border p-2" style="background-color: 
                                          @if($attendance && $attendance->attend === 'prasent')
                                               seaGreen
                                          @elseif($attendance && $attendance->attend === 'absent')
                                               crimson
                                          @else
                                                    gray
                                          @endif;">
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#selectMonth').change(function() {
            var selectedMonth = $(this).val();
            var selectedMonthValue = $(this).val();
            var selectedMonthName = moment(selectedMonthValue, 'MM').format('MMMM');

            // Update the days in the table header
            var daysInMonth = moment(selectedMonthValue, 'MM').daysInMonth();
            updateDaysInTableHeader(daysInMonth);

        function updateDaysInTableHeader(daysInMonth) {
            // Clear existing days in the header
            $('#day').empty();

            // Add updated days to the header
            $('#day').append('<th>'+selectedMonthName+'</th>');
            for (var day = 1; day <= daysInMonth; day++) {
                $('#day').append('<th class="border p-2">' + day + '</th>');
            }
        }
        
        $('#studentAttendance tr').hide();
        // $('#studentAttendance tr').show();
        $('#row-' + selectedMonth).show();
        
    });
});
</script>
<x-footer />
