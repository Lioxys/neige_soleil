<?php 

    class Modele {
        private $unPDO;
        private $table;
        public function __construct(){
            try{
                $url ="mysql:host=localhost;dbname=neige_soleil_jv_24"; 
                $user = "root"; 
                $mdp = ""; 
                //instanciation de la classe PDO 
                $this->unPDO = new PDO($url, $user, $mdp);
                }
                catch (PDOException $exp){
                    echo "Erreur connexion BDD : ".$exp->getMessage (); 
                }
        }
        public function insertClient($tab){
            $requete = "insert into client values(null, :nom, :prenom, :adresse, :cp, :ville, :telephone);";
            $select = $this->unPDO->prepare ($requete);
            $donnees = array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":adresse"=>$tab['adresse'],
                ":cp"=>$tab['cp'],
                ":ville"=>$tab['ville'],
                ":telephone"=>$tab['telephone']
            );
            $select->execute($donnees);
        }
        public function verifConnexion($nom, $prenom){
            $requete="select * from user where nom=:nom and prenom=:prenom ;";
            $donnees=array(":nom"=>$nom, ":prenom"=>$prenom);
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            return $select->fetch();
        }
    }

?>