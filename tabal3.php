<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
      *{
        padding: 0;
        margin: 0;
        
    }
    body{
        background-color:  #e0e0d1;
    }
      .header{
          background-color: blue;
          height: 250px;
          color: white;
      }
          h2,h4,#resul{
              margin-left: 100px;
          }
          a{
            margin-left: 900px;
            color: white;
          }
      
      .formcontent{
          width: 90%;
          height: 250px;
          margin-left: 50px;
          margin-right: 50px;
          margin-top: -50px;
          background-color: white;
          box-shadow: 5px 5px 5px 5px #888888;
          border-radius: 10px;
          padding-left: 50px;
          }
   .selects{
       width: 50%;
       margin-left: 100px;
       margin-top: 35px;
   }
   ul{
       list-style: none;
       
       
   }
   li{
       text-decoration: none;
       display: inline;
       color: blue;
       padding-left: 100px;
   }
   .btns{
     float:right;
     margin-top: 25px;
     margin-right: 110px;
   }
   button,.in{
       background-color: blue;
       color: white;
       height: 40px;
       width: 100px;
   }
   .on{
    width: 25px;
   }
   .sortie{
    margin-top: 30px;
   margin-left:160px;
 }
    </style>
    <div class="main">
     <div class="header">
        <h2>Table de multiplication</h2>
        <h4>Afficher une table de multiplication</h4>
        <a href="tabal.php">Partie 1</a><br><a href="tabal2.php">Partie 2</a><br><a href="tabal3.php">Partie 3</a><br><a href="tabal4.php">Partie 4</a>
        <p id="resul"> <?php 
     if (isset($_POST['soumetr'])) {

                if (isset($_POST['re'])) {
           $tr = $_POST['re']; 
      if ($tr == $_SESSION['r']) {
          echo '<h1 style="color:white;">Resultat correct</h1>';
      }else echo '<h1 style="color:red;">Resultat incorrect, c\'était : '.$_SESSION['r'].'</h1>';
        }
     }
     
     ?></p>
     </div>
     <div class="formcontent">
    <h2>Merci de sélectionnner la table que vous voulez consulter</h2>
    <form action="" method="post">
    <div class="left">
      <table width="500px" height="200px">
       <tr>
           <td><input type="radio" name="t" value="1"> Table 1</td>
           <td> <input type="radio" name="t"value="2"> Table 2</td>
        </tr>
        <tr>
           <td><input type="radio" name="t"value="3"> Table 3</td>
           <td><input type="radio"name="t"value="4"> Table 4</td>
        </tr>
           <td><input type="radio"name="t"value="5"> Table 5</td>
            <td><input type="radio"name="t"value="6"> Table 6</td>
       </tr>
       <tr>
           <td><input type="radio"name="t"value="7"> Table 7</td>
           <td><input type="radio"name="t"value="8"> Table 8</td>
        </tr>
        <tr>
           <td><input type="radio"name="t"value="9"> Table 9</td>
           <td><input type="radio"name="t"value="10"> Table 10</td>
       </tr>
       </table>
     </div>
            <div class="btns">
         <ul>
             <li><button>annuler</button> </li>
             <li><input type="submit" name="soumet" class="in"></li>
         </ul>
     </div>
    </form>
     </div>
    

<div class="sortie">
     
     <form method="post" action="">
      <?php 
     if (isset($_POST['soumet'])) {

                if (isset($_POST['t'])) {
           $t = $_POST['t'];
           $alea = rand(1,10);
           echo "<br>";
           $a = $alea * $t; 
      $_SESSION['r'] = $a;
      echo "$t * $alea = ";
        }
     }else echo "Vide";
     
     ?>
      <input type="text" name="re" class="on"><br>
      <input type="submit" name="soumetr" class="in">
      </form>
   </div>

    </div>
</body>
</html>