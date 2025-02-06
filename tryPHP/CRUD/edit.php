<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h1>Edit Books</h1>

            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
        <?php 
            include("connect.php");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($result);
            }
        ?>

        <form action="request.php" method="post">
            <!-- <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $data['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="studio" class="form-label">
                    Studio
                </label>
                <input type="text" name="studio" id="studio" class="form-control" value="<?php echo $data['studio'] ?>">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">
                    Duration
                </label>
                <input type="number" name="duration" id="duration" class="form-control" value="<?php echo $data['duration'] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="submit" value="Add" name="edit" class="btn btn-success"> -->
            <div class="mb-3">
                <label for="title" class="form-label">
                    Book Title
                </label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="studio" class="form-label">
                    Author
                </label>
                <input type="text" name="studio" id="studio" class="form-control">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">
                    Publisher
                </label>
                <input type="text" name="duration" id="duration" class="form-control">
            </div>
            <div class="mb-3">
                <label for="publish_date" class="form-label">
                    Publish Date
                </label>
                <input type="date" name="duration" id="duration" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">
                    Price (IDR)
                </label>
                <input type="number" name="duration" id="duration" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pages" class="form-label">
                    Pages
                </label>
                <input type="number" name="duration" id="duration" class="form-control">
            </div>
            <input type="submit" value="Add" name="create" class="btn btn-success">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
