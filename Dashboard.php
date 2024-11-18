<?php
session_start();
$filePath = "/xampp/htdocs/Blog/star-wars-blog/includes/";
include ''. $filePath . 'db.php';
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
    <?php include ''. $filePath . 'linkHead.php';?>
    <title>User Dashboard</title>
</head>
<body>
    <?php include ''.$filePath.'banner.html';?>
    <?php include ''.$filePath.'nav.php';?>
    
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

    <?php include $filePath.'footer.html';?>
</body>
</html>
