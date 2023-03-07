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
        <section class="news-trending-stories">
            <div class="single-images">
                <div class="image-set">
                  <img src="images/search-result-1.png" alt="SORRY">
                  <img src="images/single-product-image-1-2.jpg" alt="BUT THIS PART">
                  <img src="images/single-product-image-1-3.jpg" alt="WILL BE ADDED SOON">
                  <img src="images/single-product-image-1-4.jpg" alt="SO, PLEASE">
                  <img src="images/single-product-image-1-5.jpg" alt="LEAVE THIS PAGE">
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
</body>
</html>