<?php
	require_once ("modele/modele.class.php"); 
	class Controleur {
		private $unModele ; 

		public function __construct (){
			//instanciation de la Logement Modele
			$this->unModele = new Modele (); 
		}



public function reserverLogement($idhabitation, $iduser) {
			// Vérification de la disponibilité du logement
			$logement = $this->unModele->selectWhereLogement($idhabitation);
			if($logement['etat'] == 'disponible') {
				// Insertion de la réservation dans la base de données
				$reservation = array(
					'prix' => rand(50, 200), 
					'nb_personne' => rand(1, 10), 
					'iduser' => $iduser,
					'idhabitation' => $idhabitation
				);
				$this->unModele->insertReservation($reservation);
		
				// Mettre à jour l'état du logement en 'reserve'
				$this->unModele->updateEtatLogement($idhabitation, 'reserve');
		
				// Redirection vers la page de confirmation ou autre
				header("Location: index.php?page=11");
				exit; // Assurez-vous de terminer l'exécution du script après la redirection
			} else {
				// Logement déjà réservé, gestion de cette situation
				// Par exemple, afficher un message d'erreur à l'utilisateur
				echo "Ce logement est déjà réservé.";
			}
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
		/*********** Gestion des Réservation *********/

		

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





