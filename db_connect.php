<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "tutoriels_php";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if(!$conn){
        die("Connexion failed " . mysqli_connect_error());
    }
    //echo "Connected successfully!!!";

?>