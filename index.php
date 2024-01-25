<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="css/style.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>

    <title>JTPPPCWOW</title>
</head>
<body>
<main>
    <nav>
        <div id="nav-left">
            <div id="logo">
                <a href="index.php"><img class="navImage" src="img/placeholder.svg" alt="website logo"></a>
            </div>
        </div>
        <div id="nav-right">

            <?php
            session_start();
            if (!isset($_SESSION['newSession'])) {
                echo('
                    <a href="register.php" id="register-button" class="nav-elem">
                        <div>Register</div>
                    </a>
                    <a href="login.php" id="login-button" class="nav-elem">
                        <div>Login</div>
                    </a>
                    ');
            } else {
                echo('<a href="scripts/logout.php" id="register-button" class="nav-elem">
                    <div>Logout</div></a>');
            }
            ?>


        </div>
    </nav>
    <div id="middle-section">
        <?php
        if (isset($_GET['deleteProblem'])) {
            echo('<div id="removeDanied">
                    <div id="xSymbol"><img src="img/x-symbol.svg" alt="x symbol" style="height: 1rem; cursor: pointer"></div>
                    
                    <div id="removeText">You are not allowed to remove this post.</div>
            </div>');
        }

        if (isset($_SESSION['newSession'])) {
            echo('
        <form  class="post" method="POST" id="sendPost" action="scripts/sendPost.php">
            <textarea name="sendPostInput" oninput="auto_grow(this)" id="sendPostInput"
                              placeholder="Click here, to start typing (max 1024 characters)" maxlength="1024"></textarea>
            <input type="submit" id="sendPostButton" value="Send">
        </form>
        ');
        }

        ?>
    </div>
    <button id="load-more">Load More</button>
    <footer>
        <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a> is licensed by CC BY 4.0</div>
    </footer>
</main>
</body>
<script src="js/newPost.js"></script>
</html>