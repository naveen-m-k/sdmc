<?php
session_start();
    if(isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CBKPC | Student Portal - HOME </title>
    <link rel="icon" href="../image\logo.png" type="image/png">
    <link rel="stylesheet" href="../css/change_password.css">
    <script src="../js\time.js"> </script>
    <script src="../js\home.js"> </script>
    <link rel="stylesheet" href="../css/enrollment.css">
    <link rel="stylesheet" href="../css/change_password.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col1">
                <img src="../image/logo.png" height="115px" width="115px">
            </div>
            <div class="col2">
                <br>
                <h2> KLE Society's </h2>
                <h1> C. B. KORE POLYTECHNIC, CHIKODI. </h1>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="formname">
        <table width="100%">
            <tr>
                <td width="25%" align="left">
                    <small> &nbsp; Welcome
                        <?php echo "<font color='yellow'> <b> "; echo $_SESSION['user_name']."</b> </font>"; ?> </small>
                </td>
                <td width="50%" align="center"> <span class="header"> <b> STUDENT PORTAL </b> </span>
                </td>
                <td width="5%" align="center">

                    <div class="dropdown">
                        <button class="dropbtn"><img src="../image\setting.png" height="20px" width="20px"></button>
                        <div class="dropdown-content">
                            <small>
                                <a href="change_password.php">Change Password</a>
                                <a href="logout.php">Logout</a>
                            </small>
                        </div>
                    </div>
                    </small>
    </div>
    </td>
    <td width="20%" align="center">
        <small>
            Date :
            <?php $today = date("jS F Y "); 
			echo $today;
			?>
            | <span id="hours">00</span>
            <span>:</span>
            <span id="minutes">00</span>
            <span>:</span>
            <span id="seconds">00</span>
            <span id="session">AM</span>
        </small> &nbsp;
    </td>
    </tr>
    </table>
    </div>
    </div>
    <div class="navbar">
        <a href="home.php"> Home </a>
        <a href="student_enrollment.php"> Student Enrollment </a>
        <a href="add_attendance.php">Add Attendance</a>
        <a href="fee_details.php">Fee Details</a>
        <a href="add_ia_marks.php">Add IA Marks </a>
        <a href="search_student.php">Search for a Student </a>
        <a href="update_student.php">Update Student Info </a>
        <a href="sem_result.php">Semester Results </a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
    </div>


    <div class="content">


        <div class="form">

            <form action="#" method="post">

                <label for="old_password">Old Password &nbsp;  </label>
                <input type="password" placeholder="Old Password" name="old_password" id="old_password" reqruired>
                <label for="password">&nbsp; New Password &nbsp;  </label>
                <input type="password" placeholder="New Password" name="new_password" id="new_password" reqruired>
                <label for="password">&nbsp;  Confirm Password &nbsp;  </label>
                <input type="password" placeholder="Confirm Password" name="confirm_new_password" id="confirm_new_pasword" reqruired>

                <input type="submit" class="btn" id="button1" value="Change Password" >
                    
                
                <br>



            </form>

        </div>




    </div>
</body>

</html>
</div>
</body>

</html>
</body>

</html>



<?php
}
else 
{
    header("location: ../index.php");
    exit();
}