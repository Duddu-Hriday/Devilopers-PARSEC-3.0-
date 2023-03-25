<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="sheet.css">
    
</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<body>

<div style="text-align:center;border-bottom:1px solid grey;">
    <img src="logo.png" alt="logo" >
</div>
<div class="first">
     <h1>Welcome Admin</h1>
     <h2>Enter Password to continue</h2>
     <form action="ADMIN.php" method="POST">
         <input type="password" name="password" placeholder="Enter Password.....">
         <input type="submit" value="continue">
     </form>
 </div> 
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
$name="Admin";
$password=$_POST['password'];
$sql = "SELECT * FROM my_admin WHERE name = '$name' and password = '$password'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1)
{
    $_SESSION['admin_user'] = $name;
    header("location: admain.php");

}

else
        {
    // header("location: old.php");
    echo '<script>alert("Invalid name or Password...Try again")</script>';


        }


}



// -------------------------------------------------------
// if(!isset($_SESSION['admin_user'])){
//     echo '
// <div class="first">
//     <h1>Welcome Admin</h1>
//     <h2>Enter Password to continue</h2>
//     <form action="adbtw.php" method="POST">
//         <input type="password" name="password" placeholder="Enter Password.....">
//         <input type="submit" value="continue">
//     </form>
// </div> 
// } ';

// }

// else
// {
//     echo '<h1>You are already Logged In</h1>';
//     echo '<a href="admain.php">Go to Main Page</a>';
// }
   ?>

</body>
</html>