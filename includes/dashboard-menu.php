<?php

?>

<aside class="menu">
    <h3>Menu</h3>
    <ul class="jura">
        <li><a href="create-post.php">Create a New Post</a></li>
        <li><a href="edit-posts.php?id=<?php echo $_SESSION['user_id']?>">Edit Posts</a></li>
        <li><a href="posts.php">View All Posts</a></li>
        <li><a href="profile.php">Profile Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</aside>