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
    <title>Register-JTPPPCWOW</title>
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
    if (isset($_GET['emailAlreadyUsed'])) {
        echo('<div id="loginFailed">
            This email is already used.<br>Please, try again.
        </div>');
    }

    if (isset($_GET['usernameAlreadyUsed'])) {
        echo('<div id="loginFailed">
            This username is already used.<br>Please, try again.
        </div>');
    }
    if (isset($_GET['passwordsDoesntMatch'])) {
        echo('<div id="loginFailed">
            Passwords doesnt match <br>Please, try again.
        </div>');
    }
    ?>
    <form method="post" action="scripts/sendRegisterData.php">
        <div class="form-group">
            <label for="email" class="form-label">Email
                <input type="email" name="email" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="username" class="form-label">Username
                <input type="text" name="username" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Name
                <input type="text" name="name" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="lastName" class="form-label">Last name (optional)
                <input type="text" name="lastName" class="form-input">
            </label>
        </div>
        <div id="date">
            <div class="date-element">
                <label for="day">Day
                    <select name="day" id="day">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29" id="day29">29</option>
                        <option value="30" id="day30">30</option>
                        <option value="31" id="day31">31</option>
                    </select>
                </label>
            </div>
            <div class="date-element">
                <label for="month">Month
                    <select name="month" id="month">
                        <option value=1 selected>January</option>
                        <option value=2>February</option>
                        <option value=3>March</option>
                        <option value=4>April</option>
                        <option value=5>May</option>
                        <option value=6>June</option>
                        <option value=7>July</option>
                        <option value=8>August</option>
                        <option value=9>September</option>
                        <option value=10>October</option>
                        <option value=11>November</option>
                        <option value=12>December</option>
                    </select>
                </label>
            </div>
            <div class="date-element">
                <label for="year">Year
                    <input id="year" type="number" class="form-input" name="year" min="1900" max="2100"
                           value="2016">
                </label>
            </div>
        </div>
        <div id="wrongPasswords" style="display: none; color: #d70f0f; text-align: center">
            Passwords doesn't match
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password
                <input type="password" name="password" class="form-input" id="pass1">
            </label>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="form-label">Confirm Password
                <input type="password" name="confirmPassword" class="form-input" id="pass2">
            </label>
        </div>
        <input type="submit" class="form-input">
    </form>
    <footer>
        <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a> is licensed by CC BY 4.0</div>
    </footer>
</main>
</body>
<script src="js/script.js"></script>
</html>
