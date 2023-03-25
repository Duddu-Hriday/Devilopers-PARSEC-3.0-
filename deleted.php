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
    $docname=$_POST['name'];
    $id=$_POST['id'];
    // $id=$_POST['id'];
    $conn = new mysqli($servername, $username, $password,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="DELETE FROM doctors WHERE name='$docname' and id = '$id'";
    // $result=mysqli_query($conn,$sql);
    if ($conn->query($sql) == TRUE) {
        if ($conn->affected_rows > 0) {
            echo '<div style="text-align:center;"><h1>Doctor info of '.$docname.' is deleted from Doctor Table</h1>';
        echo '<a class="main" href="admain.php">Go Home</a></div>';
        } else {
            // If no rows were affected, output a message indicating that the name was not found
            echo "<div style='text-align:center;'><h1>Doctor Name doesn't exist in table</h1><br><br>";
            echo '<a class="main" href="admain.php">Go Home</a></div>';
        }

     } 
     else {

         echo "Error deleting record: " . $conn->error;
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