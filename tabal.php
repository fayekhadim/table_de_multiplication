<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table 1</title>
</head>
<body>
    <style>
    *{
        padding: 0;
        margin: 0;
        
    }
    a{
            margin-left: 900px;
            color: white;
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
      
      .formcontent{
          width: 90%;
          height: 200px;
          margin-left: 50px;
          margin-right: 50px;
          margin-top: -50px;
          background-color: white;
          box-shadow: 5px 5px 5px 5px #888888;
          border-radius: 10px;
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
     margin-top: 100px;
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
     <select name="selects" class="selects">
         <option value="1">Table de 1</option>
         <option value="2">Table de 2</option>
         <option value="3">Table de 3</option>
         <option value="4">Table de 4</option>
         <option value="5">Table de 5</option>
         <option value="6">Table de 6</option>
         <option value="7">Table de 7</option>
         <option value="8">Table de 8</option>
         <option value="9">Table de 9</option>
         <option value="10">Table de 10</option>
     </select>
     <div class="btns">
         <ul>
             <li><button>annuler</button> </li>
             <li><input type="submit" name="soumet" class="in" value="Afficher la table"></li>
         </ul>
     </div>
     <div class="resultat"></div>
    </form>
     </div>
     <div class="sortie">
     <?php 
     if (isset($_POST['soumet'])) {
     	$tabal = $_POST['selects'];
     	 for ($i=1; $i < 11; $i++) { 
	
			echo "$tabal * $i = ".$i*$tabal."<br>";
		}
     }else echo "Aucune tabal choisi !";
     
     ?>
	 </div>



    </div>
</body>
</html>