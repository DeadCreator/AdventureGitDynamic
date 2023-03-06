<?php

/* @var $dbh*/
    session_start();

            $url = 'Location: ' . $_GET['href'];

            if (isset($_POST['registerBtn'])) {

                if (isset($_POST['login']) and isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirm'])) {

                    preg_match('/^[a-zA-Z][a-zA-Z0-9-_.]{1,20}$/', $_POST['login'], $matches1);
                    preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $_POST['password'], $matches2);

                    if (!$matches1) {
                        $_SESSION['errorReg'] = 'incorrect username, should have: 4-20 symbols; latin letters or digits';
                        header($url);
                        die();
                    }

                    if (!$matches2 and !empty($_POST['password'])) {
                        $_SESSION['errorReg'] = 'incorrect password, should have: at least 8 symbols: letters, digits and special letters';
                        header($url);
                        die();
                    }

                    if ($_POST['password'] != $_POST['passwordConfirm']) {
                        $_SESSION['errorReg'] = 'passwords don\'t match each other!';
                        header($url);
                        die();
                    }

                    include 'User.php';

                    $newUser = new User;
                    $newUser -> Register();
                    $newUser -> Login();


                }

                else {
                    echo 'fill empty fields!<br><a href="index.php">Shit</a>';
                }
            }

            if (isset($_POST['loginBtn'])) {

                if (isset($_POST['login']) and isset($_POST['password'])) {

                    include 'User.php';

                    $newUser = new User;
                    $newUser -> Login();

                }
            }

            if (isset($_POST['logoutBtn']) && isset($_SESSION['user'])) {
                unset($_SESSION['user']);
                unset($_SESSION['errorLog']);
                unset($_SESSION['errorReg']);
                header("Location: index.php");

            }


