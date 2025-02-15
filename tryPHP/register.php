<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <form action="CRUD/request.php" method="post" class="form" autocomplete="off">
                <h1>Registration</h1>
                <p>Please fill in this form to create an account.</p><br>
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
                <div class="form-group">
                    <div class="pw-wrap">
                        <input type="password" name="repassword" id="repassword" required minlength="8" placeholder="Repeat Password">
                        <img src="./CRUD/assets/pwEnabled.svg" alt="Show Password" id="eyeicon2">
                    </div>
                </div>
                <hr><br>
                <p>By creating an account you agree to our <u>Terms & Privacy</u>.</p><br>
                <button type="submit" name="register" class="button">Register</button>
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

                    let eyeicon2 = document.getElementById('eyeicon2');
                    let repassword = document.getElementById('repassword');

                    eyeicon2.onclick = function() {
                        if(repassword.type == "password") {
                            repassword.type = "text";
                            eyeicon2.src = "./CRUD/assets/pwHidden.svg";
                        } else {
                            repassword.type = "password";
                            eyeicon2.src = "./CRUD/assets/pwEnabled.svg";
                        }
                    }
                </script>
            </form>
        </div>
    <?php
    //Get information if this page was accessed from a failed request
        session_start();
        if(isset(($_SESSION['invalid-data'])) == 'Yes'){
            $_SESSION['invalid-data'] = 'No';
            $msg = "Passwords do not match, Please Try Again.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
  </body>
</html>