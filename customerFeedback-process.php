<?php
    session_start();
    include_once 'config.php';
    if ($_SERVER["REQUEST_METHOD"]=='POST') {

        $stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES(?,?,?)");
        $stmt->bind_param('sss',$name,$email,$feedback);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $stmt->execute();

        $stmt->close();
        $conn->close();
        $_SESSION['success']= "Thank you for Your Feedback!";
        header("Location: homepage.php");
        exit();
    }
    else{
        $_SESSION['error']="Feedback Not Sent :(\nPlease Try again later";
        header('Location: homepage.php');
        exit();
    }

?>