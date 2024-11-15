<?php
    session_start();

?>
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
         
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body id="login-body" >
        <banner-component class="banner"></banner-component>
        <header-component class="nav"></header-component>
        
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
        <footer-component class="footer"></footer-component>

        <script src="scripts.js">
           
        </script>
    </body>
</html>