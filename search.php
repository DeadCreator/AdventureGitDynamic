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
    <title>AdventureGit - Destinations</title>
</head>
<body>
    <button id="back-to-top" >&#8593;</button>
    <?php include 'header.php';
        $location = ['Europe' => 'Europe', 'Asia' => 'Asia', 'Australia' => 'Australia', 'America' => 'America'];
        $activity = ['Hiking' => 'Hiking', 'Camping' => 'Camping', 'Water Rafting' => 'Water Rafting',
            'Hunting' => 'Hunting'];
        $grade = ['Cheap' => 'Cheap', 'Intermediate' => 'Intermediate', 'Luxury' => 'Luxury'];
        $date = ['June' => 'June', 'July' => 'July', 'August' => 'August'];
        $sort = ['Low First' => 'Low First', 'High First' => 'High First'];
    ?>
    <main class="main-search">
        <aside class="filters">
            <form class="search-form" method="post" action="search.php">
                <select name="location">
                    <option>Location</option>
                    <?php foreach($location as $key => $value): ?>
                    <option value="<?=$key ?>" <?php if ($key == $_POST['location']) {?> selected="selected" <?php } ?>><?=$value; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="activity">
                    <option>Activity</option>
                    <?php foreach($activity as $key => $value): ?>
                        <option value="<?=$key ?>" <?php if ($key == $_POST['activity']) {?> selected="selected" <?php } ?>><?=$value; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="grade">
                    <option>Grade</option>
                    <?php foreach($grade as $key => $value): ?>
                        <option value="<?=$key ?>" <?php if ($key == $_POST['grade']) {?> selected="selected" <?php } ?>><?=$value; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="date">
                    <option>Date</option>
                    <?php foreach($date as $key => $value): ?>
                        <option value="<?=$key ?>" <?php if ($key == $_POST['date']) {?> selected="selected" <?php } ?>><?=$value; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="sort">
                    <option hidden>Sort by</option>
                    <?php foreach($sort as $key => $value): ?>
                        <option value="<?=$key ?>" <?php if ($key == $_POST['sort']) {?> selected="selected" <?php } ?>><?=$value; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Apply">
            </form>
        </aside>
        <section class="search-results">
            <?php

                include 'dbConfig.php';

                if (isset($_POST['location']) ||  isset($_POST['activity']) ||
                 isset($_POST['grade']) || isset($_POST['date']) || isset($_POST['sort'])) {

                    $locationFilter = 'location = ?';
                    $activityFilter = 'activity = ?';
                    $gradeFilter = 'grade = ?';
                    $dateFilter = 'date = ?';
                    $sortFilter = ' ORDER BY price ';

                    $data = ['location' => $_POST['location'], 'activity' => $_POST['activity'],
                        'grade' => $_POST['grade'], 'date' => $_POST['date']];

                    if ($_POST['location'] == "Location" || empty($_POST['location'])) {
                        $locationFilter = 1;
                        unset($data['location']);
                    }
                    if ($_POST['activity'] == "Activity" || empty($_POST['activity'])) {
                        $activityFilter = 1;
                        unset($data['activity']);
                    }
                    if ($_POST['grade'] == "Grade" || empty($_POST['grade'])) {
                        $gradeFilter = 1;
                        unset($data['grade']);
                    }
                    if ($_POST['date'] == "Date" || empty($_POST['date'])) {
                        $dateFilter = 1;
                        unset($data['date']);
                    }

                    if ($_POST['sort'] == "Sort By" || empty($_POST['sort'])) {
                        $sortFilter = "";
                    }

                    if ($_POST['sort'] == "High First") {
                        $sortFilter .= 'DESC';
                    }

                    $data = array_values($data);

                    $query1 = 'SELECT * FROM trips WHERE ' . $locationFilter . " AND " . $activityFilter .
                        " AND " . $gradeFilter . " AND " . $dateFilter . $sortFilter;
                    $query2 = 'SELECT COUNT(*) FROM trips WHERE ' . $locationFilter . " AND " . $activityFilter .
                        " AND " . $gradeFilter . " AND " . $dateFilter;

                    $sth = $dbh -> prepare($query1);
                    $sth -> execute($data);

                    $sthCount = $dbh -> prepare($query2);
                    $sthCount -> execute($data);

                }

                else {

                    $sth = $dbh -> query('SELECT * FROM trips');
                    $sthCount = $dbh -> query('SELECT COUNT(*) FROM trips');
                }

                $count = $sthCount -> fetchColumn();
            ?>
            <h1 class="found-count">Found <?= $count ?> offers</h1>
            <div class="offers">
                <?php
                while ($trip = $sth -> fetch(PDO::FETCH_OBJ)) { ?>
                <a href="single.php?id=<?= $trip -> id ?>" class="offer">
                    <img src="<?=$trip -> image_main?>">
                    <h2 class="offer-title"><?= $trip -> title?></h2>
                    <h3 class="price"><?= $trip -> price . " 000 $"?></h3>
                    <div class="properties">
                        <h3 class="location"><?= $trip -> location?></h3>
                        <h3 class="grade"><?= $trip -> grade?></h3>
                        <h3 class="activity"><?= $trip -> activity?></h3>
                        <h3 class="date"><?= $trip -> date?></h3>
                        <p class="desc"><?= $trip -> description?></p>
                    </div>
                    <form action="favourites.php?href=<?=$url?>&id=<?=$trip -> id?>" method="post">
                        <button name="addToFavBtn" class="addToFav">Add to Favourite</button>
                    </form>
                </a>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>