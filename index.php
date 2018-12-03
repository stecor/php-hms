<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HMS-PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <img src="images/hmsdoctor.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <form class="form-group" action="func.php" method="post">

              <label for="username">Username :</label>
              <input type="text" name="username" class="form-control" placeholder="enter username">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>


              <label for="password">Password :</label>
              <input type="password" name="password" class="form-control" placeholder="enter password"><br>
              <input type="submit" name="login_submit" id="btnsubmit" class="btn btn-primary">
          
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
