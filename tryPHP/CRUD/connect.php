<?php 
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
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