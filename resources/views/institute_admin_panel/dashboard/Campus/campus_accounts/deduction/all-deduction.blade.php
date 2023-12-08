@include('campus_admin_panel.dashboard.include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.navbar')
    <!--**********************************
            Nav header end
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.topbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Deduction</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Deduction</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Deduction</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Deduction</h4>
                                    <a href="{{ route('add-deduction') }}" class="btn btn-primary">+Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Title</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Hire Date</th>
                                                    <th>Department</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="rounded-circle" width="35"
                                                            src="images/profile/small/pic1.jpg" alt=""></td>
                                                            <td>SR.Teacher</td>
                                                            <td>KAshan Shaikh</td>
                                                            <td>0313333333</td>
                                                            <td>17-01-2023</td>
                                                            <td>Teacher</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                                class="la la-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                                class="la la-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="rounded-circle" width="35"
                                                            src="images/profile/small/pic1.jpg" alt=""></td>
                                                            <td>SR.Teacher</td>
                                                            <td>KAshan Shaikh</td>
                                                            <td>0313333333</td>
                                                            <td>17-01-2023</td>
                                                            <td>Teacher</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                                class="la la-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                                class="la la-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    @include('campus_admin_panel.dashboard.include.poweredby')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
@include('campus_admin_panel.dashboard.include.footer')


</body>

</html>
