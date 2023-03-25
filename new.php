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
       <a href='HOME.php'> <img src="logo.png" alt="logo" ></a>
</div>
<br><br><br>
<div class="new1">
    <div style="border:1px solid black;">
        <img src="doctor.png">
    </div>
    <div class="container">
  <form action="register.php" method="POST" enctype="multipart/form-data">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>
    <br><br>
    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="Your Age.." required>
    <br><br>
    <label for="password">password</label>
    <input type="password" id="password" name="password" placeholder="Enter a password (Remember it!).." required>
    <br><br>
    <label for="diabetes">Diabetes</label><br>
    <br><br>

    <input type="radio"  class="diabet" id="yesd" name="diabetes" value="yes" >Yes
    <br><br>
    <input type="radio"  class="diabet" id="nod" name="diabetes" value="no">No
<br><br>
    <label for="report">Report</label><br><br>
    <input type="file" id="file" name="file">
    <br><br><br><br>

    <div style='display:flex;'>
    <input type="submit" value="submit" name="submit">
  </form>
  
  <a class='hover-1' href='old.php' style='border:2px solid black;border-radius:20px;'>Existing User</a></div>
</div>
</div>
</body>
</html>