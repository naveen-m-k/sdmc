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
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/search_student.css">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
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
        <form method="post" name="fees_form" action="#">
            <fieldset>
                <legend>
                    <h2> Fees details </h2>
                </legend>
                    <div class="inner_content">
                        
                        <table border="0" cellpadding="20px" cellSpacing="25px">

                            <tr>
                                <td> <label > Enter Register Number : </label></td>
                                <td colspan="4"> <input type="text" name="register_number" maxlength="10" required/> </td>
                                <td align="center"> <input type="submit" name="search_fee" value="Search"> </td>

                            </tr>

                            <tr>
                                <td> <label> Branch : </label></td>
                                <td> 
                                    <select name="semester" required> 
                                        <option value=""> --select-- </option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                        <option value="6"> 6 </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
            </fieldset>  
        </form>
    </div>

    <?php
                            include "dbcon.php";
                            if (isset($_POST['search_fee']))
                            {
                            
                                $register_number = $_POST['register_number'];
                                $query1= "SELECT `branch`,`name` FROM `student_info` WHERE `register_number` = '$register_number'";
                                $res1 = mysqli_query($con, $query1);
                                $student_name_to_display=mysqli_fetch_assoc($res1);
                                

                                
                                echo'<div class="content"> <br>'; 
                                        
                                        echo '<table border="0" cellspacing="10px" cellpadding="10px"> <tr>';
                                        echo '<td> Student Name   </td>';
                                        echo '<td> :  </td>';
                                        echo '<td>'.$student_name_to_display['name'].'</td> </tr>';
                                        echo '<tr> <td> Branch   </td>';
                                        echo '<td> :  </td>';
                                        echo '<td>'.$student_name_to_display['branch'].'</td> </tr>';
                                        echo '<tr> <td> Register Number   </td>';
                                        echo'<td> :  </td>';
                                        echo '<td>'.$register_number .'</td> </tr> </table>';
                                        
                                
                                    echo'<table width="50%" border="2px" class="student-table">
                                                <tr>
                                                    <th> transaction id </th>                        
                                                    <th> Reciept Number </th>
                                                    <th> Date </th>
                                                    <th> Fees Paid </th>
                                                </tr>';
                            
                                if($register_number)
                                    {
                                        $query1 = "SELECT *  FROM `fees_details` WHERE `register_number` = '$register_number'";
                                        $res1 = mysqli_query($con, $query1);
                                        $result=mysqli_fetch_assoc($res1);

                                            if($result)
                                                {
                                                    echo '<tr align="center">';
                                                    echo '<td>'.$result['transaction_id'] .'</td>';
                                                    echo '<td>'.$result['receipt_no'] .'</td>';
                                                    echo '<td>'.$result['date'] .'</td>';
                                                    echo '<td>'.$result['fees_paid'] .'</td>';
                                                    echo'</tr>';    
                                                    
                                                }

                                            else
                                            {
                                                echo '<tr> 
                                                            <td colspan="8" align="center"> Data not found </td>
                                                    </tr>';
                                            }
                                                                    
                                    }
                                else
                                    {
                                        echo '<tr> 
                                                    <td colspan="8" align="center"> Data not found </td>
                                            </tr>';
                                    }
                            
                                
                                
                            }
    ?>

</body>

</html>



<?php
}
else 
{
    header("location: ../index.php");
    exit();
}