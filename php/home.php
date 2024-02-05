<?php
session_start();
    if(isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CBKPC | Student Portal - HOME </title>
    <link rel="icon" href="../image\logo.png" type="image/png">
    <script src="../js\time.js"> </script>
    <script src="../js\home.js"> </script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
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
        <!-- <a href="student_report.php">Student Report </a> -->
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
    </div>


    <div class="content">
        <h2> REPORT TO SHOW HERE </h2>

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