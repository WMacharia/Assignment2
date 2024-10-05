<?php
require "load.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO userinfo (email, FullName, username, password) VALUES ('$email', '$fullname', '$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "USER REGISTERED SUCCESFULLY!"; 
}      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
?>