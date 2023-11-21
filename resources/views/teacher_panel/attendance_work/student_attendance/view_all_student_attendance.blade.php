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
                    @if (session('attendance_save'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('attendance_save') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(count($attendanceData) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Attendance Already Submitted You Can Edit Record.!</strong>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>Generate Attendance</h3>
                            <br>
                            <h6>CLass "{{ $class_name }}" And Section "{{ $section_name }}" And
                                Date:&nbsp;"{{ $attendance_date }}"</h6>
                        </div>
                    </div>
                    <form action="{{ route('store-student-attendance') }}" method="POST">
                        @csrf
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <td>Admission No</td>
                                        <td>Roll Number</td>
                                        <td>Name</td>
                                        <td>Attendance</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_students as $all_student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $all_student->id }}
                                                <input type="hidden" name="student_id[]"
                                                    value="{{ $all_student->id }}">
                                            </td>
                                            <td>{{ $all_student->gr }}</td>
                                            <td>
                                                <input type="hidden" name="student_roll_number[]"
                                                    value="{{ $all_student->gr }}">
                                                <input type="hidden" name="class_name" value="{{ $class_name }}">
                                                <input type="hidden" name="section_name" value="{{ $section_name }}">
                                                <input type="hidden" name="attendance_date"
                                                    value="{{ $attendance_date }}">
                                                <input type="hidden" name="student_name[]"
                                                    value="{{ $all_student->first_name }}{{ $all_student->last_name }}">
                                                <h6>{{ $all_student->first_name }}{{ $all_student->last_name }}</h6>
                                            </td>
                                            <td>
                                                <!-- Rest of the code -->

                                                @php
                                                    $attendanceValue = $attendanceData[$all_student->id] ?? 'Present';
                                                @endphp
                                                <input type="radio" id="Present_{{ $all_student->id }}"
                                                    name="attendance[{{ $all_student->id }}]" value="Present"
                                                    {{ $attendanceValue === 'Present' ? 'checked' : '' }}>
                                                <label for="Present_{{ $all_student->id }}">Present</label><br>
                                                <input type="radio" id="Absent_{{ $all_student->id }}"
                                                    name="attendance[{{ $all_student->id }}]" value="Absent"
                                                    {{ $attendanceValue === 'Absent' ? 'checked' : '' }}>
                                                <label for="Absent_{{ $all_student->id }}">Absent</label><br>
                                                <input type="radio" id="Leave_{{ $all_student->id }}"
                                                    name="attendance[{{ $all_student->id }}]" value="Leave"
                                                    {{ $attendanceValue === 'Leave' ? 'checked' : '' }}>
                                                <label for="Leave_{{ $all_student->id }}">Leave</label>
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
@include('teacher_panel.include.footer')

