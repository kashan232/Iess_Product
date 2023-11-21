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
                            <div class="container-fluid">
                                <h3>Single Employee Attendance Record</h3>
                                <div class="row mt-4 ">
                                    <button class="btn btn-primary ml-3" style="font-size: 15px">
                                        Total Days in month : {{ $total_month_days }}
                                    </button>
                                    <button class="btn btn-success ml-3" style="font-size: 15px">
                                        Total Present : {{ $present_count }}
                                    </button>
                                    <button class="btn btn-danger ml-3" style="font-size: 15px">
                                        Total Absent : {{ $absent_count }}
                                    </button>
                                    <button class="btn btn-warning ml-3" style="font-size: 15px">
                                        Total Leave : {{ $leave_count }}
                                    </button>
                                    <button class="btn btn-dark ml-3" id="downloadpdf" style="font-size: 15px">
                                        Generate PDF
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display text-nowrap" id="table_bill">
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
                                @foreach ($employee_data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->department }}</td>
                                        <td>{{ $data->job_designation }}</td>
                                        <td>
                                            {{ $data->emp_name }}
                                        </td>
                                        <td id="date">{{ $data->employee_attendance_date }}</td>
                                        <td id="attendance_type">
                                            @if ($data->employee_attendance == 'Present')
                                                <button
                                                    class="btn btn-success">{{ $data->employee_attendance }}</button>
                                            @elseif ($data->employee_attendance == 'Absent')
                                                <button
                                                    class="btn btn-danger">{{ $data->employee_attendance }}</button>
                                            @elseif ($data->employee_attendance == 'Leave')
                                                <button
                                                    class="btn btn-warning">{{ $data->employee_attendance }}</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
    window.onload = function() {
        document.getElementById("downloadpdf")
            .addEventListener("click", () => {
                const table_bill = this.document.getElementById("table_bill");
                console.log(table_bill);
                console.log(window);
                html2pdf().from(table_bill).save();
            });
    }
</script>
