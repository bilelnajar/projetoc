

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />        
    <title>Inscription</title>
  </head>

  <body>
    <!-- code à conserver ne fonctionne pas chez infomaniak 
  <?php
      $dbName = "1x22r_projet_3";
      $username = "1x22r_projet_3";
      $password = "Projet3$$$";

      try {
        $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=$dbName", $username, $password);
  
      }catch (PDOException $e) {
        echo $e->getMessage();
      }
     ?> 
      -->

<!-- En tête -->
      <header>
          <figure>
            <img class="logologin" src="images/logo-gbaf.png" alt="logo de gbaf" />
          </figure>
      </header>

<!-- Connexion en php à la base de données-->
  <?php
 try 
{ 
    $bdd = new PDO('mysql:host=localhost;dbname=P3;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

  ?>

<!-- login nouveau membre--> 
  <section>
    <div class="nouveau">		
      <form method="post" action="index.php">
      	<p>
      		<fieldset>
      			<legend>Nouveau membre</legend>
      			<label for="name">Nom :</label>
      			<input type="text" name="name" id="name" required />
            <br />
            <label for="name">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required />
            <br />
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required />
            <br />	 
            <label for="email">Email :</label>
            <input type="email" required />
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
            <div class="bouton"><input type="submit" name="forminscription" value="Envoyer" /></div>
          </fieldset>
        </p>
      </form>		
    </div>	
    <?php
    ?>
  </section>

  <?php include("pieddepage.php"); ?>

  </body>
</html>