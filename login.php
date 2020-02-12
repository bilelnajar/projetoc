<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <!-- résolution inférieure à 1280px -->              
  <link rel="stylesheet" media="screen and (max-width: 1024px)" href="petite_resolution.css" />        
  <title>Login</title>
</head>

<body>

  <!-- En tête -->
  <header>
    <figure>
      <img class="logologin" src="images/logo-gbaf.png" alt="logo de gbaf" />
    </figure>
  </header>

  <!-- Login membre-->
  <section> 
    <div id="login">
      <form method="post" action="login.php">
        <p>
          <fieldset>
            <legend>Compte existant</legend>
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required />           
            <br />
            <label for="password">Votre mot de passe :</label>
            <input type="password" name="password" id="password" required /><br />
            <div class="bouton"><input type="submit" value="Connexion" /></div>
            <?php
            // check variable
            if (isset($_POST['pseudo']) && isset($_POST['pass']))

            {
              $dbName = "1x22r_projet_3";
              $username = "1x22r_projet_3";
              $password = "Projet3$$$";

              try 
              {
                $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=$dbName", $username, $password);
              }
              catch (PDOException $e) 
              {
                echo $e->getMessage();
              }

              $reponse = $bdd->query("SELECT * FROM Account WHERE username='" . $_POST['pseudo'] . "' AND password='" . $_POST['password'] . "'");

              while ($donnees = $reponse->fetch())
              {
                header("Location:./index.php?user=" . $donnees['nom'] . " " . $donnees['prenom']);
              }

//            else {
//                echo "Identifiant non reconnu, Veuillez vous inscrire en cliquant sur le lien ci-dessous !";  AFFICHE ERREUR
//              }    

            }
            ?>
          </fieldset>

          <a href="">Mot de passe oublié ?</a>
        </p>
      </form>
    </div>

    <div id="nouveau">
      <h2>Vous êtes un nouveau membre</h2>
      <a href="inscription.php">Inscription</a>

    </div>	

  </section>

  <?php include("pieddepage.php"); ?>

</body>
</html>
