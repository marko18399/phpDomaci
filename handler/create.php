<?php

require "../includes/database.php";
require "../includes/kontakti.php";

if(isset($_POST['ime']) && isset($_POST['prezime']) 
&& isset($_POST['telefon']) && isset($_POST['mesto'])
&& isset($_POST['rodjendan']) && isset($_POST['fakultet'])){
    $kontakt = new Kontakt(null,$_POST['ime'],$_POST['prezime'],$_POST['telefon'],$_POST['mesto'],$_POST['rodjendan'],$_POST['fakultet'] );
    $status = Kontakt::add($kontakt, $conn);

    if($status){
        echo 'Uspesno dodat kontakt u imenik';
    }else{
        echo $status;
        echo "Nije dodat kontakt";
    }
}


?>