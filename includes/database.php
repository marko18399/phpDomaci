<?php

    $host = "localhost";
    $db = "imenik";
    $user = "root";
    $pass = "";

    $conn = new mysqli($host,$user,$pass,$db);


    if ($conn->connect_errno){
    exit("Neuspesna konekcija:");
    }

?>