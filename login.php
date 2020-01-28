  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />        
    <title>Login</title>
  </head>

  <?php include("entete.php"); ?>

<!-- Login membre-->
    <section id="login">
      <div class="existant">
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
        </p>
      </form>
    </div>	

<!-- login nouveau membre--> 
    <div class="nouveau">		
      <form method="post" action="traitement.php">
      	<p>
      		<fieldset>
      			<legend>Nouveau membre</legend>
      			<label for="name">Nom et prénom :</label>
      			<input type="text" name="name" id="name" required />
            <br />
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required />
            <br />	 
            <label for="email">Email :</label>
            <input type="email" required />
            <br />	
            <label for="pass">Nouveau mot de passe :</label>   	   
            <input type="password" name="pass" id="pass" required /><br />
            <label for="pass">Confirmez votre mot de passe :</label>
            <input type="password" name="pass" id="pass" required /><br />
            <div class="bouton"><input type="submit" value="Envoyer" /></div>
          </fieldset>
        </p>
      </form>		
    </div>	
  </section>

  <?php include("pieddepage.php"); ?>

</body>
</html>