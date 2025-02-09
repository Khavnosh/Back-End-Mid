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
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->error) {
        die("Error binding parameters: " . $stmt->error);
    }

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post" action="register.php" class="registration-form"> 
            <h1>Registration</h1>
            <p>Please fill in this form to create an account.</p><br>
            <hr><br>
            <div class="form-group">
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            </div>
            <div class="form-group">       
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            </div>
            <hr><br>
            <p>By creating an account you agree to our Terms & Privacy.</p><br>
            <button type="submit" class="registerbtn">Register</button>
        </form>
        <p class="haveacc">Already have an account? <a href="login-form.php">Sign in</a>.</p>
    </div>
</body>
</html>