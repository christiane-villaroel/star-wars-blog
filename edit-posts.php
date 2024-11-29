<?php
     session_start();
     include_once 'config.php';
    /*  $sql = "SELECT id FROM users where username =". $_SESSION['username'] ;
     $result = mysqli_query($conn,$sql);  
     if(mysqli_num_rows($result)>0){
         while ($row = mysqli_fetch_assoc($result)) {
             $_SESSION['id']= $row['id'];
         }
     } */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include INCLUDES_PATH . 'linkHead.php'; ?>
    <link rel="stylesheet" href="/styles.css">
    <title>Edit</title>
</head>
<body>
    <?php include INCLUDES_PATH . 'banner.html'; ?> 
    <?php include INCLUDES_PATH . 'nav.php'; ?> 
    <main>
        <?php include INCLUDES_PATH .'dashboard-menu.php';?>
        <h2><?php echo $_SESSION['username']; ?></h2>
        <?php
            $sql = "SELECT id, title, body FROM posts WHERE author_id = '$_SESSION[id]' ORDER BY created_at LIMIT 3;";
            $result = $conn->query($sql);
            echo $row['id'];
            if($result->mysqli_num_rows >0 ){
                while($row = $result->mysqli_fetch_assoc()){
                    "<section class='blogs'>
                        <a class='blog-link' href='article.php?id=<?php echo ?>'>
                        </a>
                    </section>";
                };
            }
        ?>

    </main>
    <?php include INCLUDES_PATH . 'footer.html'; ?>
        <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
</body>
</html>