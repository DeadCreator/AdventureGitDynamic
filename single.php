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
    <title>AdventureGit - Single Product</title>
</head>
<body>
    <button id="back-to-top" >&#8593;</button>
    <?php

        include 'header.php';
        include 'dbConfig.php';

        $sth = $dbh -> prepare('SELECT * FROM trips WHERE id = ?');
        $sth -> execute([$_GET['id']]);

        $trip = $sth -> fetch(PDO::FETCH_OBJ);

    ?>
    <main class="single-main">
      <section class="single-images">
        <div class="image-set">
          <img src="<?=$trip -> image_main?>">
          <img src="<?=$trip -> image_2?>">
          <img src="<?=$trip -> image_3?>">
          <img src="<?=$trip -> image_4?>">
          <img src="<?=$trip -> image_5?>">
        </div>

        <nav>
          <button id="prev-image"></button>
          <button id="next-image"></button>
        </nav>
      </section>
      <section class="single-properties">
        <h2 class="single-subtitle">New</h2>
        <h1 class="single-title"><?=$trip -> title?></h1>
        <h2 class="single-price"><?=$trip -> price  . " 000 $"?></h2>
        <p class="single-description"><?=$trip -> description?></p>
        <div class="single-separator"></div>
        <section class="properties">
          <h3 class="location"><?=$trip -> location?></h3>
          <h3 class="grade"><?=$trip -> grade?></h3>
          <h3 class="activity"><?=$trip -> activity?></h3>
          <h3 class="date"><?=$trip -> date?></h3>
        </section>
        <button>Order Trip</button>
      </section>
    </main>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
    <script src="slider.js"></script>
</body>
</html>