<?php require('pdo.php');
// check variable

if (isset($_POST['username']) && isset($_POST['password'])) {

  $query = $bdd->prepare("SELECT * FROM Account WHERE username='" . $_POST['username'] . "'");

  $query->execute();
  $row = $query->fetch();
  var_dump(isset($row['password']));
  if (isset($row['password']) && password_verify($_POST['password'], $row['password']))
  {

// démarage de la session
    session_start();

// Recuperaton des variables nom et prenom dans $_SESSION
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['prenom'] = $row['prenom'];

    header("Location:./index.php");
  } 
}        
?>

<!-- Login membre-->
<section> 
  <div id="login">
    <form method="post">
      <p>
        <fieldset>
          <legend>Compte existant</legend>
          <label for="username">Votre pseudo :</label>
          <input type="text" name="username" id="username" required />           
          <br />
          <label for="password">Votre mot de passe :</label>
          <input type="password" name="password" id="password" required /><br />
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
