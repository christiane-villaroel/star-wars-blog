<?php
    session_start();
    include 'db.php';
    
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
      <?php include 'linkHead.php';?>
        <title>Star Wars Blog</title>
     
    </head>
    <body id="posts-body">
       <banner-component class="banner"></banner-component>
       <header-component class="nav"></header-component>
        <main>
           <h2>Posts</h2>
           <div>
                <form method="post">
                   <input type="search" name="search" id="search" placeholder="search"> 
                   <button type="submit" name="search-btn">Search</button>
                </form>
           </div>
          <?php
            if ($_SERVER["REQUEST_METHOD"] === 'POST') {
                if (isset($_POST["search"])) {
                    searchResult();
                }
            }

            else{
                $sql = "SELECT title, body FROM posts ORDER BY created_at LIMIT 3;";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result)>0){
                    while ($post = mysqli_fetch_assoc($result)) {
                        $previewArticle = substr($post["body"],0,100);
                        echo '
                        <section class="blogs">
                                <a href="" class="blogs blogs-lists-link">
                                <img src="img/sw-legos.jpg" alt="" class="posts-img">
                            <div>'.
                                '<h3>'. $post["title"] .'</h3>'.
                                '<p class="blog-text jura">'. $previewArticle .'</p>'.
                            '</div>
                            </a>
                        </section>';
                    }
                }
            }
          ?>  
           
        </main>
        <footer-component class="footer"></footer-component>
        <script src="scripts.js">

        </script>
    </body>
</html>