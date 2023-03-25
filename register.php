<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="style.css">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
    <div style="text-align:center;border-bottom:1px solid grey;">
       <a href="HOME.php"> <img src="logo.png" alt="logo" ></a>
</div>
<br><br><br>
</body>
<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$db="medic";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$name=$_POST['name'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$diabetes=$_POST['diabetes'];
$password=$_POST['password'];
// $file=$_POST['file'];
$statusMsg = '';

// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT into appoint (`id`,`name`,`pnumber`,`gender`,`dob`,`password`,`diabetes`,`report`) VALUES ('', '$name','$phone','$gender','$dob','$password','$diabetes','".$fileName."')";
            if($conn->query($sql)){
                echo "<div class='que'><h1 style='text-align:center;'>Your Data has been uploaded successfully.<h1><br><br>";
                echo "<div class='dat'><a href='old.php'>Click Here To Login</a></div></div>";
            }else{
                $statusMsg = "File upload failed, please try again.";

            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
   echo '<div style="text-align:center;"><h2>Please select a file to upload.</h2><br><br>';
    echo "<div class='dat'><a href='new.php' style='border:2px solid black;border-radius:0px;'>Get Back</a></div></div>";
}

// Display status message
echo $statusMsg;
// $sql="INSERT INTO info (id,name,roll,age) VALUES ('','$name','$roll','$age')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   $conn->close();

?>
