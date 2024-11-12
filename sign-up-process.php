<?php
session_start();
if (isset($_POST['submit'])) {
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "BHJoV3XA48B#";
    $dbname = "blog";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $username = $_POST['new-user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat = $_POST['repeat'];
    
   
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["error"] = "User already exists";
        header("Location: sign-up.php");
    } else
    {
        $sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";
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