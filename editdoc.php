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

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  input[type=number], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  input[type=submit] {
    /* background-color: #251189;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer; */
    background: linear-gradient(#4c07ed 0 0) left / var(--p,0) no-repeat;
    transition: .4s,background-position 0s;
    text-decoration:none ;
    color:black;
    font-weight: bold;
    padding:20px 30px;
    margin-left: 10px;
    /* border-radius: 20px; */
  }
  
  input[type=submit]:hover {
    /* background-color: #45a049; */
    --p: 100%;
    background-position: right;
  }
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
<?php
session_start();
if(isset($_SESSION['admin_user']))
{ echo '
<div>
    <form method="POST" action="deleted.php">
    <label for="name">Doctor Name</label>

    <input type="text" id="name" name="name" placeholder="Doctor Name...." required>
    <br><br>
    <label for="id">Id</label>

    <input type="number" id="id" name="id" placeholder="Doctor Id" required>
    <br><br>
    
    <div style="text-align:center;"><input type="submit" value="submit" name="submit"></div>
    </form>
</div>';
}
else
{
  header('location:ADMIN.php');
}
?>
</body>
</html>