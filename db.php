<?php  
 
 $connection = mysqli_connect('localhost', 'root', 'root','loginapp');

  if($connection) {
      echo'<div class="alert alert-success">
              <strong>Success!</strong> Connessione avvenuta correttamente.
           </div>';
  } else {
      die('Problemi di accesso.' . mysqli_error() );
  }

?>



