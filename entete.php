<!-- En tête -->
      <header>

          <figure>
             <a href="index.php"> <img class="logo" src="images/logo-gbaf.png" alt="logo de gbaf" /></a>
          </figure>

        <div class="nom">
<!-- code picto font awesome -->          
              <i class="fas fa-user"></i>
<!-- PHP -->
                <?php
                echo $_POST['name'];
                ?>
                <br />
                <?php
                $logout = 'Se déconnecter';
                echo $logout;
                ?>
        </div>
      </header>