@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Attendance Record</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Admission No</th>
                                    <th>Roll Number</th>
                                    <th>Name</th>
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
                                        <td>{{ $attendance_record->admission_no}}</td>
                                        <td>{{ $attendance_record->student_roll_number}}</td>
                                        <td>{{ $attendance_record->student_name}}</td>
                                        <td>{{ $attendance_record->student_attendance_date}}</td>
                                        <td>
                                            @if ($attendance_record->student_attendance == 'Present')
                                                <button class="btn btn-success">{{ $attendance_record->student_attendance }}</button>
                                            @elseif ($attendance_record->student_attendance == 'Absent')
                                                <button class="btn btn-danger">{{ $attendance_record->student_attendance }}</button>
                                            @elseif ($attendance_record->student_attendance == 'Leave')
                                                <button class="btn btn-warning">{{ $attendance_record->student_attendance }}</button>
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
@include('teacher_panel.include.footer')

