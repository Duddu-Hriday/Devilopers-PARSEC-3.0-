<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='style.css'>
</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<style>
.booked 
  {
    
    background: linear-gradient(#4c07ed 0 0) left / var(--p,0) no-repeat;
    transition: .4s,background-position 0s;
    text-decoration:none ;
    color:black;
    font-weight: bold;
    /* padding:20px; */
    margin-left: 10px;
    /* border-radius: 20px; */
  }
  .booked :hover{
    --p: 100%;
    border: 1px solid black;
    /* background-position: right; */
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border-radius:20px;
  width: 100%;
}

td, th {
  border: 1px solid grey;
  text-align: left;
  padding: 12px;
}

tr:nth-child(even) {
  background-color: grey;

}
</style>
<body>
<header>
        <a href='HOME.php'><img src="logo.png" alt="logo" ></a>
        
        <?php
        session_start();
        
        if(isset($_SESSION['login_user'])){
            echo '<nav class="links" style="display: flex"><a href="logout.php" class="hover-1">Log Out</a></nav>';
        
        ?>
        
</header>
<br><br><br> 
<h1 style='text-align:center;'>Doctors Available for you</h1>
<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
// Create connection
$spl=$_POST['special'];
// echo $spl;
$conn = new mysqli($servername, $username, $password,$db);
$sql="SELECT * FROM doctors WHERE specialization = '$spl'";
$result=mysqli_query($conn,$sql);


if( $row = $result->num_rows > 0)
{   echo "<table><tr><th>Doctor Name</th><th>Specialization</th><th>Available Timings</th><th>Appointment<th></th></tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['name']."</td><td>".$row['specialization']."</td><td>".$row['avail_time']."</td><td><a class='booked' style='border:1px solid black;border-radius:10px;padding:10px;padding-top:7px;padding-bottom:7px;background-color:#4c07ed' href='booked.php'>Book</a></td></tr>";
        $_SESSION['doc_name'] = $row['name'];

    }
}
        }

        else
        {
          // echo '<nav><a href="old.php" class="hover-1">Login</a></nav>'; 
          header('Location: HOME.php');
          
        }

?>
</body>
</html>
