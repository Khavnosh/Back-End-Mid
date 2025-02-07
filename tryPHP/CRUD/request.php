<?php 
    include("connect.php"); 

    if(isset($_POST['create'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        // $publish_date = $_POST['publish_date'];
        // $price = $_POST['price'];
        $num_of_page = $_POST['num_of_page'];
        // $user_id = 

        $query = "INSERT INTO books(title, author, publisher, publish_date, price, num_of_page) 
        VALUES('$title', '$author', '$publisher', '$num_of_page')";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }

    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        // $publish_date = $_POST['publish_date'];
        // $price = $_POST['price'];
        $num_of_page = $_POST['num_of_page'];
        

        $query = "UPDATE books SET title='$title', author='$author', publisher='$publisher', num_of_page='$num_of_page' WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }
?>