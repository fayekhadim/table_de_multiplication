<?php session_start(); ?>
     <!DOCTYPE html>
     <html>
     <head>
       <title></title>
     </head>
     <body>
       <?php 
     if (isset($_POST['soumetr'])) {

                if (isset($_POST['re'])) {
           $tr = $_POST['re'];
           echo "<br>"; 
           $b = $_SESSION['r'];
      if ($tr = $b) {
          echo "<h1 style='color:white;'>Resutat corect</h1>";
      }else echo "<h1 style='color:red;'>Resutat incorect</h1>";
        }
     }
     
     ?>
     </body>
     </html>
    