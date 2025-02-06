<?php

    session_start();
    $_SESSION["TASKLIST"][] = $_POST['task-input'];
    header("Location: todo.php");

?>