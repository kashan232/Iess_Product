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
                    <div class="row  d-flex justify-content-end">

                        <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <a href="{{ route('add-department') }}">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Add New
                                </button>
                            </a>
                        </div>

                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">

                            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> --}}
                            <div class="heading-layout1">
                                <div class="item-title mt-5 mb-5">
                                    <h3>All Departments</h3>
                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead class="">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>Title</th>
                                            <th style="width: 100px;text-align:center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_departments as $all_department)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>{{ $all_department->dept_name }}</td>
                                                <td>
                                                    <a
                                                        href="#">
                                                        <button type="submit"
                                                            class="fw-btn-fill btn-gradient-yellow btn-sm">
                                                            Edit
                                                        </button>
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">

                        {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
                    </div>
                </div>

            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')
