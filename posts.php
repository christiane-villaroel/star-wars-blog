<?php
    session_start();
    include_once 'config.php';
    
    function searchResult() {
        global $conn;
        $keyword = htmlspecialchars($_POST['search']);
        $query = "SELECT title, body FROM posts WHERE title LIKE '%$keyword%' OR body LIKE '%$keyword%'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $previewArticle = substr($post["body"], 0, 100);
                echo '
                <section class="blogs">
                    <a href="" class="blogs blogs-lists-link">
                        <img src="img/sw-legos.jpg" alt="" class="posts-img">
                        <div>
                            <h3>' . $post["title"] . '</h3>
                            <p class="blog-text jura">' . $previewArticle . '</p>
                        </div>
                    </a>
                </section>';
            }
        }
        else {
            echo"<p>No Results found</p>";
        }
    }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include INCLUDES_PATH . 'linkHead.php'; ?>
        <link rel="stylesheet" href="/styles.css">
        <title>Star Wars Blog</title>
     
    </head>
    <body id="posts-body">
        <?php include INCLUDES_PATH . 'banner.html'; ?> 
        <?php include INCLUDES_PATH . 'nav.php'; ?> 
        <main>
           <h2 class="days-one" >Posts</h2>
           <div>
                <form method="post">
                   <input type="search" name="search" id="search" placeholder="search"> 
                   <button type="submit" name="search-btn">Search</button>
                </form>
           </div>

           <div id="posts-container">
            <?php include INCLUDES_PATH . 'dashboard-menu.php';?>
           <Section class="post-lists">
                <?php if($_SERVER["REQUEST_METHOD"] === 'POST'):?> 
                     <?php 
                         if(isset($post["search"])){
                             searchResult();
                         }
                     ?>
                <?php endif?>
                <?php 
                     $sql = "SELECT id, title, body FROM posts ORDER BY created_at LIMIT 3;";
                     $result = mysqli_query($conn,$sql); 
                     if(mysqli_num_rows($result)>0):?>
                         <?php while($post = mysqli_fetch_assoc($result)):?>
                             <?php
                                 $previewArticle = substr($post["body"],0,100);
                             ?>
                             <section class="blogs">
                                 <a class="blog-link" href='article.php?id=<?php echo $post['id'];?>'>
                                     <h3 class="days-one"><?php echo $post["title"];?></h3>
                                     <p class="jura"><?php echo $previewArticle; ?></p>
                                     <span class="jura">Read more...</span>
                                 </a>
                             </section>
                         <?php endwhile;?>
                <?php endif;?>
           </Section>
           </div>
        </main>
        <?php include INCLUDES_PATH . 'footer.html'; ?>
        <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
    </body>
</html>