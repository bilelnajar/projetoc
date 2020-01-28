  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />        
    <title>Inscription</title>
  </head>

  <body>

  <?php include("entete.php"); ?>

<!-- login nouveau membre--> 
  <section>
    <div class="nouveau">		
      <form method="post" action="traitement.php">
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
            <label for="pass">Nouveau mot de passe :</label>   	   
            <input type="password" name="pass" id="pass" required /><br />
            <label for="pass">Confirmez votre mot de passe :</label>
            <input type="password" name="pass" id="pass" required />
            <br />
            <label for="question">Question secrète :</label>
            <input type="text" name="question" id="question" required />
            <br />
            <label for="response">Réponse à la question secrète :</label>
            <input type="text" name="response" id="response" required />
            <br />
            <div class="bouton"><input type="submit" value="Envoyer" /></div>
          </fieldset>
        </p>
      </form>		
    </div>	
  </section>

  <?php include("pieddepage.php"); ?>

  </body>
</html>