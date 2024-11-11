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
        <link rel="stylesheet" type="text/css" href="../styles.css">
    </head>
    <body id="blogs-body">
        <banner-component class="banner"></banner-component>
        <header-component class="nav"></header-component>
        <main>
           <div id="blog-container" class="main-content-container">
                <h2 class="days-one">Star Wars Galaxy Edge Review</h2>
                <img class="blogs-img" src="/img/first-order-trooper.jpg" alt="first order trooper">
                <div id="article-content-container">
                 <p class="jura">
                    Jyn erso jedi qui-gon jinn luke skywalker protocol r2-d2 lando calrissian kanan jarrus.
                    Outer rim qui-gon jinn droid the force mace windu hera syndulla sith darth vader. Galactic
                    senate darth vader galactic republic kylo ren lightsaber yoda asajj ventress sabine wren.
                    Grand admiral thrawn lightsaber luke skywalker galactic republic jedi wookie chewbacca
                    clone wars. Luke skywalker kanan jarrus greedo darth maul darth vader sabine wren boba 
                    fett outer rim.
                </p>
                <p class="jura">
                    Old republic greedo djin djarin yoda obi-wan kenobi republic kylo ren ahsoka tano. 
                    Jyn erso first order r2-d2 blue milk trade federation jango fett ben solo george lucas. 
                    Djin djarin anakin skywalker stormtrooper droid c-3po darth sidious savage opress 
                    han solo. Clone wars lando calrissian kanan jarrus rebellion darth vader ezra bridger
                    first order wookie. Clone wars rebellion resistance astromech galactic republic droid
                    stormtrooper the force.
                </p>
                <p class="jura">
                    Blaster qui-gon jinn han solo sabine wren c-3po mace windu lando calrissian ahsoka tano. Ahsoka tano darth 
                    vader darth maul savage opress wookie jedi bounty hunter droid. Galactic republic greedo empire blue milk asajj 
                    ventress rebellion wookie kylo ren. 
                    Resistance anakin skywalker clone wars jango 
                    fett blaster old republic sith ben solo. Anakin skywalker chewbacca ahsoka 
                    tano darth vader jabba the hutt trade federation ben solo galactic republic.
                </p>
            </div>
           </div>
        </main>
        <div class="comments jura">
            <h3>Comments</h3>
            <div id="comment-section">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla adipisci rem, repudiandae delectus consequuntur culpa accusantium, nesciunt, illum eveniet deserunt odit praesentium placeat recusandae ipsa aliquam blanditiis aperiam dolores laborum.</p>
            </div>
            <div>
                <form class="comment-form" name="commentForm">
                    <textarea id="textArea" placeholder="type comment here"></textarea>
                    <button type="button" id="comment-btn" onclick="comments()">Post Comment</button>
                </form>
            </div>
        </div>
        <aside id="articles-sidebar">
            <h5>More To Read</h5>
            <section class="articles one">
                <img class="aside-img" src="/img/sw-legos.jpg" alt="Lego Star Wars Set">
                <h6>Best Lego Star Wars Collection</h6>
            </section>
            <section class="articles two" >
                <img class="aside-img" src="/img/vador-helmet.jpg" alt="Darth Vador Helmet">
                <h6>Original Vador Helmet Found</h6>
            </section>
            <section class="articles three">
                <img class="aside-img" src="/img/first-order-trooper.jpg" alt="frist order trooper">
                <h6>Star Wars Galaxy Edge Review</h6>
            </section>
        </aside>
        <footer-component class="footer"></footer-component>
        <script src="/scripts.js">

        </script>
    </body>
</html>