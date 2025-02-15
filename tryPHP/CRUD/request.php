<?php 
    include("connect.php"); 

    //Login Request
    if(isset($_GET['login'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $passwordfromdb;

        $query = "SELECT username, password, id FROM user_data";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($result)) { 
            ?>
            <tr>
                <?php
                    if($username == $row['username'] && $password == $row['password']){
                        echo("Login Success");
                        session_start();
                        $_SESSION["USERNAME"] = $username;
                        $_SESSION["userid"] = $row['id'];
                        $message = "Invalid username or password, please try again";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("Location: index.php");
                    } 
                    else {
                        session_start();
                        $_SESSION["invalid-data"] = 'Yes';
                        echo("Login Failed");
                        header("Location: ../login-form.php");
                    }
                ?>
            </tr>
            <?php 
                    }
                ?>
            <?php 
    }

    //Create Book Entry Request
    if(isset($_POST['create'])) {    
        include("index.php"); 
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
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


    //Edit entry request
    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $num_of_page = $_POST['num_of_page'];
        

        $query = "UPDATE books SET title='$title', author='$author', publisher='$publisher', num_of_page='$num_of_page' WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }

    if(!isset($_POST['register'])){
        echo(':(');
    }

    if(isset($_POST['register'])){

            $sql2 = "SELECT * FROM user_data";
            $user_id_largest = 0;
            $result = mysqli_query($conn, $sql2);
            while($row = mysqli_fetch_array($result)) { 
                if($row['id'] > $user_id_largest){
                    $user_id_largest = $row['id'];
                    echo($row['id']);
                }
            }
            echo('hi');
            $user_id_to_write = $user_id_largest + 1;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if($password == $repassword){
                echo("Login Success");
                $query = "INSERT INTO user_data(id, username, password) 
                VALUES('$user_id_to_write', '$username', '$password')";
                if (mysqli_query($conn, $query)) {
                        header("Location: index.php");
                    } else {
                        die("Something went wrong");
                    }
                header("Location: ../login-form.php");
            } 
            else {
                session_start();
                $_SESSION["invalid-data"] = 'Yes';
                echo("Register Failed, passwords does not match");
                header("Location: ../register.php");
            }

            $query = "INSERT INTO user_data(id, username, password) 
            VALUES('$user_id_to_write', '$username', '$password')";
        
    }
?>