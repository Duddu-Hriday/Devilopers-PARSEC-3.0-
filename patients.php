<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="sheet.css">
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
</head>
<body>

<div class='headd'>
    <a href='#'><img src="logo.png" alt="logo" ></a>
    <nav class="links" style="display: flex">
    <a href='admain.php' class='h1'>Back</a>
    <a href='adlogout.php' class='h1'>Logout</a>
    </nav>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
session_start();
// if(!isset($_SESSION['admin_user']))
// {
//     header('location:ADMIN.php');
// }
// else
// {
if(isset($_SESSION['admin_user']))
{    
$conn = new mysqli($servername, $username, $password,$db);
$sql="SELECT * FROM appoint ";
$result=mysqli_query($conn,$sql);
if( $row = $result->num_rows > 0)
{   echo "<table><tr><th>Patient Name</th><th>Phone Number</th><th>Gender</th><th>Date of Birth</th><th>Diabetes</th><th>Report</th><th>Dowload</th></tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['name']."</td><td>".$row['pnumber']."</td><td>".$row['gender']."</td><td>".$row['dob']."</td><td>".$row['diabetes']."</td><td>".$row['report']."</td><td><a class='main' href='images/".$row['report']."'>Download</a></td></tr>";
    }
}
}
else
{
    header('location:ADMIN.php');
}
?>
</body>
</html>
