<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de recherche</title>
	<meta charset="utf-8">
</head>
<body>
	<fieldset>
			<legend>formulaire de recherche.</legend>
		<table>
			<form method="post" action="">
			<tr>
				<td><label for="prenom">Prénom à voire</label> :</td>
				<td><input type="text" name="prenom" id="prenom"></td>
			</tr>
						<tr>
				<td><input type="submit" name="soumis_pre" value="envoyer"></td>
			</tr>
			</form>
			<form method="post" action="">
			<tr>
				<td><label>Le genre à cherche</label> :</td>
				<td><select name="genre">
			<option value="">choix</option>
           <option value="male">Homme</option>
           <option value="female">Femme</option>
       			</select></td>
			</tr>
						<tr>
				<td><input type="submit" name="soumis_gr" value="envoyer"></td>
			</tr>
			</form>
			<form method="post" action="">
			<tr>
				<td><label for="pays">Un pays commençant par</label> :</td>
				<td>       <select name="etat" id="pays">
			<option>choix</option>
           <option value="a">A</option>
           <option value="b">B</option>
           <option value="c">C</option>
           <option value="d">D</option>
           <option value="e">E</option>
           <option value="f">F</option>
           <option value="g">G</option>
           <option value="h">H</option>
           <option value="i">I</option>
           <option value="j">J</option>
           <option value="k">K</option>
           <option value="l">L</option>
           <option value="m">M</option>
           <option value="n">N</option>
           <option value="o">O</option>
           <option value="p">P</option>
           <option value="q">Q</option>
           <option value="r">R</option>
           <option value="s">S</option>
           <option value="t">T</option>
           <option value="u">U</option>
           <option value="v">V</option>
           <option value="w">W</option>
           <option value="x">X</option>
           <option value="y">Y</option>
           <option value="z">Z</option>
       </select></td>
			</tr>
					<tr>
				<td><input type="submit" name="soumis_lt" value="envoyer"></td>
			</tr></form>
			<form method="post" action="">
			<tr>
				<td><label for="phon">Un email qui contient Gm</label> :</td>
				<td><input type="text" name="email" id="phon"></td>
			</tr>
						<tr>
				<td><input type="submit" name="soumis_ml" value="envoyer"></td>
			</tr>
			</form>
			<form method="post" action="">
			<tr>
				<td><label for="pass">Repartition par Etat SN</label> :</td>
				<td><input type="text" name="etatb" id="pass"></td>
			</tr>
						<tr>
				<td><input type="submit" name="soumis_et" value="envoyer"></td>
			</tr>
			</form>
			<form method="post" action="">
			<tr>
				<td><label>Nombre de femme ou d'homme</label> :</td>
				<td><select name="nbr_genre">
			<option>choix</option>
           <option value="male">Homme</option>
           <option value="female">Femme</option>
       			</select></td>
			</tr>
						<tr>
				<td><input type="submit" name="soumis_nr" value="envoyer"></td>
			</tr>
			</form>
			<form method="post" action="">
			<tr>
				<td><label>Moyenne d'âge femme ou d'homme</label> :</td>
				<td><select name="myn_genre">
			<option>choix</option>
           <option value="male">Homme</option>
           <option value="female">Femme</option>
       			</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="soumis" value="envoyer"></td>
			</tr>
			</form>
		</table>
		</fieldset>
		<?php 
				//    moyenne
			if (isset($_POST['soumis'])) {
			
			$myn_genre = $_POST['myn_genre'] ;
				include('connec.php') ;
				if(isset($myn_genre)) {
				$Retatbaf = $base-> prepare("SELECT avg(year(now())-right(date_de_naissance,4)) as moyenne FROM table_1 WHERE genre = :codebaf") ;
				$Retatbaf->execute(array('codebaf'=>$myn_genre
				));
				while($vebaf = $Retatbaf->fetch()) {
					echo $vebaf['moyenne'].'<br>' ;
				}
				}else echo 'Code pays vide';
		}
		if (isset($_POST['soumis_pre'])) {
			$prenom = $_POST['prenom'] ;
			if (isset($prenom)) {
			include('connec.php') ;
			$Rprenom = $base-> prepare('SELECT prenom, nom FROM table_1 WHERE prenom = :prenom') ;
				$Rprenom->execute(array('prenom'=>$prenom
				));
				while ($v = $Rprenom->fetch()) {
					echo $v['prenom'].'   '.$v['nom'].'<br>' ;
				}
				}else echo 'Prenom vide';

		}
		if (isset($_POST['soumis_gr'])) {
			include('connec.php') ;
			$genre = $_POST['genre'] ;
			//    genre
				if (isset($genre)) {
				$Rgenre = $base-> prepare('SELECT prenom, nom, genre FROM table_1 WHERE genre = :genree') ;
				$Rgenre->execute(array('genree'=>$genre
				));
				while ($vg = $Rgenre->fetch()) {
					echo $vg['prenom'].'   '.$vg['nom'].'<br>' ;
				}
				}else echo 'Genre vide';
		}
		if (isset($_POST['soumis_lt'])) {
			$etat = $_POST['etat'] ;
			include('connec.php') ;
			if(isset($etat)) {
				$Retat = $base-> prepare("SELECT * FROM table_1 WHERE code_pays LIKE :code_z ") ;
				$Retat->execute(array('code_z'=>$etat.'%'
				));
				while($ve = $Retat->fetch()) {
					echo $ve['code_pays'].'<br>' ;
				}
				}else echo 'Code etat vide';
		}
		if (isset($_POST['soumis_ml'])) {
			$email = $_POST['email'] ;
			include('connec.php') ;
			if(isset($email)) {
				$Rmail = $base-> prepare("SELECT * FROM table_1 WHERE email LIKE :code_y ") ;
				$Rmail->execute(array('code_y'=>'%'.$email.'%'
				));
				while($vem = $Rmail->fetch()) {
					echo $vem['email'].'<br>' ;
				}
			}else echo 'Code email vide';

		}
		if (isset($_POST['soumis_nr'])) {
			$nbr_genre = $_POST['nbr_genre'] ;
			include('connec.php') ;
			if(isset($nbr_genre)) {
				$Retatba = $base-> prepare("SELECT COUNT(genre) as nombre FROM table_1 WHERE genre = :codeba") ;
				$Retatba->execute(array('codeba'=>$nbr_genre
				));
				while($veba = $Retatba->fetch()) {
					echo $veba['nombre'].'<br>' ;
				}
				}else echo 'Code pays vide';

		}
		if (isset($_POST['soumis_et'])) {
			$etatb = $_POST['etatb'] ;
			include('connec.php') ;
			if(isset($etatb)) {
				$Retatb = $base-> prepare("SELECT code_pays FROM table_1 WHERE code_pays = :codeb") ;
				$Retatb->execute(array('codeb'=>$etatb
				));
				while($veb = $Retatb->fetch()) {
					echo $veb['code_pays'].'<br>' ;
				}
				}else echo 'Code pays vide';
		}
		 ?>
</body>
</html>