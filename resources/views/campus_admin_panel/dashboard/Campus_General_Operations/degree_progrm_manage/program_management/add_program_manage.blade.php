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
  select {
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
                  <h3 class="text-center">Program MAnagement Form</h3>
                  <form action="program_management.php" method="POST">
                    <label for="programName">Program Name:</label>
                    <input type="text" id="programName" name="programName" required>
                
                    <label for="programDuration">Duration (in years):</label>
                    <input type="number" id="programDuration" name="programDuration" required>
                
                    <label for="coursesInvolved">Courses Involved:</label>
                    <select id="coursesInvolved" name="coursesInvolved[]" multiple required>
                      <option value="course1">Course 1</option>
                      <option value="course2">Course 2</option>
                      <!-- Add more options as needed -->
                    </select>
                
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