<?php
    session_start();
    // Create connection
    include 'db.php';
    
    
    // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['delete'])) {
        delete($_POST['id']);
    }
    function delete($id) {
        global $conn;
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $_SESSION["success"] = "User deleted successfully";
        $stmt->close();
        $conn->close();
        header("Location: view.php");
    }


?>