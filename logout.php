<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART-MED</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="HOME.php"><img src="logo.png"></a>
    </header>
    <?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: HOME.php');
    ?>
</body>
</html>