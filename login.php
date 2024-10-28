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
        <script src="components/header.js" type="text/javascript" defer></script>
        <script src="components/banner.js" type="text/javascript" defer></script>
        <script src="components/footer.js" type="text/javascript" defer></script>
       
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body id="homepage" >
        <banner-component class="banner"></banner-component>
       <header-component class="nav"></header-component>
        
        <main class="login-main">
            <div class="form-container jura" id="logged-in">
                <form name="loginForm">
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
                        <button type="submit" id="login-btn" value="button" onclick="validate()">Login</button>
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