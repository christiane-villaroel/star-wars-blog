<?php
    session_start();

    if (isset($_POST['login'])) {
        // Create connection
        $servername = "localhost";
        $username = "root";
        $password = "BHJoV3XA48B#";
        $dbname = "blog";
        
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        

        $sql = "SELECT username, password FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["success"] = "Login successful";
            header("Location: login.php");
        } else {
            $_SESSION["error"] = "Invalid username or email";
            header("Location: login.php");
        }
        mysqli_close($conn); 
    } 
?>