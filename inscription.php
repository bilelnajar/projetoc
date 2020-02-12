

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

<!-- Connexion en php à la base de données-->
 <?php
//      $dbName = "1x22r_projet_3";
 //     $username = "1x22r_projet_3";
 //     $password = "Projet3$$$";

//      try{
 //       $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=$dbName", $username, $password);
 //       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        $insertion = "INSERT INTO Account(nom,prenom,username,password,question,reponse) 
//                      VALUES ('Napoleon', 'Bona', 'bonapo', 'Projet3', '', '')";

//        $bdd->exec($insertion);
 //     }

//      catch (PDOException $e){
 //       echo $e->getMessage();
 //     }
?> 

<!-- 2eme méthode de connexion à BDD -->
<?php 

    require 'pdo.php'; 

    $req = $bdd->prepare("INSERT INTO Account SET username = ?, password = ?, question = ?, reponse = ?"); 

    $req->execute([$_POST['username'], $_POST['password'], $_POST['question'], $_POST['reponse']]); 
    die('Votre compte a bien été crée'); 
?>
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
            <label for="password">Nouveau mot de passe :</label>   	   
            <input type="password" name="password" id="password" required /><br />
            <label for="password">Confirmez votre mot de passe :</label>
            <input type="password" name="password" id="password" required />
            <br />
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