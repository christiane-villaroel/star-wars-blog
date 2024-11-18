<?php
    session_start();
    $filePath = "/xampp/htdocs/Blog/star-wars-blog/includes/";
    include ''. $filePath . 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include ''. $filePath . 'linkHead.php';?>
        <title>Star Wars Blog</title>
      
    </head>
    <body id="homepage" >
        <?php include ''.$filePath.'banner.html';?>
        <?php include ''.$filePath.'nav.php';?>

        <main>
            <div id="home-container" class="main-content-container" >
                <h2 class="days-one">Welcome</h2>
                <p class="para-text jura">
                   Greetings fellow travelers of the cosmos! Whether you're  a Jedi knight, a scruffy looking nerf herder, or just a curious droid,<strong>Welcome to our Star Wars Fan Blog</strong>.
                   Here, we take a deep dive into the hear of the saga, exploring the vast expanse of planets, characters, and epic battles that define the timeless universe.
                </p>
                <p class="para-text days-one">
                    We Cover a wide range of  content
                    surrounding Star Wars such as ...
                </p>
                <ul class="jura list">
                    <li>Movie News</li>
                    <li>Telvision</li>
                    <li>Latest Comics</li>
                    <li>Video Games</li>
                </ul>

                <div>
                <h3 class="days-one">We Appreciate Your Feedback!</h3>
                <p class="para-text jura">Feel free to let us know how we can better improve your experience here </p>
                <?php
                    if(isset($_SESSION['success'])){
                        echo"<p class='success-message'>". $_SESSION['feedback-msg'] ."</p>";
                        unset($_SESSION['success']);
                    }
                    if (isset($_SESSION['error'])) {
                        echo"<p class='error-message'>".$_SESSION['error']."</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <form method="post" action="customerFeedback-process.php" class="form-container">
                    <div class="jura">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" name="email" id="email" required>
                    <label for="feedback">Your Feedback</label>

                    <textarea name="feedback" id="feedback" required>

                    </textarea>
                    <input type="submit" value="Send Feedback" name="feedback-btn">
                    </div>
                </form>
            </div>
                
            </div>
        </main>
        <?php include $filePath.'footer.html';?>
        <script src="scripts.js">
        </script>
    </body>
</html>