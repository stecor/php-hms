<?php
$con=mysqli_connect("localhost","root","root","hmsdb");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

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
  /* close result set */
  mysqli_free_result($result);
  /* close connection */
  mysqli_close($con);
}

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

 /* close result set */
 mysqli_free_result($result);
 /* close connection */
 mysqli_close($con);
}





?>
