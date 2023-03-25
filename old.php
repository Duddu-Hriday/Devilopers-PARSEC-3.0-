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
    <div style="text-align:center;border-bottom:1px solid grey;">
       <a href="HOME.php"> <img src="logo.png" alt="logo" ></a>
</div>
<br><br><br>
<div class="new1">
    <div style="border:1px solid black;">
        <img src="doctor.png">
    </div>
    <div class="container">
  <form action="old.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>
    <br><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" required>
  
    <br><br>
    <label for="pnumber">Phone Number</label>
    <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number...." required>
  
    <br><br>
    <br><br>

    <div style='display:flex;'>
    <input type="submit" value="submit" name="submit">
  </form>
  <a class='hover-1' href='new.php' style='border:2px solid black;border-radius:20px;'>New User</a>
</div>
</div>
</body>

<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   else 
//   {
//     echo "conneccted";
//   }
$name=$_POST['name'];
$pass=$_POST['password'];
$sql = "SELECT * FROM appoint WHERE name = '$name' and password = '$pass'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
// echo $count;
if($count == 1)
{
    // echo "Welcome ".$name;
    // echo "Continue here to book your appointment";
       $_SESSION['login_user'] = $name;
    header("location: appoint.php");

}
else
        {
           echo '<script>alert("Invalid name or Password...Try again")</script>';
    header("location: old.php");

        }

    }
    // else
    // {
    //     header('Location: HOME.php');
    // }

?>