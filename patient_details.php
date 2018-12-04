<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="jumbotron admin"></div>
    <div class="container">
      <div class="card">
        <div class="card-body admin-head">
          <div class="row">
            <div class="col-md-4">
              <h4>Patient Details</h4>
            </div>
            <div class="col-md-8">
              <form class="form-group"  method="post">
                <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-6">
                    <input type="text" name="search" class="form-control"  placeholder="Search">
                  </div>
                  <div class="col-sm-2">
                    <input type="submit" name="patient_search_submit" class="btn btn-light" value="Search">
                  </div>
                </div>
              </form>
            </div>
          </div>
        <div class="card-body"></div>
          <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Appointment</th>
              <th scope="col">Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
                if (isset($_POST['patient_search_submit'])){
                  search_patient_details();
                }else if (isset($_POST['delete-patient'])){
                  delete_patient($_POST['id']);
                }else{
                  get_patient_details();
                }
            ?>
          </tbody>
        </table>
      </div>
      <div class="card-body"></div>
      <div class="row">
        <div class="col-md-1"><a href="admin-panel.php" class="btn btn-primary btn-sm">Go Back</a></div>
        <div class="col-md-1"><a href="patient_details.php" class="btn btn-primary btn-sm">Refresh</a></div>
        <div class="col-md-10"></div>
        <br>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
