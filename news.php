<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);

?>
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
    <?php include 'header.php'; ?>
    <main class="news-main">
    <section id="special-offers" class="special-offers">
            <h1>Special Offers</h1>
            <div class="single-images">
                <div class="image-set">
                  <div class="new-article a1">
                      <h2 class="new-title">Family trip in <b style="color: orange;">winter</b> is cheaper in 
                        <b style="color: #1abc83;">summer!</b></h2>
                      <div class="sale-wrap">SALE 50%</div>
                  </div>
                  <div class="new-article a2">
                      <h2 class="new-title">Article two</h2>
                  </div>
                  <div class="new-article a3">
                      <h2 class="new-title">Article three</h2>
                  </div>
                  <div class="new-article a4">
                      <h2 class="new-title">Article four</h2>
                  </div>
                </div>
        
                <nav>
                  <button id="prev-image"></button>
                  <button id="next-image"></button>
                </nav>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
    <script src="slider.js"></script>
</body>
</html>