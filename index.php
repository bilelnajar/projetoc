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
              <h3>CDE</h3>
              <p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.
              </p>
              <button><a href="acteur.php">Lire la suite</a></button>

    <!-- inscrire en php
            <div class="partenaire">
              <img src="images/dsa_france.png" alt="logo dsa france" />
              <h3>Dsa France</h3>
              <p>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                Nous accompagnons les entreprises dans les étapes clés de leur évolution.
              </p>
              <a href="#">Lire la suite</a>
            </div>

            <div class="partenaire">
              <img src="images/formation_co.png" alt="logo formation co" />
              <h3>Formation CO</h3>
              <p>Formation&co est une association française présente sur tout le territoire. Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
              </p>
              <a href="#">Lire la suite</a>
            </div>

            <div class="partenaire">
              <img src="images/protectpeople.png" alt="logo protect people" />
              <h3>Protect People</h3>
              <p>Protect People finance la solidarité nationale. Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.
              </p>
              <a href="#">Lire la suite</a>
    -->

            </div>
          </div>
        </section>

  <?php require("pieddepage.php"); ?>

      </body>
    </html>