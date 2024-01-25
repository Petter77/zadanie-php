<?php
session_start();
if(isset($_SESSION['newSession'])){
    header('location:index.php');
}
?>

<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="author" content="Patryk Pawliński">
    <meta name="logo-author" content="Patryk Pawliński">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-JTPPPCW</title>
</head>
<body>
<main>
    <nav>
        <div id="nav-left">
            <div class="logo">
                <a href="index.php"><img class="navImage" src="img/placeholder.svg" alt="website logo"></a>
            </div>
        </div>
        <div id="nav-right">
            <a href="" class="nav-elem">
                <div></div>
            </a>
            <a href="register.php" id="register-button" class="nav-elem">
                <div>Register</div>
            </a>
            <a href="login.php" id="login-button" class="nav-elem">
                <div>Login</div>
            </a>
        </div>
    </nav>


    <?php
    if (isset($_GET['registerSuccess'])) {
        echo('<div id="registerSuccess">
            Your account has been created! <br>You can now log in below.
        </div>');
    }

    if (isset($_GET['loginFailed'])) {
        echo('<div id="loginFailed">
            Email or password is invalid. <br>Please, try again.
    </div>');
    }
    ?>


    <form method="post" action="scripts/loginScript.php">
        <div class="form-group">
            <label for="email" class="form-label">Email
                <input type="email" name="email" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password
                <input type="password" name="password" class="form-input">
            </label>
        </div>
        <input type="submit" class="form-input">
    </form>
    <footer>
        <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a> is licensed by CC BY 4.0</div>
    </footer>
</main>
</body>
</html>
<script src="js/script.js"></script>
