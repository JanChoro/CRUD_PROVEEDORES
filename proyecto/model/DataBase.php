<?php

    class DataBase{
        private $host = "localhost";
        private $dbname = "oriental_soft";
        private $username = "root";
        private $password = "gamembers7341045";
        private $charset="utf8";

        public function connect(){
            $conn = "mysql:host=$this->host;dbname=$this->dbname; charset=$this->charset";
    
            $option = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
    
            try {
                
                $pdo = new PDO($conn, $this->username, $this->password, $option);
                return $pdo;
    
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
                die();
            }
    
        }
    } 

?>
