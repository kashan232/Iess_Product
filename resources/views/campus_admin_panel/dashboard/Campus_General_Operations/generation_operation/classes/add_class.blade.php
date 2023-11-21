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
                    <div class="row d-flex justify-content-end">
                        <a href="{{ route('back-list') }}">
                            <button type="button" class="btn btn-warning text-white mr-4 mb-3"
                                style="font-size: 14px">Back
                            </button>
                        </a>
                    </div>
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success-message-class'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> {{ session('success-message-class') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="heading-layout1">
                                <div class="item-title Add-student m-auto justify-content-center">
                                    <h3>{{ $pagename }}</h3>
                                </div>
                            </div>
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

                            <form class="new-added-form" action="{{ route('store-course') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Batch*</label>
                                        <select name="batch" class="form-control" id="">
                                            <option value="">Select Batch</option>
                                            @foreach ($get_all_batches as $batches)
                                                <option value="{{ $batches->batch }}">
                                                    {{ $batches->batch }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Course *</label>
                                        <input type="text" name="class_name" id="class_name"
                                            placeholder="Course Name" required class="form-control"
                                            oninput="validateInput()" />
                                        <span class="text-danger error-message" id="error-class_name"></span>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <div class="mt-4 form-group text-center">
                                            <button type="submit"
                                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Parents Details -->
                        </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <script>
            function validateInput() {
                const inputElement = document.getElementById('class_name');
                const errorElement = document.getElementById('error-class_name');

                // Regular expression to match input starting with alphabetic characters followed by optional integers
                const regex = /^[A-Za-z]+[0-9]*$/;

                if (regex.test(inputElement.value)) {
                    // Input matches the pattern, clear the error message
                    errorElement.textContent = "";
                } else {
                    // Input does not match the pattern, show an error message
                    errorElement.textContent = "Please start with alphabetic characters followed by optional integers.";
                    // You may also choose to revert the input to a valid state if needed.
                }
            }
        </script>
