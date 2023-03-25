<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART-MED</title>
    <link rel="stylesheet" href="style.css">
    <style>

.credits {
        width: 100%;
        height: 250px;
        /* bottom: 0% ; */
        /* vertical-align: baseline; */
        position: relative;
        border-color: rgb(255, 255, 255);
        background-color: rgb(255, 255, 255);
    }

    .one {
        /* margin-top: 5%; */
        padding-top: 20px;
        text-align: center;
        position: relative;
        float: left;
        width: 33.33%;
        height: 100%;
        background-color: rgb(255, 255, 239);
    }

    .two {
        position: absolute;
        /* margin-top: 5%; */
        padding-top: 20px;
        width: 33.33%;
        height: 100%;
        margin-left: 33.33%;
        background-color: rgb(255, 255, 239);
    }

    .three {
        position: relative;
        /* margin-top: 5%; */
        padding-top: 20px;
        width: 33.33%;
        height: 100%;
        float: right;
        background-color: rgb(255, 255, 239);
    }

    .button {
        background-color: black;
        float: right;
        /* margin: auto; */
        /* border: none; */
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        /* display: inline-block; */
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button:hover{
        background-color: green;

    }
    </style>
</head>

<body>
    <header>
        <a href="HOME.php"><img src="logo.png"></a>
        <nav class="links" style="display: flex">
        <?php
        session_start();
        if(!isset($_SESSION['login_user']))
        {
            echo '<a href="new.php" class="hover-1" style="border:2px solid black;"><big>New User</big></a>
            <a href="old.php" class="hover-1"><big>Existing User</big></a>';
        }

        else
        {
            echo '<a href="logout.php" class="hover-1">Log Out</a>';
        }
        ?>
         

</nav>
    </header>
    <div class="doc">
        <img src="doc.png" style="width:100%;">
    <a href="new.php" class="hover-1">Book Now</a>    
    </div>
    <div class='mark' style='margin-top:20px;'>
<marquee behavior="scroll"; direction="left"  ><h1>Welcome to SMART-MED. Doctors available 24 x 7</h1></marquee>;
</div>


    <div class="credits">
        <div class="one">
            <p style="font-weight: bold;"> SMART MED <br><span style="color: rgb(185, 168, 148);">BEST ONLINE
                    APPOINTEMENT SCHEDULING PLATFORM</span></p>
            <span> info@myself.com</span>
            <br>
            <span>2023 by Smart Med</span>
        </div>

        <div class="two">
            <br><br>
            <p>This registration to enroll your multi-location private practice, clinic and hospital is verified and
                confirmed by our team in shortest time possible. For more info, Call +91 9496 947 548
            </p>
        </div>

        <div class="three">
            <p style="color: rgb(185, 168, 148); text-align: center;">YOUR GUARANTEED ONLINE APPOINTMENT</p>

            <p style="text-align: center;">With <span style="font-weight: bold;">SMART-MED<span> productivity tool, be
                        successful in avoiding unscheduled absences.
                        let our tool support you to be a leader in your medical practice.
                        The best online appointment scheduling Platform enhances your practice management with online
                        profile visibility.</p>

            <a href="devdetails.php" class="button">Contact Us</a>

        </div>

    </div>


</body>
</html> 
