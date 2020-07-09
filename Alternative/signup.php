<?php
    include_once "insert1.php";

    $username = $_POST['username'];
    $password = $_POST['pass_word'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (username, pass_word, email) VALUES('$username', '$password', '$email');";
    mysqli_query($conn, $sql);
    header("Location: ../index.php?signup=success");
?>