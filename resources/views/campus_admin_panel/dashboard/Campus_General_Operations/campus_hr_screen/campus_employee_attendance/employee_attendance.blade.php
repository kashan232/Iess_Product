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
                    @if (session('attendance_save'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(count($employees_attendance_data) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Attendance Already Submitted You Can Edit Record.!</strong>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Generate Attendance</h3>
                            <h6>
                               Your Attendance Date is:&nbsp;"{{ $employee_attendance_date }}"</h6>
                            <br>
                        </div>
                    </div>
                    <form action="{{ route('store-employee-attendance') }}" method="POST">
                        @csrf
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Department</th>
                                        <th>Job Designation</th>
                                        <td>Employee Name</td>
                                        <td>Attendance</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_employess as $employess)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <input type="hidden" name="emp_id[]"
                                            value="{{ $employess->id }}">
                                            <td>{{ $employess->department }}</td>
                                            <td>{{ $employess->title_designation }}</td>
                                            <td>
                                                <input type="hidden" name="employee_attendance_date"
                                                    value="{{ $employee_attendance_date }}">
                                                <input type="hidden" name="department"
                                                value="{{ $employess->department }}">
                                                <input type="hidden" name="job_designation"
                                                value="{{ $employess->title_designation }}">
                                                <input type="hidden" name="emp_name[]"
                                                    value="{{ $employess->first_name }}{{ $employess->last_name }}">
                                                    <h6>{{ $employess->first_name }}&nbsp{{ $employess->last_name }}</h6>
                                            </td>
                                            {{-- radio button work --}}

                                            <td>
                                                <!-- Rest of the code -->

                                                @php
                                                    $attendanceValue = $employees_attendance_data[$employess->id] ?? 'Present';
                                                @endphp
                                                <input type="radio" id="Present_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Present"
                                                    {{ $attendanceValue === 'Present' ? 'checked' : '' }}>
                                                <label for="Present_{{ $employess->id }}">Present</label><br>
                                                <input type="radio" id="Absent_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Absent"
                                                    {{ $attendanceValue === 'Absent' ? 'checked' : '' }}>
                                                <label for="Absent_{{ $employess->id }}">Absent</label><br>
                                                <input type="radio" id="Leave_{{ $employess->id }}"
                                                    name="attendance[{{ $employess->id }}]" value="Leave"
                                                    {{ $attendanceValue === 'Leave' ? 'checked' : '' }}>
                                                <label for="Leave_{{ $employess->id }}">Leave</label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4 mb-5 d-flex justify-content-center align-content-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>
@include('campus_admin_panel.dashboard.include.footer')


