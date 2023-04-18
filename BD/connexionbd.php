<?php
    //Déclaration d'une nouvelle classe
    class connexionbd{
        private $host = 'localhost';
        private $name = 'legende 21';
        private $user = 'root';
        private $pass = 'root';
        private $connexion;

        function __construct($host = null, $name = null, $user = null, $pass = null){
            if($host !=null){
                $this->host = $host;
                $this->name = $name;
                $this->user = $user;
                $this->pass = $pass;
            }
            try{
                $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            }catch (PDOException $e){
                echo 'Erreur : Impossible de se connecter à la BDD !';
                die();
            }

        }

        public function query($sql, $data =array()){
            $req = $this->connexion->prepare($sql);
            $req->execute($data);

            return $req;
        }

        public function insert($sql, $data = array()){
            $req = $this->connexion->prepare($sql);
            $req->execute($data);
        }


    }

    $DB = new connexionbd;

?>
