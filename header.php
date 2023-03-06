<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);
$url = $_SERVER['REQUEST_URI'];


?>



<header class="search-header">
        <section class="up">
            <img src="images/logo.png" class="logo">
            <nav>
                <button id="menu-open">
                  <div class="menu-style"></div>
                  <div class="menu-style"></div>
                  <div class="menu-style"></div>
                </button>
                <div id ="free_menu"></div>
                <ul id="menu">
                    <li class="menu-button">
                        <button id="menu-close">
                            <div class="menu-style"></div>
                            <div class="menu-style"></div>
                            <div class="menu-style"></div>
                        </button>
                    </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="search.php?location=Location&activity=Activity&grade=Grade&date=Date">Destinations</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="about.php">About</a></li>
                    <?php if (isset($_SESSION['user'])) {
                        echo '<li><a style="color: magenta;" href="profile.php?user='. base64_encode($_SESSION['user']) . '">' . $_SESSION['user'] . '</a></li>
                              <li><form method="post" action="auth.php?href='. $url .'"><button name="logoutBtn">Logout</button></form></li>';

                    }
                    else {
                        echo '<li><button id="openLogin">Login</button>
                              <li><button id="openRegister">Register</button></li>';
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <?php if (!isset($_SESSION['user'])) { ?>
            <div id="auth-form-container" <?php if (isset($_SESSION['errorReg'])
                || isset($_SESSION['errorLog'])) { echo 'class="opened-container"';}?>></div>
            <div id="login-form" <?php if (isset($_SESSION['errorLog'])) { echo 'class="opened-auth"';}?>>
                <button id="close-auth-log"></button>
                <form method="post" action="auth.php?href=<?=$url?>">
                    <input type="text" name="login" placeholder="Your login" required>
                    <input type="password" name="password" placeholder="Your password" required>
                    <button name="loginBtn">Log in</button>
                    <a id="change-to-reg" name="register">Don't have an account? Create one!</a>
                    <p style="color: red; width: 25vw; text-align: center;"><?php if (isset($_SESSION['errorLog'])) { echo $_SESSION['errorLog']; unset($_SESSION['errorLog']);} ?></p>
                </form>
            </div>
            <div id="register-form"  <?php if (isset($_SESSION['errorReg'])) { echo 'class="opened-auth"';}?>>
                <button id="close-auth-reg"></button>
                <form method="post" action="auth.php?href=<?=$url?>">
                    <input type="text" name="login" placeholder="Your login" required>
                    <input type="email" name="email" placeholder="Your email" required>
                    <input type="password" name="password" placeholder="Your password" required>
                    <input type="password" name="passwordConfirm" placeholder="Confirm password" required>
                    <button name="registerBtn">Register</button>
                    <a id="change-to-log" name="register">Already have an account? Sign in!</a>
                    <p style="color: red; width: 25vw; text-align: center;"><?php if (isset($_SESSION['errorReg'])) { echo $_SESSION['errorReg']; unset($_SESSION['errorReg']);} ?></p>
                </form>
            </div>
        <?php } ?>
    </header>