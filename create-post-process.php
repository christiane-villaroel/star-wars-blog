<?php
session_start();
include_once 'config.php';
if ($_SERVER["REQUEST_METHOD"]=='POST') {

    $stmt = $conn->prepare("INSERT INTO posts (title,body,author_id) VALUES(?,?,?)");
    $stmt->bind_param('ssi',$title,$body,$author_id);
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author_id = $_POST['user_id'];
    $stmt->execute();

    $stmt->close();
    $conn->close();
    $_SESSION['success']= "Post Submitted";
    header("Location: create-post.php");
    exit();
}
else{
    $_SESSION['error']="Unable to Submit Post :(\nPlease Try again later";
    header('Location: create-post.php');
    exit();
}

?>