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


<!-- Entrés des données à partir de la BDD -->		
<?php
 try 
{ 
    $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=1x22r_projet_3", "1x22r_projet_3", "Projet3$$$");
}
catch (PDOException $e)
{
        echo('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM Acteur WHERE acteur=\'DSA France\'');

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
					Prénom<br />
					Date<br />
					Texte<br />
				</p>
			</div>
		</div>

	</section>

  <?php require("pieddepage.php"); ?>

	</body>
</html>