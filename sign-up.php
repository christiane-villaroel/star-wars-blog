<?php
session_start();
include_once 'config.php'; // Load the config file
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include INCLUDES_PATH . 'linkHead.php'; ?> 
        <title>Sign Up</title>
    </head>
    <body id="login-body">
        <?php include INCLUDES_PATH . 'banner.html'; ?> 
        <?php include INCLUDES_PATH . 'nav.php'; ?> 

        <main class="login-main">
            <div class="form-container jura" id="logged-in">
                <h2 class="days-one">Sign Up</h2>
                <?php
                // Display error or success messages
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
                        <input type="text" id="new-user" name="new-user" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="password">Create Password:</label>
                        <input type="password" id="password" name="password" autocomplete="off" required>
                        <p id="password-length"><i>Passwords must be 8 characters or more</i></p>
                    </div>
                    <div>
                        <label for="repeat">Re-enter Password:</label>
                        <input type="password" id="repeat" name="repeat" autocomplete="off" required>
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

        <?php include INCLUDES_PATH . 'footer.html'; ?>
        <script src="<?php echo STATIC_URL; ?>scripts.js" defer></script>
    </body>
</html>
