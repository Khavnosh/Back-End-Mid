<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <form action="CRUD/request.php" method="get" class="form" autocomplete="off">
                <h1>Login</h1>
                <p>Please fill in your account information.</p><br>
                <hr><br>
                <div class="form-group">
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <div class="pw-wrap">
                        <input type="password" name="password" id="password" required minlength="8" placeholder="Enter Password">
                        <img src="./CRUD/assets/pwEnabled.svg" alt="Show Password" id="eyeicon">
                    </div>
                </div>
                <hr><br>
                <input type="submit" value="Login" name="login" class="button">
                <script>
                    let eyeicon = document.getElementById('eyeicon');
                    let password = document.getElementById('password');

                    eyeicon.onclick = function() {
                        if(password.type == "password") {
                            password.type = "text";
                            eyeicon.src = "./CRUD/assets/pwHidden.svg";
                        } else {
                            password.type = "password";
                            eyeicon.src = "./CRUD/assets/pwEnabled.svg";
                        }
                    }
                </script>
            </form>
        </div>
    <?php
    //Get information if this page was accessed from a failed request
        session_start();
        if($_SESSION['invalid-data'] == 'Yes'){
            $_SESSION['invalid-data'] = 'No';
            $msg = "Username or Password Invalid, Please Try Again.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
  </body>
</html>