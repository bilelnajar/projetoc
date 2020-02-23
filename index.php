<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />  
  <!-- résolution inférieure à 1280px -->        
  <link rel="stylesheet" media="screen and (max-width: 1024px)" href="petite_resolution.css" /> 


  <title>GBAF Groupement banque et assurance francais</title>
  <script src="https://kit.fontawesome.com/fbd678828e.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("entete.php"); ?> 

  <!-- Login membre-->

  <?php if (!isset($_SESSION['nom'])) { // << RAJOUTER boucle PRENOM >>
    require('login.php');
  } else {
    require('accueil.php'); // RAJOUTER ECHO MSG d'erreur
  } ?>


  <?php require("pieddepage.php"); ?>

</body>
</html>