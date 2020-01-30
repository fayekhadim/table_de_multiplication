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
          height: 200px;
          color: white;
      }
          h2,h4{
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
     margin-top: 0px;
     margin-right: 110px;
   }
   button,.in{
       background-color: blue;
       color: white;
       height: 40px;
       width: 100px;
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
     </div>
     <div class="formcontent">
    <h2>Merci de sélectionnner la table que vous voulez consulter</h2>
    <form action="" method="post">
    <div class="left">
      <table width="500px" height="200px">
       <tr>
           <td><input type="checkbox" name="t1" value="1"> Table 1</td>
           <td> <input type="checkbox" name="t2"value="2"> Table 2</td>
        </tr>
        <tr>
           <td><input type="checkbox" name="t3"value="3"> Table 3</td>
           <td><input type="checkbox"name="t4"value="4"> Table 4</td>
        </tr>
           <td><input type="checkbox"name="t5"value="5"> Table 5</td>
            <td><input type="checkbox"name="t6"value="6"> Table 6</td>
       </tr>
       <tr>
           <td><input type="checkbox"name="t7"value="7"> Table 7</td>
           <td><input type="checkbox"name="t8"value="8"> Table 8</td>
        </tr>
        <tr>
           <td><input type="checkbox"name="t9"value="9"> Table 9</td>
           <td><input type="checkbox"name="t10"value="10"> Table 10</td>
       </tr>
       </table>
     </div>
            <div class="btns">
         <ul>
             <li><button>annuler</button> </li>
             <li><input type="submit" name="soumet" class="in"></li>
         </ul>
     </div>
     <div class="resultat"></div>
    </form>
     </div>
    

<div class="sortie">
     <?php 
     if (isset($_POST['soumet'])) {
        if (isset($_POST['t1'])) {
          $t1 = $_POST['t1'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t1 * $i = ".$i*$t1."<br>";
           }
        }

        if (isset($_POST['t2'])) {
           $t2 = $_POST['t2'];
           echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t2 * $i = ".$i*$t2."<br>";
           }
        }


        if (isset($_POST['t3'])) {
          $t3 =$_POST['t3'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
      echo "$t3 * $i = ".$i*$t3."<br>";
           }
        }


        if (isset($_POST['t4'])) {
          $t4 = $_POST['t4'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t4 * $i = ".$i*$t4."<br>";
           }
        }

        if (isset($_POST['t5'])) {
          $t5 = $_POST['t5'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t5 * $i = ".$i*$t5."<br>";
           }
        }


        if (isset($_POST['t6'])) {
          $t6 = $_POST['t6'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t6 * $i = ".$i*$t6."<br>";
           }
        }


        if (isset($_POST['t7'])) {
          $t7 = $_POST['t7'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t7 * $i = ".$i*$t7."<br>";
           }
        }


        if (isset($_POST['t8'])) {
          $t8 = $_POST['t8'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t8 * $i = ".$i*$t8."<br>";
           }
        }


        if (isset($_POST['t9'])) {
          $t9 = $_POST['t9'];
          echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t9 * $i = ".$i*$t9."<br>";
           }
        }


        if (isset($_POST['t10'])) {
           $t10 = $_POST['t10'];
           echo "<br>";
          for ($i=1; $i < 11; $i++) { 
  
      echo "$t10 * $i = ".$i*$t10."<br>";
           }
        }
     }else echo "Aucune tabal choisi !";
     
     ?>
   </div>

    </div>
</body>
</html>