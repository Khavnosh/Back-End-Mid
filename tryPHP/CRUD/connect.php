<?php 
    $dbHost = "localhost";
    $dbUser = "bncc_backend_group";
    $dbPass = "bncc01244";
    $dbName = "books_data";

    $conn = mysqli_connect(
        $dbHost, 
        $dbUser, 
        $dbPass, 
        $dbName
    );
    
    if (!$conn) {
        die("Connecting to database has failed");
    } 
?>