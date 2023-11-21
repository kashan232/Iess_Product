@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('add-leave') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Leave
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    @if(@session('delete-message-leave'))
                            <div class="alert alert-success">
                                <strong>Congratulations! </strong> {{ @session('delete-message-leave') }}
                            </div>
                        @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>All Leave</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8 my-5">
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
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Apply Date</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Leave Reason</th>
                                    <th>Status</th>
                                    <th>Confirmation By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_leaves as $all_leave)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $all_leave->student_name}}</td>
                                    <td>{{ $all_leave->class_name}}</td>
                                    <td>{{ $all_leave->section_name}}</td>
                                    <td>{{ $all_leave->apply_date}}</td>
                                    <td>{{ $all_leave->from_date}}</td>
                                    <td>{{ $all_leave->to_date}}</td>
                                    <td>{{ $all_leave->leave_reason}}</td>
                                    <td>
                                        @if ($all_leave->leave_status == 'Approve')
                                            <button class="btn btn-success">{{ $all_leave->leave_status }}</button>
                                        @elseif ($all_leave->leave_status == 'Disapprove')
                                            <button class="btn btn-danger">{{ $all_leave->leave_status }}</button>
                                        @elseif ($all_leave->leave_status == 'Pending')
                                            <button class="btn btn-warning">{{ $all_leave->leave_status }}</button>
                                        @endif
                                    </td>
                                    {{-- <td>{{ $all_leave->leave_status}}</td> --}}
                                    <td>{{ $all_leave->confirmation_by}}</td>
                                    <td>
                                        <a href="{{ route('edit-leave' ,['id' => $all_leave->id ]) }}">
                                            <button class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="{{ route('delete-leave' ,['id' => $all_leave->id ]) }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
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
@include('teacher_panel.include.footer')

