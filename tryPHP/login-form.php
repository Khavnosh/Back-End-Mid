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
            <a href="index.php" class="btn btn-secondary d-flex p-2 h-25 back-button">Back</a>
        </div>

        <form action="request.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">
                    Username
                </label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">
                    Password
                </label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <input type="submit" value="Add" name="login" class="btn btn-success">
        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<style>
/* .back_button{
    width: 100px;
} */
</style>
