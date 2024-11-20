<?php
    session_start();
   include_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/linkHead.php'?>
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo STATIC_URL;?>styles.css">
    </head>
    <body id="login-body" >
    <?php include 'banner.html';?>
    <?php include 'nav.php';?>
        
        <main class="login-main">
            <div class="form-container jura" id="logged-in">
                    <h2 class="days-one">Sign Up</h2>
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
                <form name="signupForm" id="sign-up-form" method="post" action="sign-up-process.php">
                    
                    <div>
                        <label for="new-user">Create Username</label>
                        <input type="text" id="new-user" name="new-user">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div>
                        <label for="password">Create Password:</label>
                        <input type="password" id="password" name="password" autocomplete="off">
                        <p id="password-length"><i>Passwords must be 8 characters or more</i></p>
                    </div>
                    <div>
                        <label for="password">re-enter same password:</label>
                        <input type="password" id="repeat" name="repeat" autocomplete="off">
                    </div>
                    <div class="password-match jura" style="display: none;">
                        <p>Perfect match</p>
                    </div>
                    <div>
                        <button type="submit" id="signup-btn" value="submit" name="submit" onclick="return createAccount()">Sign Up</button>
                    </div>
                </form>
            </div>
        </main>
        <?php include $filePath.'footer.html';?>
        <script src="<?php echo STATIC_URL;?>scripts.js" defer>
           
        </script>
    </body>
</html>