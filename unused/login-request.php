<?php 
    include("connect.php");
    $query = "SELECT * FROM user_data";
    $result = mysqli_query($conn, $query);
    
    if (isset($_GET['id'])) {
        include("connect.php");
        $id = $_GET['id'];
        $query = "DELETE FROM books WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header('Location: index.php');
        } else {
            die("Something went wrong");
        }
    }
?>