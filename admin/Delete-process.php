<?php
    session_start();
    // Create connection
    include '/xampp/htdocs/Blog/star-wars-blog/includes/db.php';
    
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
        header("Location: admin/view.php");
        exit();
    }


?>