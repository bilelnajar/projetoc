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

  <!-- Partie presentation -->
        <section id="presentation">
          <h1>Le Groupement Banque Assurance Français</h1>
          <p>Le GBAF (groupement banque et assurance français) est une fédération représentant les 6 grands groupes français:</p>
          <ul>
            <li>BNP Paribas</li>
            <li>BPCE</li>
            <li>Crédit Agricole</li>
            <li>Crédit mutuel-CIC</li>
            <li>Société Générale</li>
            <li>La Banque Postale</li>
          </ul>   
          <figure>
            <img class="illustration" src="images/puzzle.jpg" />
          </figure> 

        </section>

  <!-- Partie partenaires -->
        <section id="partenaires">

          <h2>Découvrez les différents acteurs/partenaires du système bancaire français</h2>
          <div id="block">
            <div class="partenaire">
              <figure>
                <img class="cde" src="images/cde.png" alt="logo cde" />
              </figure>
<!-- Entrés des données à partir de la BDD -->    
      <?php
 try 
{ 
    $bdd = new PDO('mysql:host=localhost;dbname=P3;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT acteur, description FROM acteur WHERE acteur="CDE"');
while ($donnees = $reponse->fetch())
{
  echo '<p>' . $donnees['acteur'] . ' <br /> ' . $donnees['description'] . '</p>';
}
?>
              <button><a href="acteur.php">Lire la suite</a></button>
            </div>  

<!-- DSA France -->
            <div class="partenaire">
              <img src="images/dsa_france.png" alt="logo dsa france" />

<?php
$bdd = new PDO('mysql:host=localhost;dbname=P3;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT acteur, description FROM acteur WHERE acteur="Dsa France"');
while ($donnees = $reponse->fetch())
{
  echo '<p>' . $donnees['acteur'] . ' <br /> ' . $donnees['description'] . '</p>';
}
    ?>  
              <button><a href="acteur.php">Lire la suite</a></button>
            </div>

<!-- Formation&co -->
            <div class="partenaire">
              <img src="images/formation_co.png" alt="logo formation co" />

<?php
$bdd = new PDO('mysql:host=localhost;dbname=P3;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT acteur, description FROM acteur WHERE acteur="Formation&co"');
while ($donnees = $reponse->fetch())
{
  echo '<p>' . $donnees['acteur'] . ' <br /> ' . $donnees['description'] . '</p>';
}
    ?> 

              <button><a href="acteur.php">Lire la suite</a></button>
            </div>

<!-- Protectpeople -->
            <div class="partenaire">
              <img src="images/protectpeople.png" alt="logo protect people" />

<?php
$bdd = new PDO('mysql:host=localhost;dbname=P3;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT acteur, description FROM acteur WHERE acteur="Protectpeople"');
while ($donnees = $reponse->fetch())
{
  echo '<p>' . $donnees['acteur'] . ' <br /> ' . $donnees['description'] . '</p>';
}
    ?> 

              <button><a href="acteur.php">Lire la suite</a></button>
            </div>

          </div>
        </section>

  <?php require("pieddepage.php"); ?>

      </body>
    </html>