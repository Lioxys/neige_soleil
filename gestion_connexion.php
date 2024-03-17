

<?php 
    require_once("modele/modele.class.php");
    require_once("vue/vue_connexion.php");
    if (isset($_POST['connexion'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $unUser = $unControleur->verifConnexion($nom, $prenom);
        if ($unUser != null){
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['role'] = $unUser['role'];
            var_dump($_SESSION);
            //j'actualise la page
            echo"<br> Tu es connecté";
            header("Location: index.php?page=2");
            exit();
        }else{
            echo "<br> Veuillez vérifier vos identifiants";
        }
    }
?>