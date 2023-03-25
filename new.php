<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <link rel="stylesheet" href="style1.css">

    <style>
    input {
        position: relative;
        width: 80%;
        padding: 12px 20px;
        margin: 8px 2px;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid black;
    }

    input:focus {
        outline: none;
        border-bottom: 2px solid black;
    }

    input[type="date"] {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 2px;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid black;
    }

    input[type="date"]:focus {
        border-bottom: 2px solid black;
    }

    select {
        display: block;
        width: 80%;
        padding: 12px 20px;
        margin: 8px 2px;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid black;
    }

    select:focus {
        outline: none;
        border-bottom: 2px solid black;
    }

    /* input[type="submit"] {
        position: absolute;
        bottom: 0%;
        width: 55%;
        margin-left: 22%;
        background-color: black;
        color: white;
        border-color: black;
    } */

    label {
        font-family: Verdana;
        font-size: 14px;
    }
    </style>
</head>

<body>
    <div style="text-align:center;border-bottom:1px solid grey;">
        <a href="HOME.php"><img src="logo.png" alt="logo"></a>
    </div>
    <br><br><br>
    <div class="new1">
        <div>
            <img style="margin:auto;" src="doctor.png">
        </div>
        <div class="container">
            <form action="register.php" method="POST" enctype="multipart/form-data">

                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="pnumber">Phone Number</label>
                <input id="mobval" data-parsley-type="digits" data-parsley-length="[10,10]"
                    data-parsley-length-message="Mobile number should be 10 digits" required
                    data-parsley-trigger="change" name="phone" type="text">
                <br><br>
                <label for="gender">Gender
                    <select id="gender" placeholder="Gender" name="gender">
                        <option value="1"><span style="color:rgb(72, 13, 13)">(select Gender)</span></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="any other">any other </option>
                    </select>
                </label>
                <br><br>
                <label for="dob">Date of Birth<input placeholder="dd-mm-yyyy" name="dob" type="text"
                        onfocus="this.type='date'" required></label>
                <br><br>

                <label for="password">password</label><br>
                <input type="password" id="password" name="password" required>
                <br><br>
                <label for="diabetes">Diabetes
                    <select id="diabetes" name="diabetes">
                        <option value="1"><span style="color:rgb(72, 13, 13)">(select one)</span></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </label>
                <br>
                <label for="report">Report</label><br>
                <input type="file" id="file" name="file">
                <br><br><br>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>
</body>

</html>
