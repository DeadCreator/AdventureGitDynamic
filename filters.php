<?php

if (isset($_POST['location']) && isset($_POST['activity']) && isset($_POST['grade']) && isset($_POST['date'])) {

    if (isset($_POST['sort'])) {
        header("Location: /AdventureGitDynamic/search.php?location=" . $_POST['location'].
            "&activity=" . $_POST['activity'] . "&grade=" . $_POST['grade'] . "&date=" .
            $_POST['date'] . "&sort=" . $_POST['sort']);
    }

    else {
        header("Location: /AdventureGitDynamic/search.php?location=" . $_POST['location'].
            "&activity=" . $_POST['activity'] . "&grade=" . $_POST['grade'] . "&date=" .
            $_POST['date'] . "&sort=Sort By");
    }


}