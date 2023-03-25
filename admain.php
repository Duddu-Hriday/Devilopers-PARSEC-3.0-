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
    .btns{
        width: 80%;
        display: flex;
  flex-wrap: wrap;
  justify-content: space-between;

    }
    .bttns
    {
        width: 30%;
  margin-bottom: 100px;
  margin-left:100px;
  background: linear-gradient(#4c07ed 0 0) left / var(--p,0) no-repeat;
    border: 1px solid black;
    transition: .4s,background-position 0s;
    text-decoration:none ;
    color:black;
    font-weight: bold;
    padding:20px 10px;
    border-radius: 20px;
    }
    .bttns:hover{
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
error_reporting(E_ERROR | E_PARSE);

$servername = "localhost";
$username = "root";
$password = "";
$db="medic";

session_start();
if(isset($_SESSION['admin_user']))
{
    echo "<div class='wel'><h1>Welcome Admin</h1>";
    echo "<br><br><br><div class='btns'><a class='bttns' href='patients.php'>Patients List</a>";
    echo "<a class='bttns' href='appointment.php'>Appointments Today</a>";
    echo "<a class='bttns' href='doctors.php'>Doctors List</a>";
    echo "<a class='bttns' href='addoc.php'>Add Doctor</a>";
    echo "<a class='bttns' href='editdoc.php'>Edit Doctor</a>";
    echo "<a class='bttns' href='adlogout.php'>Logout</a</div></div>";
}
else
{
    header('location:ADMIN.php');
}
// else if($_SERVER["REQUEST_METHOD"] == "POST" )
// {
// $conn = new mysqli($servername, $username, $password,$db);
// $spl='Admin';
// $password=$_POST['password'];
// $sql="SELECT * FROM my_admin WHERE name = '$spl' and password = '$password'";

// $result=mysqli_query($conn,$sql);
// if( $row = $result->num_rows > 0)
// {
//     $_SESSION['admin_user']=$password;
//     echo "<div class='wel'><h1>Welcome Admin</h1>";
//     echo "<br><br><br><div class='btns'><a class='bttns' href='patients.php'>Patients List</a>";
//     echo "<a class='bttns' href='appointment.php'>Appointments Today</a>";
//     echo "<a class='bttns' href='doctors.php'>Doctors List</a>";
//     echo "<a class='bttns' href='addoc.php'>Add Doctor</a>";
//     echo "<a class='bttns' href='editdoc.php'>Edit Doctor</a>";
//     echo "<a class='bttns' href='adlogout.php'>Logout</a</div></div>";
// }
// // $_SESSION['admin_user']='Devilopers@123';

// else
// {
//     echo "<div style='text-align:center;'><h2>Password Is Wrong...</h2><br><br>";
//     echo "<a class='main' href='ADMIN.php'><big>Click here to Go Back</big></a></div>";
// }

// }
// echo $_SESSION['admin_user'];  
// else{

// header('location:ADMIN.php');
// }
?>
</body>
</html>