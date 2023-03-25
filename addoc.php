<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="sheet.css">
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
</head>
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
{ 
echo '
<div>
    <form method="POST" action="added.php">
    <label for="name"><big>Doctor Name</big></label>
    <input type="text" id="name" name="name" placeholder="Doctor Name.." required><br><br>
    <label for="specialization"><big>Specialization:<big></label>
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
  <label for="availtime"><big>Available Time:<big></label>
  <select name="availtime" placeholder="Available Time">
    <option value="7:00 am to 9:00 am">7:00 am to 9:00 am</option>
    <option value="8:00 am to 10:00 am">8:00 am to 10:00 am</option>
    <option value="9:00am to 11:00am">9:00am to 11:00am</option>
    <option value="10:00 am to 12:00 pm">10:00 am to 12:00 pm</option>
    <option value="11:00 am to 1:00 pm">11:00 am to 1:00 pm</option>
    <option value="12:00 pm to 2:00 pm">12:00 pm to 2:00 pm</option>
    <option value="1:00 pm to 3:00 pm">1:00 pm to 3:00 pm</option>
    <option value="2:00 pm to 4:00 am">2:00 pm to 4:00 am</option>
    <option value="3:00 pm to 5:00 am">3:00 pm to 5:00 am</option>
    <option value="4:00pm to 6:00am">4:00pm to 6:00am</option>
    <option value="5:00 pm to 7:00 pm">5:00 pm to 7:00 pm</option>
    <option value="6:00 pm to 8:00 pm">6:00 pm to 8:00 pm</option>
    <option value="7:00 pm to 9:00 pm">7:00 pm to 9:00 pm</option>
    <option value="8:00 pm to 10:00 pm">8:00 pm to 10:00 pm</option>
    <option value="9:00 pm to 9:00 pm">9:00 pm to 9:00 pm</option>
    <option value="10:00 pm to 12:00 am">10:00 pm to 12:00 am</option>
    <option value="11:00pm to 1:00am">11:00pm to 1:00am</option>
    <option value="12:00 am to 2:00 am">12:00 am to 2:00 am</option>
    <option value="1:00 am to 3:00 am">1:00 am to 3:00 am</option>
    <option value="2:00 pm to 4:00 am">2:00 pm to 4:00 am</option>
    <option value="3:00 am to 5:00 am">3:00 am to 5:00 am</option>
    <option value="4:00 am to 6:00 am">4:00 am to 6:00 am</option>
    <option value="5:00 am to 7:00 am">5:00 am to 7:00 am</option>
    <option value="6:00am to 8:00am">6:00am to 8:00am</option>
    
  <input type="submit" name="submit" >
    </form>
</div> ';
}
else
{
  header('location:ADMIN.php');
}
?>
</body>
</html>