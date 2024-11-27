<?php
    session_start();
    /* $filePath = "/xampp/htdocs/Blog/star-wars-blog/includes/";
    include ''. $filePath . 'db.php'; */
    include_once 'config.php'; // Load the config file
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include INCLUDES_PATH . 'linkHead.php'; ?>

        <title>Login</title>
    </head>
    <body id="homepage" >
        <?php include INCLUDES_PATH . 'banner.html'; ?> 
        <?php include INCLUDES_PATH . 'nav.php'; ?> 
        
        <main class="login-main">
            <div class="form-container jura" id="logged-in">
                    <?php
                        if (isset($_SESSION["error"])) {
                            echo "<p class='error-message'>" . $_SESSION["error"] . "</p>";
                            unset($_SESSION["error"]);
                        }
                        if (isset($_SESSION["success"])) {
                            echo "<p class='success-message'>" . $_SESSION["success"] . "</p>";
                            unset($_SESSION["success"]);
                        }
                    ?>
                <form name="loginForm" method="post" action="login-process.php">
                    <h2 class="days-one">Login</h2>
                    <div>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" autocomplete="off">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" autocomplete="off">
                        <p id="password-length"><i>Passwords must be 8 characters or more</i></p>
                    </div>
                    <div>
                        <button type="submit" id="login-btn" value="login" onclick="return validate()" name="login">Login</button>
                    </div>
                </form>
            </div>
            <div>
                <p id="profile"></p>
            </div>
        </main>
        <?php include INCLUDES_PATH . 'footer.html'; ?>
        <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>

        </script>
    </body>
</html>