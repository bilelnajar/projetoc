<!-- En tête -->
<header>

  <figure>
   <a href="index.php"> <img class="logo" src="images/logo-gbaf.png" alt="logo de gbaf" /></a>
 </figure>
 
 <?php if (isset($_SESSION['nom'])) {?>
  <div class="nom">
    <!-- code picto font awesome -->          
    <i class="fas fa-user"></i>
    <!-- PHP -->
    <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>
    <br />
    <a href="logout.php">Se déconnecter</a>;
  <?php } ?>
</div>
</header>