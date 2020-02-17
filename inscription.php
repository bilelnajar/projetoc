

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
      <form method="post" action="index.php">
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

<!-- Connexion en php à la base de données-->

<?php require 'pdo.php'; 

$req = $bdd->prepare('INSERT INTO Account(nom, prenom, username, password, question, reponse) VALUES(:nom, :prenom, :username, :password, :question, :reponse)');

$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['username'], $_POST['password'], $_POST['question'], $_POST['reponse']));

header('location: index.php');
?>

          </fieldset>
        </p>
      </form>		
    </div>  

  </section>

  <?php include("pieddepage.php"); ?>

  </body>
</html>