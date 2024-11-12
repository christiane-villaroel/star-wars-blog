<?php
include 'db.php';
session_start();
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];  // Re-hash password for security

    $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $username, $email, $password, $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "User updated successfully.";
        header("Location: view.php");
        exit;
    } else {
        echo "Error updating user: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
