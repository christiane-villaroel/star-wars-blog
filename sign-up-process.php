<?php
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
    // Create connection
   
    $username = $_POST['new-user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat = $_POST['repeat'];
    
   
    
   
    $sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["error"] = "User already exists";
        header("Location: sign-up.php");
    } else
    {
        $sql = "INSERT INTO users (username, email, password,userType)
        VALUES ('$username', '$email', '$password','blogger')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION["success"] = "New user account created successfully";
            header("Location: login.php");
        } else {
            $_SESSION["error"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("Location: sign-up.php");
        }
    }
    mysqli_close($conn);
}


?>