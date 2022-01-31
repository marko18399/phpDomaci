<?php
    
    
    class Kontakt{
        public $id;   
        public $ime;   
        public $prezime;   
        public $telefon;   
        public $mesto;
        public $rodjendan;   
        public $fakultet;
        
        public function __construct($id=null, $ime=null, $prezime=null, $telefon=null, $mesto=null, $rodjendan = null, $fakultet = null)
        {
            $this->id = $id;
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->telefon = $telefon;
            $this->mesto = $mesto;
            $this->rodjendan=$rodjendan;
            $this->fakultet = $fakultet;
        }


        public static function getAll(mysqli $conn){
            $query = "SELECT * FROM stavke";
            return $conn->query($query);
        }

        public static function getById($id,mysqli $conn){
            $query = "SELECT * FROM stavke WHERE id=$id";

            $myObj=array();
            if($msqlObj = $conn->query($query)){
                while($red = $msqlObj->fetch_array(1)){
                    $myObj[]=$red;
                }
            }
            return $myObj;
        }

        public function deleteById(mysqli $conn){
            $query="DELETE FROM stavke where id=$this->id";
            return $conn->query($query);
        }

        public function update($id,mysqli $conn){
            $query="UPDATE stavke SET ime = $this->ime, prezime=$this->prezime, telefon=$this->telefon, mesto=$this->mesto, rodjendan=$this->rodjendan, fakultet=$this->fakultet WHERE id=$id";
            return $conn->query($query);
        }

        public static function add(Kontakt $kontakt,mysqli $conn){
            $query = "INSERT INTO stavke(ime,prezime,telefon,mesto,rodjendan,fakultet) VALUES ('$kontakt->ime','$kontakt->prezime','$kontakt->telefon','$kontakt->mesto','$kontakt->rodjendan','$kontakt->fakultet')";
            return $conn->query($query);
        }

    }



?>