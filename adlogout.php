<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="sheet.css">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<style>
    .ho1{
        background: linear-gradient(#4c07ed 0 0) left / var(--p,0) no-repeat;
    transition: .4s,background-position 0s;
    text-decoration:none ;
    color:black;
    font-weight: bold;
    padding:20px;
    margin-left: 10px;
    border:2px solid black;
    }
    .ho1:hover{
        --p: 100%;
    background-position: right;
    }
</style>
</head>
<body>
<div style="text-align:center;border-bottom:1px solid grey;">
    <img src="logo.png" alt="logo" >
</div>
<?php
session_start();
session_destroy();
session_unset();
// header('location:ADMIN.php');
echo '<br><br><div style="text-align:center;"><h1>You are Logged Out</h1><br><br>';
echo '<a href="ADMIN.php" class="ho1">Go to Home Page</a></div>'

?>
</body>
</html>