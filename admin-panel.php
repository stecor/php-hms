<!DOCTYPE html>
<?php include("func.php"); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin-Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="jumbotron admin"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="" class="list-group-item active">List of Patients</a>
              <a href="patient_details.php" class="list-group-item">Patient Details</a>
              <a href="" class="list-group-item">Add New Patient</a>
              <a href="" class="list-group-item">Payment/ Checkout</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="" class="list-group-item active">Staff</a>
              <a href="" class="list-group-item">Staff Details</a>
              <a href="" class="list-group-item">Add New Staff</a>
              <a href="" class="list-group-item">Remove Staff Member</a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-body admin-head">
                Book Appointment
              </div>

              <div class="card-body">
                <form class="form-group" action="func.php" method="post">
                  <label for="fname">ID :</label>
                  <input type="text" name="fname" class="form-control" value="<?php  echo $_POST['id'];  ?>"  readonly><br>
                  <label for="fname">First Name :</label>
                  <input type="text" name="fname" class="form-control" value="<?php  echo $_POST['fname'];  ?>" ><br>
                  <label for="lname">Last Name :</label>
                  <input type="text" name="lname" class="form-control" value="<?php  echo $_POST['lname'];  ?>" ><br>
                  <label for="email">Email :</label>
                  <input type="text" name="email" class="form-control" value="<?php  echo $_POST['email']; ?>" ><br>
                  <label for="contact">Contact :</label>
                  <input type="text" name="contact" class="form-control" value="<?php  echo $_POST['contact']; ?>" ><br>
                  <label for="docapp">Doctor Appointment :</label>
                  <select class="form-control" name="docapp">
                    <option value="<?php if(isset($_POST['edit-patient'])){ echo $_POST['docapp']; } else { Null;} ?>"><?php if(isset($_POST['edit-patient'])){ echo $_POST['docapp']; } else { Null;} ?></option>
                    <option value="Dr. Frank from 6pm to 8pm">Dr. Frank from 6pm to 8pm</option>
                    <option value="Dr. Carol from 4pm to 6pm">Dr. Carol from 4pm to 6pm</option>
                  </select><br>
                  <input type="submit" name="patient_submit" value="Enter Appointment" class="btn btn-primary">
                  <input type="submit" name="update_patient" value="Update Appointment" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
