<style>
  /* Basic CSS for layout */
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
  }
  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
  }
  input[type="text"],
  input[type="number"],
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="container payroll-heading mt-5">
                    <h3 class="text-center">Degree Creation Form</h3>
                    {{-- <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <a href="{{ route('add-degree-creation') }}">
                                <div class="box-main-card">
                                    <div class="card-content">
                                        <img src="/assets/degree.png" alt="">
                                    </div>
                                    <h4 class="mt-3">Degree Creation</h4>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    <form action="degree_creation.php" method="POST">
                      <label for="degreeName">Degree Name:</label>
                      <input type="text" id="degreeName" name="degreeName" required>
                  
                      <label for="duration">Duration (in years):</label>
                      <input type="number" id="duration" name="duration" required>
                  
                      <label for="eligibilityCriteria">Eligibility Criteria:</label>
                      <textarea id="eligibilityCriteria" name="eligibilityCriteria" rows="4" required></textarea>
                  
                      <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')
