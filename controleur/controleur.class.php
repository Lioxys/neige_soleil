<?php
	require_once ("modele/modele.class.php"); 
	class Controleur {
		private $unModele ; 

		public function __construct (){
			//instanciation de la Logement Modele
			$this->unModele = new Modele (); 
		}
		/*********** Gestion des Logements *********/
		
		public function insertClient ($tab){
			//plus tard : controle des données avant insertion
			$this->unModele->insertClient($tab); 
		}
		public function selectAllLogements(){
            return $this->unModele->selectAllLogements();
        }
        public function selectLikeLogements($filtre){
            return $this->unModele->selectLikeLogements($filtre);
        }
        public function selectWhereLogement($idlogement){
            return $this->unModele->selectWhereLogement($idlogement);
        }
		/************ connexion **********/
		public function verifConnexion ($nom, $prenom){
			return $this->unModele->verifConnexion ($nom, $prenom);
		}

		/********** Securite des données ********/
		public function testVide ($tab){
			$vide = false ; 
			foreach($tab as $valeur){

				if ($valeur == ""){
					$vide = true; 
					break;
				}
			}
			return $vide ;
		}
	}
?>





