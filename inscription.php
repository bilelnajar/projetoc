<?php
require('pdo.php');

if (
  isset($_POST['nom']) &&
  isset($_POST['prenom']) &&
  isset($_POST['username']) &&
  isset($_POST['password'])
) {

// Hachage du mot de passe
  $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertion des valeurs dans la BDD via le formulaire
  $req = $bdd->prepare('INSERT INTO Account(nom, prenom, username, password, question, reponse) VALUES(:nom, :prenom, :username, :password, :question, :reponse)');
  $req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'username' => $_POST['username'],
    'password' => $pass_hache,
    'question' => $_POST['question'],
    'reponse' => $_POST['reponse']
  ));

// démarage de la session
  session_start();

// Recuperaton des variables nom et prenom dans $_SESSION
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];

  header("Location:./index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />        
  <title>Inscription</title>
</head>

<body>

  <!-- En tête -->
  <header>
    <figure>
      <img class="logologin" src="images/logo-gbaf.png" alt="logo de gbaf" />
    </figure>
  </header>

  <!-- login nouveau membre--> 
  <section>
    <div class="nouveau">		
      <form method="post" action="inscription.php">
      	<p>
      		<fieldset>
      			<legend>Nouveau membre</legend>
      			<label for="nom">Nom :</label>
      			<input type="text" name="nom" id="nom" required />
            <br />
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required />
            <br />
            <label for="username">Votre pseudo :</label>
            <input type="text" name="username" id="username" required />
            <br />	 
            <label for="password">Créer votre mot de passe :</label>   	   
            <input type="password" name="password" id="password" required /><br />
            <label for="question">Question secrète :</label>
            <input type="text" name="question" id="question" required />
            <br />
            <label for="reponse">Réponse à la question secrète :</label>
            <input type="text" name="reponse" id="reponse" required />  
            <br />
            <button type="submit" class="forminscription">M'inscrire</button>
          </fieldset>
        </p>
      </form>		
    </div>  

  </section>

  <?php include("pieddepage.php"); ?>

</body>
</html>