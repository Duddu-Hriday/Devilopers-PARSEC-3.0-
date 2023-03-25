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
            session_start();
            if(isset($_SESSION['login_user'])){
            echo '<a href="logout.php" class="hover-1">Log Out</a></nav>';
        
        ?>
        
    </header>
<br><br><br>

    <?php

    echo "<div><h1 style='text-align:center;'>Welcome ". $_SESSION['login_user']."</h1>";
 
    echo '
</div>
<div>
    <form action="next.php" method="POST">
    <label for="specialization">Specialization:</label>
  <select name="special" placeholder="Specialization">
    <option name ="Cardiologist" value="Cardiologist">Cardiologist</option>
    <option value="Anesthesiology">Anesthesiology</option>
    <option value="ENT">ENT</option>
    <option value="Orthopaedics">Orthopaedics</option>
    <option value="Ophthalmology">Ophthalmology</option>
    <option value="Paediatrician">Paediatrician</option>
    <option value="Dermatology">Dermatology.</option>
    <option value="general surgery">general surgery</option>

  </select>
  <br><br>
  <input type="submit" name="submit" >
    </form>
</div>
';
   }

   else
   {
    header('location:HOME.php');
   }
    ?>
</body>

</html>