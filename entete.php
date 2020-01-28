<!-- En tête -->
      <header>

          <figure>
              <img class="logo" src="images/logo-gbaf.png" alt="logo de gbaf" />
          </figure>

        <div class="nom">
<!-- code picto font awesome -->          
              <i class="fas fa-user"></i>
<!-- PHP -->
                <?php
                $nom_prenom = 'Nom et Prénom';
                echo $nom_prenom;
                ?>
                <br />
                <?php
                $logout = 'Se déconnecter';
                echo $logout;
                ?>
        </div>
      </header>