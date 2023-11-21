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
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="row  d-flex justify-content-end">
                        <div class="col-2-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <a href="{{ route('add-subject') }}">
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
                            <div class="heading-layout1">
                                <div class="item-title w-100 p-2 text-center mt-3 mb-3">
                                    <h3>All Subjects</h3>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($classes as $class)
                                    <div class="col-md-4">
                                        <div class="m-0 p-0">
                                            <h4>Course: <span>{{ $class->class_name }}</span> </h4>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Subjects</th>
                                                </tr>
                                            </thead>
                                            @foreach ($class->campusSubjects as $subject)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('edit-subject', ['id' => $subject->id]) }}">
                                                            {{ $subject->subject }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')
