@include('institute_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area Start Here -->
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <!-- Button trigger modal -->

            <div class="breadcrumbs-area">
                {{-- <h3 class="text-center">"{{ @session('campus_name') }}"</h3> --}}
                <ul>
                    <li>
                        <a href="{{ route('campus-single-operation') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('CampusAccountsOperations') }}">Account Screen</a>
                    </li>
                    <li>
                        <a href="{{ route('all-deduction') }}">Deductions</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session('inventory-added'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('inventory-added') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Deduction</h3>
                        </div>
                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" method="POST" action="{{ route('store-list-salary') }}">
                        @csrf
                        <h3 class="text-center mt-3">Personal Details</h3>
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-12 form-group">
                                <div class="row">
                                    <div class="col-6">
                                        Name :
                                    </div>
                                    <div class="col-6">
                                        Kashan
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-12 form-group">
                                <div class="row">
                                    <div class="col-6">
                                        BAsic Salary :
                                    </div>
                                    <div class="col-6">
                                        15000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 class="text-center">Add More Deduction</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Deduction Date</label>
                                <input type="date" name="date" id="date" required placeholder=""
                                    class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Amount</label>
                                <input type="number" name="date" id="date" required placeholder="Enter Amount"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                <label>Deduction Description</label>
                                <input type="text" name="date" id="date" required placeholder=""
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-12 form-group mg-t-8 text-center mt-3">
                            <a href="">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
                                </button>
                            </a>
                        </div>
                    </form>

                </div>
            </div>
            <div class="justify-content-center m-auto">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('institute_admin_panel.dashboard.include.footer')
