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

        if (password_verify($password, $hashed_password_from_db)) {
            header("Location: signin.php");
            exit;  // Important to call exit after header to stop further code execution
        } else {
            header("Location: showusers.php");  // Optionally redirect to login with an error
            exit;
        }
        
    } else {
        echo "User not found.";
        header("Location: login.php?error=usernotfound");  // Error case
        exit;
    }
}
?>
