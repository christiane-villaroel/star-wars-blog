<?php
    session_start();

    if (isset($_POST['login'])) {
        // Create connection
        include 'db.php';
        

        $sql = "SELECT username, password, userType FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            
            switch ($row["userType"]) {
                case 'admin':
                    $_SESSION["success"]="Admin User Log in Successful";
                    header('Location: view.php');
                    break;
                case 'blogger':
                    $_SESSION['username']=$row["username"];

                    header("Location: Dashboard.php");
                    break;
                
                default:
                $_SESSION["error"] = "username or password failed";
                    header("Location: login.php ");
                    break;
            }
        } else {
            $_SESSION["error"] = "Invalid username or email";
            header("Location: login.php");
            exit();
        }
        mysqli_close($conn); 
    } 
?>