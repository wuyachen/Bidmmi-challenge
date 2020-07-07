<?php
$data_file = fopen("example.txt","w");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$text = $username . " " . $password . " " . " " . $email;

fwrite($data_file, $text);
fclose($data_file);
?>