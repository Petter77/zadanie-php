<?php
require('config.php');

$email              = $_POST['email'];
$username           = $_POST['username'];
$name               = $_POST['name'];
$lastName           = $_POST['lastName'];
$year               = $_POST['year'];
$month              = $_POST['month'];
$day                = $_POST['day'];
$date               = $year . '-' . $month . '-' . $day;
$password           = $_POST['password'];
$confirmPassword    = $_POST['confirmPassword'];

function checkEmail($email): void
{
    global $conn;
    $login = "SELECT COUNT(*) FROM users WHERE email='" . $email . "';";
    $query = mysqli_query($conn, $login);
    $result = mysqli_fetch_array($query);
    echo($result[0]);
    if ($result[0] != 0) {
        header('location:../register.php?emailAlreadyUsed');
        mysqli_close($conn);
        exit();
    }
}

function checkUsername($username): void
{
    global $conn;
    $login = "SELECT COUNT(*) FROM users WHERE username='" . $username . "';";
    $query = mysqli_query($conn, $login);
    $result = mysqli_fetch_array($query);
    if ($result[0] != 0) {
        header('location:../register.php?usernameAlreadyUsed');
        mysqli_close($conn);
        exit();
    }
}

function checkPasswords($password, $confirmPassword): void
{
    if ($password != $confirmPassword) {
        header('location:../register.php?passwordsDoesntMatch');
        exit();
    }
}

if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['password'])) {
    checkUsername($username);
    checkEmail($email);
    checkPasswords($password, $confirmPassword);

    $register = 'INSERT INTO users VALUES (default, "' . $email . '","' . $username . '","' . $name . '","' . $lastName . '","' . $date . '","' . $password . '")';
    $query = mysqli_query($conn, $register);
    header('location:../login.php?registerSuccess');
    mysqli_close($conn);
    exit();
} else {
    header('location:../register.php');
}