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
                    <div class="row">
                        <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group mt-5 text-right">
                            <a href="{{ route('add-Student') }}">
                                <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 16px">
                                    Add Student
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div>
                                    <h3>All Students</h3>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="btn btn-warning text-white mt-2 mb-3"
                                            style="font-size: 18px">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student Image</th>
                                            <th>Student Name</th>
                                            <th>GR No:</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Batch</th>
                                            <th>House</th>
                                            <th>Enrollment</th>
                                            <th>Addmission Slip</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $serialNumber = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($student_lists as $student_list)
                                            <tr>
                                                <td> {{ $serialNumber }} </td>

                                                <td>
                                                    <img src="/campus/general_operations/student_image/{{ $student_list->student_img }}"
                                                        alt="student_img" class="rounded-circle" width="80px"
                                                        height="80px">
                                                </td>
                                                <td>{{ $student_list->first_name }}</td>
                                                <td>{{ $student_list->gr }}</td>
                                                <td>{{ $student_list->class_name }}</td>
                                                <td>{{ $student_list->section_name }}</td>
                                                <td>{{ $student_list->batch }}</td>
                                                <td>{{ $student_list->Address }}</td>
                                                <td>{{ $student_list->enrollment_date }}</td>
                                                <td>
                                                    <a href="{{ route('admission-slip', ['id' => $student_list->id]) }}">
                                                        <button class="btn btn-success" style="font-size: 15px">Slip Generate</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('change-class', ['id' => $student_list->id]) }}">
                                                                <i class="fad fa-class text-danger"></i>Change Class</a>

                                                            <a class="dropdown-item"
                                                                href="{{ route('edit-student', ['id' => $student_list->id]) }}"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>

                                                            <a class="dropdown-item"
                                                                href="{{ route('view-student', ['id' => $student_list->id]) }}"><i
                                                                    class="fas fa-eye text-orange-peel"></i>View</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('delete-student', ['id' => $student_list->id]) }}"><i
                                                                    class="fas fa-times text-danger"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                                $serialNumber++;
                                            @endphp
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
