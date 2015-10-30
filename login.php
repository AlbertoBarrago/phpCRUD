<?php include "functions.php";

if(isset($_POST['submit'])) {

  loginSimple();

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login PHP</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
              </div>

              <div class="form-group">
               <label for="password">Password</label>
               <input type="password" name="password" class="form-control">
              </div>

               <input type="submit" class="btn btn-danger" name="submit" value="Submit">
            </form>
          </div>
          
      </div>
    </div>
  
   
  </body>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>