@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title w-100 text-center mt-5 mb-5">
                            <h3>Select Details To View Attendance</h3>
                        </div>
                    </div>
                    <form action="{{ route('fetch-student-attendance-record') }}" id="student_attendance_records" method="GET" enctype="multipart/form-data">
                    @csrf
                        <div class="row pt-4 pb-4">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                    <option value="">Section</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                               <input type="date" name="attendance_date" id="attendance_date" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('teacher_panel.include.footer')
{{-- <script>
    $('#student_attendance').on('submit', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
                if (response.error) {
                    var errorMessage = response.error;
                    $("#diary_uploaded_error").html(errorMessage).show();
                } else if (response.message) {
                    var successMessage = response.message;
                    $("#diary_uploaded").html(successMessage).show();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });    
</script> --}}
