@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        
                    </div>
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('attendance-added'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> {{ session('attendance-added') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title text-center w-100 mb-5 mt-5">
                                    <h3>Select Details For Attendance Record</h3>
                                </div>
                            </div>
                            <form action="{{ route('fetch-employee-attendance-record') }}" id="employee_attendance_records" method="GET" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <select name="dept_name" class="form-control classid" id="dept_name">
                                            <option>Select Department</option>
                                            @foreach($all_departments as $all_department)
                                            <option value="{{ $all_department->dept_name }}">{{ $all_department->dept_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <input type="date" name="employee_attendance_date" id="employee_attendance_date"
                                            class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-12 form-group mg-t-8 text-center">
                                    <button type="submit"
                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark btn-lg">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('campus_admin_panel.dashboard.include.footer')
