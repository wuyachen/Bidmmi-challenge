<?php
$data_file = fopen("example.txt","w");
if (!empty($username) || !empty($password) || !empty($email)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $text = $username . " " . $password . " " . " " . $email;
    fwrite($data_file, $text);
    fclose($data_file);
    echo" New record created sucessfully";}
else{
    echo "All field are required";
    die();
}

?>