<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <title>AdventureGit - News</title>
</head>   
<body>
    <button id="back-to-top" >&#8593;</button>
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
            <li><a href="search.php">Destinations</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="about.html">About</a></li>
            <li><button id="openLogin">Login</button>
            <li><button id="openRegister">Register</button></li>
          </ul>
        </nav>
      </section>
      <div id="auth-form-container"></div>
      <div id="login-form">
        <button id="close-auth-log"></button>
        <form>
          <input type="text" name="login" placeholder="Your login" required>
          <input type="password" name="password" placeholder="Your password" required>
          <button name="log in">Log in</button>
          <a id="change-to-reg" name="register">Don't have an account? Create one!</a>
        </form>
      </div>
      <div id="register-form">
        <button id="close-auth-reg"></button>
        <form>
          <input type="text" name="login" placeholder="Your login" required>
          <input type="email" name="email" placeholder="Your email" required>
          <input type="password" name="password" placeholder="Your password" required>
          <input type="password" name="password" placeholder="Confirm password" required>
          <button name="register">Register</button>
          <a id="change-to-log" name="login">Already have an account? Sign in!</a>
        </form>
      </div>
    </header>
    <main class="news-main">
        <section class="news-trending-stories">
            <div class="single-images">
                <div class="image-set">
                  <img src="images/search-result-1.png">
                  <img src="images/single-product-image-1-2.jpg">
                  <img src="images/single-product-image-1-3.jpg">
                  <img src="images/single-product-image-1-4.jpg">
                  <img src="images/single-product-image-1-5.jpg">
                </div>
        
                <nav>
                  <button id="prev-image"></button>
                  <button id="next-image"></button>
                </nav>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer-up">
          <div class="footer-left">
            <img src="images/logo.png" class="logo">
            <p>Plan and book your perfect trip with
              expert advice, travel tips destination
              information from us</p>
            <p class="copyright">©2020 Thousand Sunny. All rights reserved</p>
          </div>
          <div class="right">
            <ul>Destinations
              <li><a href="search.php?location=africa">Africa</a></li>
              <li><a href="search.php?location=antarctica">Antartica</a></li>
              <li><a href="search.php?location=asia">Asia</a></li>
              <li><a href="search.php?location=europe">Europe</a></li>
              <li><a href="search.php?location=america">America</a></li>
            </ul>
            <ul>Shop
              <li><a href="index.php#guides-download">Destinations Guides</a></li>
              <li><a href="news.html#pictorial-and-gifts">Pictorial & Gifts</a></li>
              <li><a href="news.html#special-offers">Special Offers</a></li>
              <li><a href="about.html#delivery-times">Delivery Times</a></li>
              <li><a href="about.html#faqs">FAQs</a></li>
            </ul>
            <ul>Interests
              <li><a href="news.html#adventure">Adventure</a></li>
              <li><a href="news.html#art-and-culture">Art And Culture</a></li>
              <li><a href="news.html#wildlife-and-nature">Wildlife and Nature</a></li>
              <li><a href="news.html#family-holidays">Family Holidays</a></li>
              <li><a href="news.html#food-and-drinks">Food and Drinks</a></li>
            </ul>
          </div>
        </section>
        <div class="footer-separator"></div>
        <section class="footer-down">
          <img src="images/social-1.png">
          <img src="images/social-2.png">
          <img src="images/social-3.png">
          <img src="images/social-4.png">
          <img src="images/social-5.png">
        </section>
      </footer>
      <script src="script.js"></script>
</body>
</html>