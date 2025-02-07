<?php 
    include("connect.php"); 

    if(isset($_GET['login'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $passwordfromdb;

        // $query = "SELECT username $passwordfromdb = 'password' WHERE username = $username";
        $query = "SELECT username, password, id FROM user_data";
        $result = mysqli_query($conn, $query);
        
        // if($result){
        //     $passwordfromdb = mysqli_fetch_array($result);
        //     echo($passwordfromdb);
        // }

        // if ($password == $passwordfromdb) {
        //     echo("Login Succesful");
        // } else {
        //     die("Something went wrong");
        // }

        while($row = mysqli_fetch_array($result)) { 
            ?>
            <tr>
                <?php
                    if($username == $row['username'] && $password == $row['password']){
                        echo("Login Success");
                        session_start();
                        $_SESSION["USERNAME"] = $username;
                        $_SESSION["USER_ID"] = $row['id'];
                        header("Location: index.php");
                    }
                ?>
            </tr>
            <?php 
                    }
                ?>
            <?php 
    }

    if(isset($_POST['create'])) {    
        include("index.php"); 
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        // $publish_date = $_POST['publish_date'];
        // $price = $_POST['price'];
        $num_of_page = $_POST['num_of_page'];
        $user_id_to_input = $user_id;
        $query = "INSERT INTO books(title, author, publisher, num_of_page, user_id) 
        VALUES('$title', '$author', '$publisher', '$num_of_page', '$user_id_to_input')";

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