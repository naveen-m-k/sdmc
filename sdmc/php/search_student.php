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
    <script src="../js\search_student.js"> </script>
    <link rel="stylesheet" href="../css/search_student.css">
    <link rel="stylesheet" href="../css/navbar.css">
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
        <a href="student_report.php">Student Report </a>
        <a href="update_student.php">Update Student Info </a>
        <a href="sem_result.php">Semester Results </a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
        <a href="">&nbsp;</a>
    </div>


    <div class="content">
        <form method="post" name="search_form" action="#" onsubmit="search_key()">
            <fieldset>
                <legend>
                    <h2> Search for a Student </h2>
                </legend>


                <table border="0" cellpadding="20px" cellSpacing="25px">

                    <tr>
                        <td width="15%" align="right"> <label> Name of the Student </label></td>
                        <td width="1%"> <b> : </b> </label></td>
                        <td colspan="4"> <input type="text" size="50" name="student_name" /> </td>

                    </tr>
                    <tr>
                        <td> &nbsp;</td>
                        <td> OR</td>
                        <td align="center"><input type="submit" name="search_student" value="Search"></td>
                    </tr>
                    <tr>
                        <td width="15%" align="right"> <label> Register Number </sub>
                            </label></td>
                        <td width="1%"> <b> : </b> </label></td>
                        <td colspan="4"> <input type="text" size="50" name="register_number" /> </td>

                    </tr>
            
            </table>
        </form>
    </div>
</body>

</html>
</div>
</body>

</html>
</body>

</html>





<?php

include "dbcon.php";
if (isset($_POST['search_student']))
{

    $student_name = $_POST['student_name'];
    $register_number = $_POST['register_number'];

    echo'<div class="content"> 
            
            <table width="100%" border="2px" class="student-table">
                    <tr>
                        <th> Student Number </th>
                        <th> Branch </th>
                        <th> Student Name </th>
                        <th> Father Name </th>
                        <th> Mother Name </th>
                        <th> Contact Number </th>
                        <th> Email ID </th>
                        <th> Address </th>                        
                    </tr>';

    if($student_name)
        {
            $query1 = "SELECT * FROM `student_info` WHERE `name`='$student_name'";
            $res1 = mysqli_query($con, $query1);
                if(mysqli_num_rows($res1))
                    {
                        $result = mysqli_fetch_assoc($res1);
                        echo '<tr align="center">';
                        echo '<td>'.$result['register_number'] .'</td>';
                        echo '<td>'.$result['branch'] .'</td>';
                        echo '<td>'.$result['name'] .'</td>';
                        echo '<td>'.$result['father'] .'</td>';
                        echo '<td>'.$result['mother'] .'</td>';
                        echo '<td>'.$result['mob_number_1'] .'</td>';
                        echo '<td>'.$result['email'] .'</td>';
                        echo '<td>'.$result['address'] .'</td>';
                        echo'</tr>';    
                        
                    }
                else
                    {
                        echo '<tr> 
                                    <td colspan="8" align="center"> Data not found </td>
                            </tr>';
                    }
            
        }

    if($register_number) 
        {
            $query2 = "SELECT * FROM `student_info` WHERE `register_number`='$register_number'";
                $res2 = mysqli_query($con, $query2);
                    if(mysqli_num_rows($res2))
                        {
                            $result2 = mysqli_fetch_assoc($res2);
                            echo '<tr align="center">';
                            echo '<td>'.$result2['register_number'] .'</td>';
                            echo '<td>'.$result2['branch'] .'</td>';
                            echo '<td>'.$result2['name'] .'</td>';
                            echo '<td>'.$result2['father'] .'</td>';
                            echo '<td>'.$result2['mother'] .'</td>';
                            echo '<td>'.$result2['mob_number_1'] .'</td>';
                            echo '<td>'.$result2['email'] .'</td>';
                            echo '<td>'.$result2['address'] .'</td>';
                            echo'</tr>';
                            
                        }
                    else
                        {
                            echo '<tr> 
                                        <td colspan="8" align="center"> Data not found </td>
                                </tr>';
                        }
                
        }
    
        




}

    }
else 
{
    header("location: ../index.php");
    exit();
}

?>