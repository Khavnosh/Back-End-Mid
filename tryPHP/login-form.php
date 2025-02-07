<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h1>Login</h1>
        </div>
        <form action="CRUD/request.php" method="get">
            <div class="mb-3">
                <label for="username" class="form-label">
                    Username
                </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <input type="submit" value="Login" name="login" class="btn btn-success">
        </form>
    </div>
    <?php
    //Get information if this page was accessed from a failed request
        session_start();
        if(($_SESSION['invalid-data']) == 'Yes'){
            $_SESSION['invalid-data'] = 'No';
            $msg = "Username or Password Invalid, Please Try Again.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>