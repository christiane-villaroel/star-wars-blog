<?php
    session_start();
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include INCLUDES_PATH . 'linkHead.php'; ?>
    <link rel="stylesheet" href="/styles.css">
    <title>Add Posts</title>
</head>
<body>
    <?php include INCLUDES_PATH . 'banner.html'; ?> 
    <?php include INCLUDES_PATH . 'nav.php'; ?> 

    <main>
        <h2 class="days-one">Create a New Post</h2>
        
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
            <?php unset($_SESSION['error']);?>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p class="success-message"><?php echo $success; ?></p>
            <?php unset($_SESSION['success']);?>
        <?php endif; ?>

        <form action="create-post-process.php" method="POST" class="jura">
            <input type="text" name="user_id" value="<?php echo $_SESSION['user_id'];?>" hidden>
            <label for="title">Post Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter the post title" required>

            <label for="body">Post Content:</label>
            <textarea id="body" name="body" placeholder="Write your post here..." rows="10" required></textarea>

            <button type="submit" class="submit-btn">Create Post</button>
        </form>
    </main>
    <?php include INCLUDES_PATH . 'footer.html'; ?>
    <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
</body>
</html>