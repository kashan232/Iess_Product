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
  input[type="date"],
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
                    <h3 class="text-center">Semester Configuration Form</h3>
                    <form action="semester_configuration.php" method="POST">
                      <label for="semesterName">Semester Name:</label>
                      <input type="text" id="semesterName" name="semesterName" required>
                  
                      <label for="startDate">Start Date:</label>
                      <input type="date" id="startDate" name="startDate" required>
                  
                      <label for="endDate">End Date:</label>
                      <input type="date" id="endDate" name="endDate" required>
                  
                      <label for="subjects">Subjects:</label>
                      <select id="subjects" name="subjects[]" multiple required>
                        <option value="subject1">Subject 1</option>
                        <option value="subject2">Subject 2</option>
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
