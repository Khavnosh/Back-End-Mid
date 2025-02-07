<?php

    $dbHost = "localhost";
    $dbUser = "bncc_backend_group";
    $dbPass = "bncc01244";
    $dbName = "books_data";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-between my-4">
            <h1>Register</h1>
        </div>
    <form method="post" action="register.php">
        <label for="username" class="form-label">Username:</label><br>
        <input type="text" id="username" name="username" required class="form-control"><br>
        <label for="email" class="form-label">Email:</label><br>
        <input type="email" id="email" name="email" required class="form-control"><br>
        <label for="password" class="form-label">Password:</label><br>
        <input type="password" id="password" name="password" required class="form-control"><br><br>
        <input type="submit" value="Register" class="btn btn-success">
    </form>
</body>
</html>