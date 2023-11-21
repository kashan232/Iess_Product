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
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="container payroll-heading">
                        <div class="row">
                            @foreach ($classes as $class)
                                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                    <a href="{{ route('fetch-attendance-institute',['class' => $class->class_name ]) }}">
                                        <div class="box-main-card">
                                            <div class="card-content">
                                                <img src="/assets/attendance-01.png" alt="">
                                            </div>
                                            <h5>{{ $class->class_name }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                </div>

            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')
