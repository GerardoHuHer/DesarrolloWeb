<?php

    $host = "localhost";
    $user = "pantera";
    $password = "cualquiera";
    $dbname = "panteras";

    $conn = new mysqli($host, $user, $password, $dbname);

    if($conn ->connect_error){
        echo "Conection error: ".$conn->connect_error;
    } else{
        echo "Connected";
    }

?>
