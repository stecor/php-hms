<?php

// connection with mysql
$con=mysqli_connect("localhost","root","root","hmsdb");

/* check connection */
if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

function close_connection(){
  /* close result set */
  mysqli_free_result($result);
  /* close connection */
  mysqli_close($con);
}



// login
if(isset($_POST['login_submit'])){
  $username= $_POST['username'];
  $password= $_POST['password'];

  $query="SELECT * FROM logintb WHERE username='$username' AND password='$password'";

  if ($result = mysqli_query($con, $query)) {
      /* determine number of rows result set */
      $row_cnt = mysqli_num_rows($result);

      if($row_cnt == 1){
        header("Location:admin-panel.php");
      }else{
        echo "<script>alert('Error login');</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
  }
  close_connection();
}


// Insert patient details
if (isset($_POST['patient_submit'])){

  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $contact= $_POST['contact'];
  $docapp= $_POST['docapp'];

  $query="INSERT INTO doctorapp(fname,lname,email,contact,docapp)VALUES('$fname','$lname','$email','$contact','$docapp')";
  $result=mysqli_query($con,$query);

  if($result){
    echo "<script>alert('Appointment Registered');</script>";
    echo "<script>window.open('admin-panel.php','_self')</script>";
  }
 close_connection();
}


// Update patient details
if (isset($_POST['update_patient'])){
  global $con;

  $id = $_POST['id'];
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $contact= $_POST['contact'];
  $docapp= $_POST['docapp'];



  $query= "UPDATE doctorapp SET fname = '$fname', lname= '$lname', email='$email', contact= '$contact', docapp = '$docapp' WHERE id = '$id'";


  $result=mysqli_query($con,$query);

  if($result){

    echo "<script>alert('Appointment Updated');</script>";
    echo "<script>window.open('patient_details.php','_self')</script>";
  }
 close_connection();
}

// function make html table with mysql
function get_table($result){

  while($row = mysqli_fetch_array($result)){

    $id = $row['id'];
    $fname= $row['fname'];
    $lname= $row['lname'];
    $email= $row['email'];
    $contact= $row['contact'];
    $docapp= $row['docapp'];


    echo "<tr>
          <td>$id</td>
          <td>$fname</td>
          <td>$lname</td>
          <td>$email</td>
          <td>$contact</td>
          <td>$docapp</td>
          <td>
            <div class='row'>
             <div class='btn-edit'>
              <form  name='edit-pat' action='admin-panel.php'  method='post'>
                  <input type='submit' name='edit-patient' class='btn btn-light btn-sm' value='Edit'>
                  <input type='hidden' name='id' value='$id'/>
                  <input type='hidden' name='fname' value='$fname'/>
                  <input type='hidden' name='lname' value='$lname'/>
                  <input type='hidden' name='email' value='$email'/>
                  <input type='hidden' name='contact' value='$contact'/>
                  <input type='hidden' name='docapp' value='$docapp'/>
              </form>
              </div>
              <form   method='post'>
                  <input type='submit'  name='delete-patient' class='btn btn-light btn-sm' value='Delete'>
                  <input type='hidden' name='id' value='$id'/>
              </form>
              </div>
          </td>
          </tr>";
        }
}


//function get patients list
function get_patient_details(){
  global $con;
  $query = "SELECT * FROM doctorapp";
  $result=mysqli_query($con,$query);

  get_table($result);

  close_connection();
}


// function search patient
function search_patient_details(){
  global $con;
   $search = $_POST['search'];

  $query = "SELECT * FROM doctorapp WHERE fname='$search' OR lname='$search' OR email='$search' OR contact='$search' OR docapp='$search'";
  $result=mysqli_query($con,$query);

  get_table($result);

  close_connection();
}

// function delete patient
function delete_patient($id){
  global $con;

  $query = "DELETE FROM doctorapp WHERE email='$id'";

  $result=mysqli_query($con,$query);

  if ($result) {
    echo "<script>alert('Record deleted successfully');</script>";
} else {
    echo "<script>alert('Error deleting record: $id');</script>";
}

  get_patient_details();

  close_connection();
}
