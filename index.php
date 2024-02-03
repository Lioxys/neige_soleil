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
  
</head>
<body>
<header class ="header">
<a href="#" class="logo">Neige et soleil </a>
<nav class="navbar">
<a href="index.php?page=2" >Acceuil</a>
<a href="index.php?page=5" >Se  connecter</a>
<a href="index.php?page=4" >S'inscrire</a>
<a href="index.php?page=3" >Nos logement</a>
<a href="#" >Contactez nous</a>
</header>
<center>
    <?php 

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page=1;
    }
    switch($page){
        //case 1: require_once("home.php"); break;
        case 4: require_once("gestion_client.php"); break;
        case 5: require_once("gestion_connexion.php"); break;
        case 6: session_destroy(); unset($_SESSION['email']);header("Location: index.php");break;
        default: require_once("erreur.php"); break;
    }
    ?>
</center>
</body>
</html>