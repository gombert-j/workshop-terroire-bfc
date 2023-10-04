<?php
    class BDD{

        private $mysqli;
        private $user;
        private $mdp;
        function __construct($user, $mdp)
        {
            $this->user = $user;
            $this->mdp = $mdp;

            $this->mysqli = new mysqli("localhost", $this->user, $this->mdp, "projetsite");
            if ($this->mysqli->connect_error) {
                die("Échec de la connexion à la base de données : " . $this->mysqli->connect_error);
            }       
        }

        function request($request){
            $result = $this->mysqli->query($request);

            if ($result) {
                $data = array();
        
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
        
                $json_data = json_encode($data);
        
                return $json_data;
            } else {
                echo "Erreur lors de l'exécution de la requête : " . $this->mysqli->error;
            }
        }

        function close(){
            $this->mysqli->close();
        }
    }  


?>