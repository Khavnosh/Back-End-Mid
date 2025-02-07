<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <a href="create.php" class="btn btn-primary">Add new Books</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Pages</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("connect.php");
                    session_start();
                    //Get data for books with current user's ID
                    if (isset($_SESSION['userid'])) {
                        $userid = $_SESSION['userid'];
                        $query = "SELECT * FROM books WHERE user_id = '$userid'";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)) { 
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['publisher'] ?></td>
                    <td><?php echo $row['num_of_page'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php 
                        }
                    } else {
                        echo "<tr><td colspan='6'>Please log in to view your books.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
