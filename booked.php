<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <a href='HOME.php'><img src="logo.png" alt="logo" ></a>
        <nav class="links" style="display: flex">
        <?php
     
            echo '<a href="logout.php" class="hover-1">Log Out</a>';
        
        ?>
        </nav>
    </header>
<?php
session_start();
if(isset($_SESSION['login_user'])){
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
$conn = new mysqli($servername, $username, $password,$db);

$patname=$_SESSION['login_user'];
$docname=$_SESSION['doc_name'];

$sql = "INSERT into booked (`id`,`docname`,`patname`) VALUES ('', '$docname','$patname')";
if ($conn->query($sql))
{
    echo "<div style='padding:30px 30px;border:1px solid black;text-align:center;'><big>Dear <b>".$patname."</b> , Your Appointment has been fixed with <b>".$docname. "</b> . Make Sure to be on time</big></div>";
}
// echo $patname."  ".$docname;
}
else
{
    header('location: HOME.php');
}  
?>
<br><br><br>