<?php
    session_start();
    $filePath = "/xampp/htdocs/Blog/star-wars-blog/includes/";
    include ''. $filePath . 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Posts</title>
</head>
<body>
<?php include ''.$filePath.'banner.html';?>
<nav id="nav-container">
    <ul class="nav-menu">
        <li id="nav-login" class="link-containers jura">
            <a href="login.php"> <img id="login-icon" src="img/person-fill-svgrepo-com.svg"> Login </a>
        </li>
        <li class="link-containers jura">
            <a href="../star-wars-blog/sign-up.php"> Sign-Up</a>
        </li>
        <li class="link-containers jura">
            <a href="homepage.php">Welcome</a>
        </li>
        <li class="link-containers jura">
            <a href="posts.php">Posts</a>
        </li>
        <li>
            <a href="Dashboard.php">Home</a>
        </li>
    </ul>
</nav>
<main>
        <h2 class="days-one">Create a New Post</h2>
        
       
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p class="success-message"><?php echo $success; ?></p>
        <?php endif; ?>

        <form action="create-post.php" method="POST" class="jura">
            <label for="title">Post Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter the post title" required>

            <label for="body">Post Content:</label>
            <textarea id="body" name="body" placeholder="Write your post here..." rows="10" required></textarea>

            <button type="submit" class="submit-btn">Create Post</button>
        </form>
    </main>
    <?php include ''.$filepath . 'db.php'?>
</body>
</html>