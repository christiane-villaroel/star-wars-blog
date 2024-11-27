
<nav id="nav-container">
    <ul class="nav-menu">
    <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="sign-up.php">Sign Up</a></li>
            <li><a href="homepage.php">Home</a></li>
        <?php endif; ?>
    </ul>
</nav>
