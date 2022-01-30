<?php

    $host = "localhost";
    $database = "imenik";
    $user = "root";
    $pass = "";


    $conn= new mysqli($host,$user,$pass,$database);


    if($conn -> connect_errno){
        exit("Neuspesna konekcija sa bazom!");
    }

?>