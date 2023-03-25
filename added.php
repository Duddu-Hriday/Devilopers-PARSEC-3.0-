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
<style>
        .h1 {
    
    background: linear-gradient(#4c07ed 0 0) left / var(--p,0) no-repeat;
    transition: .4s,background-position 0s;
    text-decoration:none ;
    color:black;
    font-weight: bold;
    padding:20px;
    margin-left: 10px;
    border:2px solid black;
    padding:15px;
    padding-bottom: -10%;
    border-radius: 20px;
    
  }
  .h1:hover {
    --p: 100%;
    background-position: right;
  }
  .headd{
    display: flex;
justify-content: space-between;
align-items: center;
/* position: sticky; */
padding: 0px 10%;
flex-wrap: wrap;
border-bottom: 2px solid rgb(201, 191, 191);
  }

        </style>
<body>
<div class='headd'>
    <a href='#'><img src="logo.png" alt="logo" ></a>
    <nav class="links" style="display: flex">
    <a href='admain.php' class='h1'>Back</a>
    <a href='adlogout.php' class='h1'>Logout</a>
    </nav>
</div>
<br><br>
<div>

<?php
session_start();
if(isset($_SESSION['admin_user']))
{ 
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$docname=$_POST['name'];
$special=$_POST['special'];
$availtime=$_POST['availtime'];

$sql = "INSERT into doctors (`name`,`specialization`, `avail_time`) VALUES ('$docname','$special','$availtime')";
if($conn->query($sql)){
    echo "<br><br><div style='text-align:center;'><h1>You have successfully Entered Data of new Doctor</h1><br><br>";
    echo "<a href='admain.php' class='main' >Home Page</a></div>";
}
}
else
{
    header('location:ADMIN.php');
}
?>
</div>
</body>
</html>