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
        <a href="#"><img src="logo.png"></a>
        <nav class="links" style="display: flex">
        <?php
        session_start();
        if(!isset($_SESSION['login_user']))
        {
            echo '<a href="new.php" class="hover-1">New User</a>
            <a href="old.php" class="hover-1">Existing User</a>';
        }

        else
        {
            echo '<a href="logout.php" class="hover-1">Log Out</a>';
        }
        ?>
         

</nav>
    </header>
    <div class="doc">
        <img src="doc.png" style="width:100%;">
    <a href="new.php" class="hover-1">Book Now</a>    
    </div>

</body>
</html> 