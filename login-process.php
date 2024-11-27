<?php
    session_start();
    //$filePath = "/xampp/htdocs/Blog/star-wars-blog/includes/";
    include "/xampp/htdocs/Blog/star-wars-blog/includes/db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "SELECT id, username, password, userType FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            
            switch ($row["userType"]) {
                case 'admin':
                    $_SESSION['user_id']=$row['id'];
                    $_SESSION['username']=$row["username"];
                    $_SESSION["success"]="Admin User Log in Successful";
                    header('Location: admin/view.php');
                    break;
                case 'blogger':
                    $_SESSION['user_id']=$row['id'];
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