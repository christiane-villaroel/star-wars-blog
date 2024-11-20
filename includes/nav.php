<nav id="nav-container">
    <ul class="nav-menu">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Navigation for signed-in users -->
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- Navigation for non-signed-in users -->
            <li><a href="login.php">Login</a></li>
            <li><a href="sign-up.php">Sign Up</a></li>
            <li><a href="home.php">Home</a></li>
        <?php endif; ?>
    </ul>
</nav>

