<?php

session_start();

if (isset($_POST['addToFavBtn'])) {
    if ( isset($_SESSION['user'])) {
        $_SESSION['errorLog'] = 'sorry';
        header("Location: " . $_GET['href']);
    }

    else {
        $_SESSION['errorLog'] = 'login please!';
        header("Location: " . $_GET['href']);
    }

}