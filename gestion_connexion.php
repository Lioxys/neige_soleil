

<?php 
    require_once("modele/modele.class.php");
    require_once("vue/vue_connexion.php");
    if (isset($_POST['connexion'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $unUser = $unControleur->verifConnexion($nom, $prenom);
    
        if ($unUser != null) {
            $_SESSION['iduser'] = $unUser['iduser'];
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['role'] = $unUser['role'];
            
            header("Location: index.php?page=2");
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
    
?>