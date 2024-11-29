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
            <?php include INCLUDES_PATH .'dashboard-menu';?>
            <section class="content jura">
                <?php
                    $sql = "SELECT title,body,author_id FROM posts WHERE id =" . $_GET['id'];
                    $result = mysqli_query($conn,$sql);
                    if($_GET['id']):?>
                        <?php if(mysqli_num_rows($result)>0):?>
                            <?php while($row = mysqli_fetch_assoc($result)):?>
                                <div>
                                    <h2 class="days-one"><?php echo $row['title'];?></h2>
                                    <p class="jura"><?php echo $row['body'];?></p>
                                </div>
                            <?php endwhile;?>
                        <?php endif?>
                <?php endif;?>
            
            </section>
       </div>
    </main>

    <?php include INCLUDES_PATH . 'footer.html'; ?>
    <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
</body>
</html>
