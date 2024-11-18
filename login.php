<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'linkHead.php';?>
       
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body id="homepage" >
        <banner-component class="banner"></banner-component>
       <header-component class="nav"></header-component>
        
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
        <footer-component class="footer"></footer-component>

        <script src="scripts.js">

        </script>
    </body>
</html>