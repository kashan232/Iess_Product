<style>
  /* Basic CSS for layout */
  body{
    font-family: Arial, sans-serif;
    margin: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="number"],
  input[type="date"] {
    width: 300px;
    padding: 5px;
    margin-bottom: 10px;
  }
  input[type="submit"] {
    padding: 8px 20px;
    background-color: #007bff;
    color: white;
    border: none;
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
                    <h3 class="text-center">Batch Creation Form</h3>
                    <form action="batch_creation.php" method="POST">
                      <label for="batchName">Batch Name:</label>
                      <input type="text" id="batchName" name="batchName" required><br>
                  
                      <label for="startDate">Start Date:</label>
                      <input type="date" id="startDate" name="startDate" required><br>
                  
                      <label for="endDate">End Date:</label>
                      <input type="date" id="endDate" name="endDate" required><br>
                  
                      <label for="enrolledStudents">Enrolled Students:</label><br>
                      <!-- Dropdown for selecting enrolled students -->
                      <select id="enrolledStudents" name="enrolledStudents[]" multiple required>
                        <option value="student1">Student 1</option>
                        <option value="student2">Student 2</option>
                        <!-- Add more options as needed -->
                      </select><br>
                  
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
