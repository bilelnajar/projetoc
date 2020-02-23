
<!-- Partie presentation -->
<section id="presentation">
	<h1>Le Groupement Banque Assurance Française</h1>
	<p>Le GBAF (groupement banque et assurance français) est une fédération représentant les 6 grands groupes français:</p>
	<ul>
		<li>BNP Paribas</li>
		<li>BPCE</li>
		<li>Crédit Agricole</li>
		<li>Crédit mutuel-CIC</li>
		<li>Société Générale</li>
		<li>La Banque Postale</li>
	</ul>   
	<figure>
		<img class="illustration" src="images/puzzle.jpg" />
	</figure> 

</section>

<!-- Partie partenaires -->
<section id="partenaires">

	<h2>Découvrez les différents acteurs/partenaires du système bancaire français</h2>
	<div id="block">

		<!-- Entrées des données à partir de la BDD -->    
		<?php require 'pdo.php';

		$reponse = $bdd->query('SELECT * FROM Acteur');

		while ($donnees = $reponse->fetch())
		{
			echo 
			'<div class="partenaire">
			<figure><img  src="' . $donnees['logo'] . '" /></figure>' . '<br /><br />' .
			'<h3>' . $donnees['acteur'] .  '</h3> <br /><br /><p>' . $donnees['description'] . '</p><button><a href="cde.php">Lire la suite</a></button>
			</div>';
		}

		?>
</div>                      