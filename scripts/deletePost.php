<?php
require('config.php');
session_start();
$postID = $_GET['remove'];
if (isset($_SESSION['newSession'])) {
    $getUsername = "SELECT author FROM post WHERE id='" . $postID . "';";
    $result = $conn->query($getUsername);
    $row = $result->fetch_assoc();
    if ($_SESSION['newSession'] == $row['author']) {
        $remove = "UPDATE post SET removed = 1 WHERE id = $postID";
        $query = mysqli_query($conn, $remove);
        header('location:../index.php');
        mysqli_close($conn);
        exit();
    }
}
header('location:../index.php?deleteProblem');

