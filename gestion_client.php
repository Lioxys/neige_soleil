<h2>Créer votre compte</h2>

<?php 
    require_once("modele/modele.class.php");
    require_once("vue/vue_insert_client.php");
    if (isset($_POST['Valider'])){
        //verification des données
        if ($unControleur->testVide($_POST)){
            echo "<br> Veuillez remplir les champs.";
        }else{
        //insertion de la nouvelle classe dans la BDD
            $unControleur->insertClient($_POST);
            echo '<br> Création de votre compte validée';
        }
    }
?>