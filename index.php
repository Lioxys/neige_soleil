<?php
    session_start();
    require_once("controleur/controleur.class.php");
    //instanciation de la classe Controleur
    $unControleur = new Controleur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neige et Soleil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<script src="js/script.js"></script>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" height="75px" width="100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=2">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=3">Nos logements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=4">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=5">Se connecter </a>
        </li>
    </div>
  </div>
</nav>
<center>
    <?php 

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page=1;
    }
    switch($page){
        //case 1: require_once("home.php"); break;
        case 3: require_once("gestion_logement.php"); break;
        case 4: require_once("gestion_client.php"); break;
        case 5: require_once("gestion_connexion.php"); break;
        case 6: session_destroy(); unset($_SESSION['email']);header("Location: index.php");break;
        default: require_once("erreur.php"); break;
    }
    ?>
</center>
</body>
</html>