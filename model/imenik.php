<?php
    include "../broker.php";
    class Imenik{

        public $id;
        public $ime;
        public $prezime;
        public $telefon;
        public $mesto;
        public $rodjendan;
        public $fakultet;
        
        public function __construct($id=null,$ime=null,$prezime=null,$telefon=null,$mesto=null,$rodjendan=null,$fakultet=null){
            $this->id=$id;
            $this->ime=$ime;
            $this->prezime=$prezime;
            $this->telefon=$telefon;
            $this->mesto=$mesto;
            $this->rodjendan=$rodjendan;
            $this->fakultet=$fakultet;
        }

        public function ret(){
            return $this->conn;
        }

        #prikazi sve - getAll
        #getById
        #deleteById
        #update
        #addNew
    }


?>