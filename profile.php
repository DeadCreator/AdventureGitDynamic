<!doctype html>
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
    <title>AdventureGit - Profile</title>
</head>
<body>
    <?php
    include 'header.php';

    if (isset($_SESSION['user'])) {

        ///

    }

    else {
        $_SESSION['errorLog'] = 'Log in Please!';
        header("Location: index.php");
    }

    include 'footer.php';
    ?>
</body>
</html>

