<?php
session_start();

require "load.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT password FROM userinfo WHERE email = :email"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $_SESSION['email'] = $email; 

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashed_password_from_db = $row['password'];

        if (password_verify($hashed_password, $hashed_password_from_db)) {
            header("Location: index2.php");
        } else {
            header("Location: showusers.php");
        }
    } else {
        echo "Email not found.";
    }
}
?>
