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
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Syllabus</h3>
                        </div>
                    </div>

                    @if(session('success-message-syllabus'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-message-syllabus') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif 
                    <form class="new-added-form" action="{{ route('store-syllabus') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Course *</label>
                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Course</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Section *</label>
                                <select name="section_name" id="section_name_dropdown" class="form-control">
                                    <option value="">Section</option>
                                </select>
                            </div> -->

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
    <label>Select Subject *</label>
    <select name="subject_name" id="subject_name_dropdown" class="form-control">
        <option value="">Select a Subject</option>
    </select>
</div>


                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Author Name *</label>
                                <input type="text" name="author_name" id="last_name" required placeholder="Author Name" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Name *</label>
                                <input type="text" name="book_name" id="last_name" required placeholder="English book" class="form-control" />
                                <span class="text-danger error-message" id="error-book"></span>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>No: of Chapters *</label>
                                <input type="text" name="no_of_chapters" id="last_name" required placeholder="(i.e) 12, 20" class="form-control" />
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8">
                                <button t ype="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
                
       
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')


<!-- 
<script>
$('#select_class').on('change', function() {
    var class_name = $(this).val();

    $.ajax({
        url: '/class-subjects', // Update the URL to fetch subjects based on class
        method: 'get',
        data: {
            class_name: class_name,
            _token: '{{csrf_token()}}'
        },

        success: function(response) {
            $("#subject_name_dropdown").empty();
            $.each(response, function(index, subject) {
                if ($("#subject_name_dropdown option[value='" + subject.subject + "']").length === 0) {
                    $("#subject_name_dropdown").append('<option value="' + subject.subject + '">' + subject.subject + '</option>');
                }
            });
        }, 

        error: function(xhr, status) {
            console.log("Error: ", xhr, status);
        }
    });
});

</script>  -->



<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                console.log(response); // Log the response data to the console

                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']").length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject + '">' + subject + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });  
    });
</script>

