<?php
/* @var $url */
class User
{
    public function Login() {

        $url = 'Location: ' . $_GET['href'];

        $login = trim($_POST['login']);
        $password = trim($_POST['password']);

        if (!empty($login) and !empty($password)) {
            include 'dbConfig.php';

            /* @var $dbh*/

            $sth = $dbh -> prepare('SELECT * FROM users WHERE login = ?');
            $sth -> execute([$login]);
            $user = $sth -> fetch(PDO::FETCH_OBJ);

            if ($user) {
                if (password_verify($password, $user -> password)) {
                    $_SESSION['user'] = $user -> login;
                    unset($_SESSION['errorLog']);
                    unset($_SESSION['errorReg']);
                    header($url);
                }
                else {
                    $_SESSION['errorLog'] = "Username or password isn't correct";
                    header($url);

                }
            }

            else {
                $_SESSION['errorLog'] = 'There are 0 users with this login. Register';
                echo $url;
                header($url);

            }

        }
        else {
            $_SESSION['errorLog'] = 'fill empty fields!';
            header($url);
            echo 'shit!';
        }

    }

    public function register() {

        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if (!empty($login) and !empty($password)) {
            include 'dbConfig.php';

            $password = password_hash($password, PASSWORD_DEFAULT);

            /* @var $dbh*/

            $sth = $dbh -> prepare('INSERT INTO users (login, password, email) VALUES (?, ?, ?)');
            try  {
                $sth -> execute([$login, $password, $email]);
            }
            catch (PDOException $e) {
                if ( $e->getCode() == 23000) {
                    $_SESSION['errorReg'] = 'sorry, this username has been already taken :)';
                    header($url);
                    die();
                }
            }
        }
    }
}