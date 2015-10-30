<?php include "functions.php";

readAll();

?>
<?php include "includes/headear.php"; ?>
  

    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h1>READ</h1>
          
           <?php
                 while($row = mysqli_fetch_assoc($result)){

                  ?>

                  <pre>
                      <?php  
                      print_r($row);
                      ?>
                  </pre>

                  <?php

                 }

            ?>


        </div>

       
          
      </div>
    </div>
  
   
  <?php include "includes/footer.php" ?>