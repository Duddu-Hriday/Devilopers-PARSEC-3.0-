<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="sheet.css">
    
</head>
<body>
<div style="text-align:center;border-bottom:1px solid grey;">
    <a href='#'><img src="logo.png" alt="logo" ></a>
</div>
<?php
// Include the database configuration file
// include 'dbConfig.php';
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
session_start();
$report=$_SESSION['report'];
echo $report;
$conn = new mysqli($servername, $username, $password,$db);
// Get images from the database
$query = $conn->query("SELECT * FROM appoint WHERE report = '$report' ");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'images/'.$report;
?>
    <img src="<?php echo $imageURL; ?>" alt="" style='width:25%'/>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
</body>
</html>