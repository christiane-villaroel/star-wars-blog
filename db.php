<?php
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
?>