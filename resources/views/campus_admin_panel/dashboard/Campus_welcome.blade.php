@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container">
                <div class="container payroll-heading">
                    <!-- <h3 class="text-center">General Operations</h3> -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('CampusGeneral-Operations') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/new addmission-01.png" alt="">
                                    </div>
                                    <h5>General Operations</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('CampusAccountsOperations') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/attendance-01.png" alt="">
                                    </div>
                                    <h5>Accounts</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('dummay-exam-model') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/result-01.png" alt="">
                                    </div>
                                    <h5>Exams</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('CampusHrOperations') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/promote student.png" alt="">
                                    </div>
                                    <h5>HR</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('CampusfinancialOperations') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/attendance-01.png" alt="">
                                    </div>
                                    <h5>Financial Management </h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="#">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/former 01.png" alt="">
                                    </div>
                                    <h5>Digital Library</h5>
                                </div>
                            </a>
                        </div>



                    </div>




                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')
