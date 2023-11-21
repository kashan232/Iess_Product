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
                        <ul>
                            <!-- <li>
                                <a href="{{ route('CampusGeneral-Operations') }}">Home</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="row  d-flex justify-content-end">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <a href="{{ route('add-batch') }}">
                                <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 14px">
                                    Add Batch
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
                                <div class="item-title">
                                    <h3>{{$pagename}}</h3>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
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
                                            <th>Batch</th>
                                            <!-- <th>More</th> -->
                                        </tr>
                                    </thead>
                                    @php
                                    $serialNumber = 1;
                                    @endphp
                                    <tbody>

                                        <tr>

                                            @foreach($get_all_batches as $get_all_batches)

                                            <td>{{$serialNumber}}</td>
                                            <td>{{$get_all_batches->batch}}</td>
                                         
                                            

                                            <!-- <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <span class="flaticon-more-button-of-three-dots"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="">

                                                       

                                                        <a class="dropdown-item" href="{{ route('delete-batch', ['id' => $get_all_batches->id]) }}"><i class="fas fa-times text-danger"></i>Delete</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> -->
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