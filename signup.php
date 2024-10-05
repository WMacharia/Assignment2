<?php
require "load.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO userinfo (email, FullName, username, password) VALUES ('$email', '$fullname', '$username', '$hashed_password')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;

    echo "<script>
        alert('User Verified');
        window.location.href = 'PHPMailer/mail.php';
        </script>"; 
}      
?>