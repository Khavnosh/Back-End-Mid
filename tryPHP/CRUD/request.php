<?php 
    include("connect.php"); 

    if(isset($_POST['create'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $publish_date = $_POST['publish_date'];
        $price = $_POST['price'];
        $pages = $_POST['pages'];

        $query = "INSERT INTO books(title, author, publisher, publish_date, price, pages) 
        VALUES('$title', '$author', $publisher, '$publish_date', '$price', '$pages')";

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
        $publish_date = $_POST['publish_date'];
        $price = $_POST['price'];
        $pages = $_POST['pages'];

        $query = "UPDATE books SET title='$title', author='$author', publisher='$publisher', 
        publish_date='$publish_date', price='$price', pages='$pages' WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }
?>