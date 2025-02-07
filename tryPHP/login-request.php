<?php 
    include("connect.php");
    $query = "SELECT * FROM user_data";
    $result = mysqli_query($conn, $query);
    
    
?>