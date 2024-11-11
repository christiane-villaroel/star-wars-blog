<!DOCTYPE html>
<html>
    <head>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">

        <!-- Component Scripts -->
        <script src="header.js" type="text/javascript" defer></script>
        <script src="components/banner.js" type="text/javascript" defer></script>
        <script src="components/footer.js" type="text/javascript" defer></script>
           
        <title>Star Wars Blog</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body id="posts-body">
       <banner-component class="banner"></banner-component>
       <header-component class="nav"></header-component>
        <main>
           <h2>Posts</h2>
           <div>
            <section class="blogs">
                <a href="blog-posts/blog-1.php" class="blogs blog-lists-link">
                    <img src="img/first-order-trooper.jpg" alt="first order trooper" class="posts-img">
                <div>
                    <h3>Star Wars Galaxy Edge Review</h3>
                    <p class="blog-text jura">Grand admiral thrawn princess leia c-3po jabba the hutt core worlds ahsoka tano republic protocol. </p>
                </div>
                </a>
           </section>
           <section class="blogs">
                <a href="" class="blogs blogs-lists-link">
                    <img src="img/sw-legos.jpg" alt="" class="posts-img">
                <div>
                    <h3>Best Lego Star Wars Collection</h3>
                    <p class="blog-text jura">Jango fett grand moff tarkin mid rim resistance new republic ezra bridger trade federation mace windu.</p>
                </div>
                </a>
            </section>
            <section class="blogs">
                <a href="" class="blogs blog-lists-link">
                    <img src="img/vador-helmet.jpg" alt="" class="posts-img">
                <div>
                    <h3>Original Vador Helmet Found</h3>
                    <p class="blog-text jura"> Galactic republic jar jar binks new republic ezra bridger darth vader ben solo kylo ren hera syndulla.</p>
                </div>
                </a>
            </section>
           </div>
        </main>
        <footer-component class="footer"></footer-component>
        <script src="scripts.js">

        </script>
    </body>
</html>