<?php
session_start();
include_once 'config.php'; // Load the config file
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
<?php include INCLUDES_PATH . 'linkHead.php'; ?>
<link rel="stylesheet" href="/styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <?php include INCLUDES_PATH . 'banner.html'; ?> 
    <?php include INCLUDES_PATH . 'nav.php'; ?> 
    
    <main class="dashboard-main">
       <div class="dashboard-container">
            <aside class="menu">
                <h3>Menu</h3>
                <ul class="jura">
                    <li><a href="create-post.php">Create a New Post</a></li>
                    <li><a href="posts.php">View All Posts</a></li>
                    <li><a href="profile.php">Profile Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </aside>
            <section class="content jura">
                <h class="days-one">Welcome, <?php echo htmlspecialchars($username); ?></h2>
                <p class="jura">Here is your profile Information:</p>
                <ul class="jura">
                    <li><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></li>
                </ul>
            </section>
       </div>
    </main>

    <?php include INCLUDES_PATH . 'footer.html'; ?>
    <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
</body>
</html>
