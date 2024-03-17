

<?php 
    require_once("modele/modele.class.php");

    if (isset($_POST['Filtrer'])){
        $filtre = $_POST['filtre'];
        $lesLogements = $unControleur->selectLikeLogements($filtre);
    }else{
        $lesLogements = $unControleur->selectAllLogements();
    }
    require_once("vue/vue_select_logement.php")

?>