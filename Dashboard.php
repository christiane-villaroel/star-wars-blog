<?php
session_start();
include 'db.php'; 
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
} 

// User information from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <?php include 'linkHead.php'?>
</head>
<body>
    <banner-component class="banner"></banner-component>
    <header-component class="nav"></header-component>
    
    <main class="dashboard-main">
        <h2 class="days-one">Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        
        <section class="dashboard-links jura">
            <p>Select an option below:</p>
            <ul>
                <li><a href="create-post.php">Create a New Post</a></li>
                <li><a href="posts.php">View All Posts</a></li>
                <li><a href="profile.php">Profile Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </section>
    </main>

    <footer-component class="footer"></footer-component>
</body>
</html>
