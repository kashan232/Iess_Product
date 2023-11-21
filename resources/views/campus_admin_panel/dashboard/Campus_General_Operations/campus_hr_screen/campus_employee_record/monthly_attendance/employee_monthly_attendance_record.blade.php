<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="table_css.datatables.checkboxes.css" />

@include('campus_admin_panel.dashboard.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Daily Attendance Record</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="userTable" class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Job Designation</th>
                                    <th>Employee Name</th>
                                    <th>Date</th>
                                    <th>Attendance</th>
                                    <th>Monthly Record</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($attendance_records) < 1)
                                    <div class="alert alert-danger">
                                        <strong>Sorry!</strong> No Attendance Found.
                                    </div>
                                @else
                                    @foreach ($attendance_records as $attendance_record)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $attendance_record->department }}</td>
                                            <td>{{ $attendance_record->job_designation }}</td>
                                            <td>
                                                {{-- <a href="#" data-emp-id="{{ $attendance_record->emp_id }}" class="single_employee">
                                                {{ $attendance_record->emp_name}}
                                            </a> --}}
                                                <a href="#" data-emp-id="{{ $attendance_record->emp_id }}"
                                                    data-department="{{ $attendance_record->department }}"
                                                    data-attendance-date="{{ $attendance_record->employee_attendance_date }}"
                                                    class="single_employee">
                                                    {{ $attendance_record->emp_name }}
                                                </a>
                                            </td>
                                            <td>{{ $attendance_record->employee_attendance_date }}</td>
                                            <td>
                                                @if ($attendance_record->employee_attendance == 'Present')
                                                    <button
                                                        class="btn btn-success">{{ $attendance_record->employee_attendance }}</button>
                                                @elseif ($attendance_record->employee_attendance == 'Absent')
                                                    <button
                                                        class="btn btn-danger">{{ $attendance_record->employee_attendance }}</button>
                                                @elseif ($attendance_record->employee_attendance == 'Leave')
                                                    <button
                                                        class="btn btn-warning">{{ $attendance_record->employee_attendance }}</button>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <h1>{{ $leave_count }}</h1> --}}
                                                <a href="{{ route('individual-employee-attendance', ['id' => $attendance_record->emp_id, 'dep' => $attendance_record->department, 'at_date' => $attendance_date, 'total_month_days' => $days_count]) }}"
                                                    class="btn btn-success btn-lg">
                                                    Monthly Record
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('campus_admin_panel.dashboard.include.footer')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
</script>

{{-- <script>
    $(document).ready(function() {
        $('.single_employee').on('click', function(e) {
            e.preventDefault();
            var employeeId = $(this).data('emp-id');
            var department = $(this).data('department');
            var attendanceDate = $(this).data('attendance-date');

            var data = {
                emp_id: employeeId,
                department: department,
                attendance_date: attendanceDate,
                _token: '{{ csrf_token() }}'
            };
            $.ajax({
                url: 'individual-employee-attendance',
                method: 'GET',
                data: data,
                success: function(response) {
                    $('html').html(response.html);
                    var var1 = response.additionalData.var1;
                    var var2 = response.additionalData.var2;
                    console.log('var1: ' + var1);
                    console.log('var2: ' + var2);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script> --}}



{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all the anchor links with the class 'single_employee'
        const employeeLinks = document.querySelectorAll('.single_employee');

        // Attach a click event listener to each link
        employeeLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent the default link behavior

                // Get the hidden input field containing the employee ID
                const employeeId = link.querySelector('input[name="emp_id"]').value;

                // Redirect to the individual employee attendance page with the employee ID
                window.location.href = `/individual-employee-attendance/${employeeId}`;
            });
        });
    });
</script> --}}
