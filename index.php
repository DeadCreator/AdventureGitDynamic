<?php
session_start();

$url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <title>AdventureGit - Home</title>
</head>
<body id="body">
    <button id="back-to-top" >&#8593;</button>
    <header>
        <section class="up">
            <img alt="sorry, we are working in order you don't see this text" src="images/logo.png" class="logo">
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
                              <li><form method="post" action="auth.php?href='. $url .'"><button name="logoutBtn">Logout</button></form>';
                    }
                    else {
                        echo '<li><button id="openLogin">Login</button>
                              <li><button id="openRegister">Register</button></li>';
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <section class="down">
            <div class="left">
                <h1>Explore and Travel</h1>
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
                <form class="header-form" method="post" action="search.php">
                    <legend>Holiday Finder</legend>
                    <div class="header-square"></div>
                    <select name="location">
                        <option  hidden>Location</option>
                        <option value="Europe">Europe</option>
                        <option value="Asia">Asia</option>
                        <option value="Australia">Australia</option>
                        <option value="America">America</option>
                    </select>
                    <select name="activity">
                        <option hidden >Activity</option>
                        <option value="Hiking">Hiking</option>
                        <option value="Camping">Camping</option>
                        <option value="Water Rafting">Water Rafting</option>
                        <option value="Hunting">Hunting</option>
                    </select>
                    <select name="grade">
                        <option hidden>Grade</option>
                        <option value="Cheap">Cheap</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Luxury">Luxury</option>
                    </select>
                    <select name="date">
                        <option hidden >Date</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                    </select>
                    <input type="submit" value="Explore">
                </form>
            </div>
            <img alt="sorry, we are working in order you don't see this text" src="images/header_main.webp" class="header_img">
        </section>
    </header>
    <main>
        <section class="main-1">
            <img alt="sorry, we are working in order you don't see this text"  src="images/main-1.webp"  >
            <div class="main-1-paragraph">
                <h2>A new way to explore the world</h2>
                <p>For decades travellers have reached for Lonely Planet books when looking to plan and execute their perfect
                    trip, but now, they can also let Lonely Planet Experiences lead the way!</p>
                <button class="main-1-button">Learn More</button>
            </div>
        </section>
        <section class="main-2">
            <div class="main-2-header">
                <h2>Featured Destinations</h2>
                <a href="search.php">View all &#8250;</a>
            </div>
            <div class="main-2-list">
                <a href="single.php?id=1" class="main-2-list-paragraph-1">
                    <h3>Raja Ampat</h3>
                    <p>Indonesia</p>
                </a>
                <a href="single.php?id=2" class="main-2-list-paragraph-2">
                    <h3>Fanjingshan</h3>
                    <p>China</p>
                </a>
                <a href="single.php?id=3" class="main-2-list-paragraph-3">
                    <h3>Vevey</h3>
                    <p>Switzerland</p>
                </a>
                <a href="single.php?id=4" class="main-2-list-paragraph-4">
                    <h3>Skadar</h3>
                    <p>Montenegro</p>
                </a>
            </div>
        </section>
        <section id="guides-download" class="main-3">
            <div class="main-3-paragraph">
                <h2>Guides by Thousand Sunny</h2>
                <p>Packed with tips and advice from our on-the-ground experts, our city guides app (iOS and Android) 
                    is the ultimate resource before and during a trip.</p>
                <button class="main-1-button">Download</button>
            </div>
            <img alt="sorry, we are working in order you don't see this text" src="images/main-3.webp">
        </section>
        <section class="main-4">
            <div class="main-4-header">
                <h2>Trending Stories</h2>
                <a href="news.php#trending-stories">View all &#8250;</a>
            </div>
            <div class="main-4-list">
                <div class="main-4-list-paragraph-1">
                    <img alt="sorry, we are working in order you don't see this text" src="images/main-4-image-1.webp">
                    <h3>The many benefits of taking a healing holiday</h3>
                    <p>‘Helaing holidays’ are on the rise 
                        tohelp maximise your health and happines...</p>
                    <a href="news.php#trending-stories">Read more</a>
                </div>
                <div class="main-4-list-paragraph-2">
                    <img alt="sorry, we are working in order you don't see this text" src="images/main-4-image-2.webp">
                    <h3>The best Kyoto restaurant to try Japanese food</h3>
                    <p>From tofu to teahouses, here’s our guide to Kyoto’s best restaurants
                        to visit...</p>
                    <a href="news.php#trending-stories">Read more</a>
                </div>
                <div class="main-4-list-paragraph-3">
                    <img alt="sorry, we are working in order you don't see this text" src="images/main-4-image-3.webp">
                    <h3>Skip Chichen Itza and head to this remote Yucatan</h3>
                    <p>It’s remote and challenging to get,
                        but braving the jungle and exploring
                        these ruins without the...</p>
                    <a href="news.php#trending-stories">Read more</a>
                </div>
                <div class="main-4-list-paragraph-4">
                    <img alt="sorry, we are working in order you don't see this text" src="images/main-4-image-4.webp">
                    <h3>Surf’s up at these beginner spots around the world</h3>
                    <p>If learning to surf has in on your to-
                        do list for a while, the good news
                        is: it’s never too late...</p>
                    <a href="news.php#trending-stories">Read more</a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>