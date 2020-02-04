<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />        
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
      <form method="post" action="traitement.php">
        <p>
          <fieldset>
            <legend>Compte existant</legend>
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required />           
            <br />
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="pass" id="pass" required /><br />
            <div class="bouton"><input type="submit" value="Connexion" /></div>
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