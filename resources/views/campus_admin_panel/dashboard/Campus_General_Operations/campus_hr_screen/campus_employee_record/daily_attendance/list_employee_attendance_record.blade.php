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
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Job Designation</th>
                                    <th>Employee Name</th>
                                    <th>Date</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($attendance_records) < 1)
                                    <div class="alert alert-danger">
                                        <strong>Sorry!</strong> No Attendance Found.
                                    </div>                                      
                                @else
                                    @foreach ($attendance_records as $attendance_record)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $attendance_record->department}}</td>
                                        <td>{{ $attendance_record->job_designation}}</td>
                                        <td>{{ $attendance_record->emp_name}}</td>
                                        <td>{{ $attendance_record->employee_attendance_date}}</td>
                                        <td>
                                            @if ($attendance_record->employee_attendance == 'Present')
                                                <button class="btn btn-success">{{ $attendance_record->employee_attendance }}</button>
                                            @elseif ($attendance_record->employee_attendance == 'Absent')
                                                <button class="btn btn-danger">{{ $attendance_record->employee_attendance }}</button>
                                            @elseif ($attendance_record->employee_attendance == 'Leave')
                                                <button class="btn btn-warning">{{ $attendance_record->employee_attendance }}</button>
                                            @endif
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


