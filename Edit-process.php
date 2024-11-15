<?php
    include 'db.php';
    session_start();
 
    

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="update-process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label>Username: </label>
        <input placeholder="Enter username" type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required><br>
        <label>Email:</label>
        <input placeholder="Enter email" type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
        <label>Password:</label>
        <input placeholder="Enter password" type="password" name="password" required><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>