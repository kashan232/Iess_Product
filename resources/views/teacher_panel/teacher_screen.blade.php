@include('teacher_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>   
            <div class="container">
                {{-- <div class="row d-flex">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card pt-3">
                                <div class="inner-content text-center">
                                    <div class="c100 p66 center">
                                        <span>33%</span>
                                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                                    </div>
                                    <p>default</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card pt-3">
                                <div class="inner-content text-center">
                                    <div class="c100 p66 center">
                                        <span>100%</span>
                                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                                    </div>
                                    <p>default</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card pt-3">
                                <div class="inner-content text-center">
                                    <div class="c100 p66 center">
                                        <span>5%</span>
                                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                                    </div>
                                    <p>default</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card pt-3">
                                <div class="inner-content text-center">
                                    <div class="c100 p66 center">
                                        <span>66%</span>
                                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                                    </div>
                                    <p>default</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-attendance-details') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/attendance.png" alt="">
                                </div>
                                <h5>Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('teacher-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/result3-01.png" alt="">
                                </div>
                                <h5>Result</h5>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('give-marks') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/give-marks-01.png" alt="">
                                </div>
                                <h5>Give Marks</h5>
                            </div>
                        </a> 
                    </div> --}}
                    
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('recorded-lectures') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/recorded.png" alt="">
                                </div>
                                <h5>Recorded Lectures</h5>
                            </div> 
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-diary') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/diary.png" alt="">
                                </div>
                                <h5>Diary/Assignments</h5>
                            </div>
                        </a>
                    </div> 
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-course-material') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/course-material.png" alt="">
                                </div>
                                <h5>Course Material</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('timetable') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/time-table.png" alt="">
                                </div>
                                <h5>Time Table</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('events') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/event.png" alt="">
                                </div>
                                <h5>Events</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('chat-screen') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/chats-01.png" alt="">
                                </div>
                                <h5>Chat</h5>
                            </div>
                        </a>  
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('Notice-board') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/notice-board-01.png" alt="">
                                </div>
                                <h5>Notice Board</h5>
                            </div>
                        </a> 
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="https://xcltechnologies.com/" target="_blank">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/about-us.png" alt="">
                                </div>
                                <h5>About Us</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('teacher_panel.include.footer')
