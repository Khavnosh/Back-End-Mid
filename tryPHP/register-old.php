<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post" action="CRUD/request.php" class="registration"> 
            <h1>Registration</h1>
            <p>Please fill in this form to create an account.</p><br>
            <hr><br>
            <div class="form-group">
                <input type="text" placeholder="Enter Username" name="username" id="username">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name="password" id="password" required minlength="8">
            </div>
            <div class="form-group">       
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required minlength="8">
            </div>
            <hr><br>
            <p>By creating an account you agree to our Terms & Privacy.</p><br>
            <button type="submit" class="register">Register</button>
        </form>
        <p class="haveacc">Already have an account? <a href="login-form.php">Sign in</a>.</p>
    </div>
</body>
</html>
<?php

    $dbHost = 'localhost';
    $dbUser = 'bncc_backend_group';
    $dbPass = 'bncc01244';
    $dbName = 'books_data';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration logic
// if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    // $email = $_POST["email"];
    $sql2 = "SELECT * FROM user_data";
    // $sql = "INSERT INTO user_data (username, id, password) VALUES (?, ?, ?)";
    // $stmt = $conn->prepare($sql);
    $user_id_largest = 0;
    $result = mysqli_query($conn, $sql2);
    while($row = mysqli_fetch_array($result)) { 
        if($row['id'] > $user_id_largest){
            $user_id_largest = $row['id'];
        }
    }
    $user_id_to_write = $user_id_largest + 1;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO user_data(id, username, password) 
    VALUES('$user_id_to_write', '$username', '$password')";

//     if ($stmt === false) {
//         die("Error preparing statement: " . $conn->error);
//     }

//     $stmt->bind_param("sss", $user_id_to_write, $username, $password);

//     if ($stmt->error) {
//         die("Error binding parameters: " . $stmt->error);
//     }

//     $stmt->bind_param("sss", $username, $password);

//     if ($stmt->execute()) {
//         echo "Registration successful!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $stmt->close();
// }
// }
$conn->close();
header("Location: login-form.php");
?>

