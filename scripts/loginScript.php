<?php
require('config.php');

if(isset($_SESSION['newSession'])){
    header('location:../index.php');
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($_POST['email'])&&!empty($_POST['password'])) {
    $login = "SELECT COUNT(*) FROM users WHERE email='" . $email . "' AND password='" . $password . "';";
    $query = mysqli_query($conn, $login);
    $result = mysqli_fetch_array($query);
    if ($result[0] == 0) {
        header('location:../login.php?loginFailed');
    } else {
        session_start();
        $getUsername = "SELECT username FROM users WHERE email='" . $email . "' AND password='" . $password . "';";
        $result = $conn->query($getUsername);
        $row = $result->fetch_assoc();
        $wartosc = $row['username'];
        $_SESSION['newSession'] = $wartosc;
        $conn->close();
        header('location:../index.php');
    }
    exit();
}
else{
    header('location:../login.php');
}




