<?php
session_start();
if (isset($_SESSION['user_name']))
{

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
                        <?php echo "<font color='yellow'> <b> ";
    echo $_SESSION['user_name'] . "</b> </font>"; ?> </small>
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
        <form method="post" action="#">
            <fieldset>
                <legend>
                    <h2> Student Enrollment </h2>
                </legend>


                <table border="0" cellpadding="20px" cellSpacing="25px">

                    <tr>
                        <td colspan="5" align="center">
                            <label> Admission to Branch : </label>

                            <select name="branch" required>

                                <option value="" hidden> --select-- </option>
                                <option value="automobile"> Automobile </option>
                                <option value=" Architecture "> Architecture </option>
                                <option value="Civil"> Civil </option>
                                <option value="CS"> Computer Science </option>
                                <option value="EE"> Electrical & Electronics</option>
                                <option value="EC"> Electrical & Communication</option>
                                <option value="MTT"> Machine Tool Technology </option>
                                <option value="Mechanical"> Mechanical </option>
                                <option value="Mechatronics"> Mechatronics </option>
                            </select>
                            <label> Semester : </label>
                            <select name="semester" required>
                                <option value="" hidden> --select-- </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="15%" align="right"> <label> Name of the Student &nbsp; </label></td>
                        <td width="1%"> <b> : </b> </label></td>
                        <td> <input type="text" size="40" name="student_name" required /> </td>

                        <td align="right"> <label> Register Number : </label></td>
                        <td> <input type="text" maxlength="10" name="register_number" required> </td>

                    </tr>
                    <tr>
                        <td align="right"> <label> Gender </label></td>
                        <td> <b> : </b> </label></td>
                        <td> <input type="radio" name="gender" value="MALE" required /> &nbsp; MALE &nbsp;
                            <input type="radio" name="gender" value="FEMALE" /> &nbsp; FEMALE
                        </td>

                        <td align="right"> <label> Date of Birth : </label></td>
                        <td> <input type="date" name="date_of_birth" required> </td>

                    </tr>

                    <tr>
                        <td align="right"> <label> Father Name </label></td>
                        <td> <b> : </b> </label></td>
                        <td> <input type="text" size="20" name="father_name" required /> </td>

                        <td align="right"> <label> Mother Name : </label></td>
                        <td> <input type="text" size="20" name="mother_name" required /> </td>

                    </tr>
                    <td align="right"> <label> Caste </label></td>
                    <td> <b> : </b> </label></td>
                    <td> <select name="caste" required>
                            <option value="" hidden> -- select -- </option>
                            <option value="OBC"> OBC </option>
                            <option value="Gen"> Gen </option>
                            <option value="C-I "> Category-I </option>
                            <option value="2A"> 2A </option>
                            <option value="2B"> 2B </option>
                            <option value="3A"> 3A </option>
                            <option value="3B"> 3B </option>
                        </select>

                    <td align="right"> <label> Sub Caste : </label></td>
                    <td> <input type="text" size="20" name="sub_caste" /> </td>
                    <tr>
                        <td align="right"> <label> SSLC Register Number : </label></td>
                        <td> <b> : </b> </label></td>
                        <td> <input type="text" size="11" name="sslc_register_number" /> </td>

                        <td align="right"> <label> Year of passing </label></td>
                        <td> <input type="text" size="4" name="year_of_passing" /> </td>

                    </tr>

                    <tr>
                        <td align="right"> <label> Contact Number 1 : </label></td>
                        <td> <b> : </b> </label></td>
                        <td> <input type="text" size="10" name="mobile_number_1" /> </td>

                        <td align="right"> <label> Contact Number 2 :</label></td>
                        <td> <input type="text" size="10" name="mobile_number_2" /> </td>

                    </tr>

                    <tr colspan="5" align="left">
                        <td align="right"> <label> E-Mail </label></td>
                        <td> <b> : </b> </label></td>
                        <td> <input type="email" name="email" id=""></td>

                        <td align="right"> <label> Pemanent Address : </label></td>
                        <td> <textarea name="address" rows="2" cols="20"> </textarea> </td>

                    </tr>

                    <tr>
                        <td colspan="5" align="center">
                            <input type="submit" name="add_student" Value="Add Student"> &nbsp;
                            <input type="Reset" Value="Clear">
                            </select>
                    </tr>

                </table>
                <fieldset>
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
    if (isset($_POST['add_student']))
    {
        $semester=$_POST['semester'];
        $register_number = $_POST['register_number'];
        $branch = $_POST['branch'];
        $student_name = $_POST['student_name'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $caste = $_POST['caste'];
        $sub_caste = $_POST['sub_caste'];
        $sslc_register_number = $_POST['sslc_register_number'];
        $year_of_passing = $_POST['year_of_passing'];
        $mobile_number_1 = $_POST['mobile_number_1'];
        $mobile_number_2 = $_POST['mobile_number_2'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $regd_by = $_SESSION['user_name'];

        $query1 = "SELECT `register_number` FROM `student_info` WHERE `register_number`='$register_number'";
        $res1 = mysqli_query($con, $query1);
        if (mysqli_num_rows($res1))
        {
            echo '<script> alert("Student with Register number ';
            echo $register_number;
            echo ' already exists"); </script>';
        }

        else
        {

            $query2 = "INSERT INTO `student_info` (`register_number`, `branch`, `semester` `name`, `gender`, `date_of_birth`, `father`, `mother`, `caste`, `sub-caste`, `sslc_reg_no`, `year_of_passing`, `mob_number_1`, `mob_number_2`, `email`, `address`, `regd_by`) VALUES ('$register_number', '$branch', '$semester', '$student_name', '$gender', '$date_of_birth', '$father_name', '$mother_name', '$caste', '$sub_caste', '$sslc_register_number', '$year_of_passing', '$mobile_number_1', '$mobile_number_2', '$email','$address','$regd_by');";

            $res2 = mysqli_query($con, $query2);

            if ($res2)
            {
                echo '<script> alert("Added successfully"); </script>';
            }
            else
            {
                echo '<script> alert("Something went wrong.. Try Again"); </script>';
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