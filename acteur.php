<?php
// démarage de la session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />        
		<title>GBAF Groupement banque et assurance francais</title>
			<script src="https://kit.fontawesome.com/fbd678828e.js" crossorigin="anonymous"></script>
</head>

	<body>

  <?php require("entete.php"); ?>

	<section>


<!-- Entrées des données à partir de la BDD -->		
<?php require('pdo.php');

/* TESTER CE CODE
$sql=mysql_query("SELECT ID_film FROM film WHERE nom_film = '$nom_film' ;");
        while($tab= mysql_fetch_array($sql))
        {
            //recupéré l'id du film
             
            extract($tab);//Tous les champs de la classe film deviennent des variables du même nom que leur champ.
                                      //par exemple ici le champs ID_film devient une variable $ID_film
                                      // Elle n'est disponible que dans la boucle while
            $id=$ID_film ;
                 }
echo "$id"; */

$reponse = $bdd->query('SELECT * FROM Acteur WHERE acteur=\'CDE\'');

while ($donnees = $reponse->fetch())
{
	echo '<p>' . $donnees['acteur'] . '</p>' 
		. '<br/><br/>' . 
		'<figure><img  src="' . $donnees['logo'] . '" /></figure>'
		. '<br/><br/>' .
		'<p>'. $donnees['description'] .'</p>';
}
  ?>
  
	</section>

	<section id="commentaires">

		<div id="block">
				<h3>X Commentaires</h3>
			<div id="newcom">
				<p>Nouveau commentaire</p>

			</div>	
			<div id="detail">
				<p>
					<?php echo $_SESSION['prenom'] ?><br />
					Date<br />
					Texte<br />
				</p>
			</div>
		</div>

	</section>

  <?php require("pieddepage.php"); ?>

	</body>
</html>