<?php 
    require_once("modele/modele.class.php");

    if (isset($_POST['Filtrer'])){
        $filtre = $_POST['filtre'];
        $lesLogements = $unControleur->selectLikeLogements($filtre);
    } else {
        $lesLogements = $unControleur->selectAllLogements();
    }

    
    if (isset($_POST['Reserver'])) {
        
        if(isset($_SESSION['role']) && $_SESSION['role'] == "client") {
       
            $idhabitation = $_POST['idhabitation'];
            
            $iduser = $_SESSION['iduser'];
        
            $unControleur->reserverLogement($idhabitation, $iduser);
        } else {
            // Redirection vers la page de connexion si l'utilisateur n'est pas connecté en tant que client
            header("Location: page_connexion.php");
            exit;
        }
    }

    require_once("vue/vue_select_logement.php");
?>
