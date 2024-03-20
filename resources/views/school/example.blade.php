<x-sidebar />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header"> </div>
            <div class="card-body">
                <div id='dataList'></div>
                <table>
                    <thead id="monthDates">
                        <tr>
                            <!-- all month date display here -->
                        </tr>
                    </thead>
                    <tbody id="studentAttendance">
                        <tr>
                            <!-- all attendance display here -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Add more students as needed
      function showMonthDates() {
        var currentDate = new Date();
        var daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
        var monthName = new Intl.DateTimeFormat('en-US', {
          month: 'long'
        }).format(currentDate);

        $("#monthDates").append('<th colspan="">' + monthName + '</th>');

        // Append date cells to the row
        for (var day = 1; day <= daysInMonth; day++) {
          $("#monthDates").append("<th class='p-2 border bg-secondary text-white'>" + day + '</th>');
        }
      }

      // Function to show student attendance
      function showStudentAttendance(attendanceData) {
        // Clear existing rows
        $("#studentAttendance").empty();

        // Append rows for each student
        for (var i = 0; i < attendanceData.length; i++) {
          var newRow = $('<tr></tr>');
          newRow.append('<td>' + attendanceData[i].name + '</td>');
          // Append cells with appropriate background color for attendance
          for (var j = 0; j < attendanceData[i].attend.length; j++) {
            var cellClass = '';
            if (attendanceData[i] === "prasent") {
              cellClass = 'bg-success';
            } else if (attendanceData[i].attend[j] === "absent") {
              cellClass = 'bg-danger';
            } else {
              cellClass = 'bg-secondary';
            }
            newRow.append('<td class="border p-2 ' + cellClass + '">' + attendanceData[i].attend[j] + '</td>');
          }
          // Append the new row to the tbody
          $("#studentAttendance").append(newRow);
        }
      }

      // Fetch student attendance data from the server using AJAX
      $.ajax({
        url: '/teacher/attenddatashow', // Replace with your actual API endpoint
        method: 'GET',
        success: function (data) {
          // Assuming data is an array of objects with name and attendance properties
          showStudentAttendance(data);
        },
        error: function (error) {
          console.error('Error fetching data:', error);
        }
      });

      // Call the function to display month dates
      showMonthDates();
    });
  </script>

<x-footer />