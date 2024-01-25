<?php
require ('config.php');
session_start();
$postContent = $_POST['sendPostInput'];
$postAuthor = $_SESSION['newSession'];
if(!empty($postContent)){
    $send = "INSERT INTO post (id, author, content) VALUES (default, '".$postAuthor."', '".$postContent."');";
    $query = mysqli_query($conn, $send);
    header('location:../index.php');
    mysqli_close($conn);
    exit();
}
else{
    header('location:../index.php');
}