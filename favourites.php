<?php

session_start();

if (isset($_POST['addToFavBtn'])) {
    if ( isset($_SESSION['user'])) {
        
        include 'dbConfig.php';

        $sth = $dbh -> prepare('SELECT * FROM favourites WHERE user = ? AND trip = ?')
        $sth -> execute([$_SESSION['user'], $_GET['id']])
        
        if ($sth -> fetch(PDO:FETCH_OBJ)) {
            $sth = $dbh -> prepare('DELETE FROM favourites WHERE user = ? AND trip = ?')
            $sth -> execute([$_SESSION['user'], $_GET['id']])
        }

        else {
            $sth = $dbh -> prepare('INSERT INTO favourites (user, trip) VALUES (?,?)')
            $sth -> execute([$_SESSION['user'], $_GET['id']])
        }

        header("Location: " . $_GET['href']);

    }

    else {
        $_SESSION['errorLog'] = 'login please!';
        header("Location: " . $_GET['href']);
    }

}