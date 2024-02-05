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
                    <h2> Update Student Info </h2>
                </legend>


                <table border="0" cellpadding="20px" cellSpacing="25px">

                    <tr>
                        <td>
                            <label> Register Number : </label>
                        </td>
                        <td> : </td>
                        <td> <input type="text" name="register_number" maxlength="10" placeholder="Register Number"
                                required />
                            <input type="submit" name="search_student" value="Search">

                        </td>
                        <td align="right">
                            <label> Semester : </label>
                        </td>
                        <td>
                            <select name="semester" required>
                                <option value="" selected disabled> -- select -- </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3</option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                            </select>
                        </td>
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
    
    if (isset($_POST['search_student']))
    {
        $register_number = $_POST['register_number'];
        $query1 = "SELECT * FROM `student_info` WHERE `register_number`='$register_number'";
        $res1 = mysqli_query($con, $query1);
        $student_data=mysqli_fetch_assoc($res1);
        $row = mysqli_num_rows($res1);
        if ($row)
        {   
?>
            <form action="#" method="POST"> 

            <table border="0" cellpadding="20px" cellSpacing="25px">
                            <tr>
                                <td width="15%" align="right"> <label> Name of the Student &nbsp; </label></td>
                                <td width="1%"> <b> : </b> </label></td>
                                <td> <input type="text" size="40" name="student_name" value="<?php echo $student_data['name']; ?>" required /> </td>
                                <td align="right"> <label> Register Number : </label> </td>
                                <td> <input type="text" name="register_number" maxlength="10" value="<?php echo $register_number ; ?>" readonly="readonly" /> </td>                  

                            </tr>
                            <tr>
                                <td align="right"> <label> Gender </label></td>
                                <td> <b> : </b> </label></td>
                                <td> <input type="radio" name="gender" value="MALE" <?php echo $student_data['gender']=="MALE"?'checked':''; ?> required /> &nbsp; MALE &nbsp;
                                    <input type="radio" name="gender" value="FEMALE"<?php echo $student_data['gender']=="FEMALE"?'checked':''; ?> /> &nbsp; FEMALE
                                </td>

                                <td align="right"> <label> Date of Birth : </label></td>
                                <td> <input type="date" name="date_of_birth" value="<?php echo $student_data['date_of_birth']; ?>" required> </td>

                            </tr>

                            <tr>
                                <td align="right"> <label> Father Name </label></td>
                                <td> <b> : </b> </label></td>
                                <td> <input type="text" size="20" name="father_name" value="<?php echo $student_data['father']; ?>" required /> </td>

                                <td align="right"> <label> Mother Name : </label></td>
                                <td> <input type="text" size="20" name="mother_name" value="<?php echo $student_data['mother']; ?>" required /> </td> 

                            </tr>
                            <td align="right"> <label> Caste </label></td>
                            <td> <b> : </b> </label></td>
                            <td> <select name="caste" required>
                                
                                <option value="" hidden>  --Select-- </option>
                                <option value="OBC" <?php echo $student_data['caste']=="OBC"?'selected':''; ?>>  OBC </option>
                                <option value="Gen" <?php echo $student_data['caste']=="Gen"?'selected':''; ?>>  Gen </option>
                                <option value="C-I" <?php echo $student_data['caste']=="C-I"?'selected':''; ?>>  Category-I </option>
                                <option value="2A" <?php echo $student_data['caste']=="2A"?'selected':''; ?>>  2A </option>
                                <option value="2B" <?php echo $student_data['caste']=="2B"?'selected':''; ?>>  2B </option>
                                <option value="3A" <?php echo $student_data['caste']=="3A"?'selected':''; ?>>  3A </option>
                                <option value="3B" <?php echo $student_data['caste']=="3B"?'selected':''; ?>>  3B </option>
                                </select>

                            <td align="right"> <label> Sub Caste : </label></td>
                            <td> <input type="text" size="20" name="sub_caste" value="<?php echo $student_data['sub-caste']; ?>"/> </td>
                            <tr>
                                <td align="right"> <label> SSLC Register Number : </label></td>
                                <td> <b> : </b> </label></td>
                                <td> <input type="text" maxlength="11" value="<?php echo $student_data['sslc_reg_no']; ?>" name="sslc_register_number" /> </td>

                                <td align="right"> <label> Year of passing </label></td>
                                <td> <input type="text" size="4" value="<?php echo $student_data['year_of_passing']; ?>" name="year_of_passing" /> </td>

                            </tr>

                            <tr>
                                <td align="right"> <label> Contact Number 1 : </label></td>
                                <td> <b> : </b> </label></td>
                                <td> <input type="text" maxlength="10" value="<?php echo $student_data['mob_number_1']; ?>" name="mobile_number_1" /> </td>

                                <td align="right"> <label> Contact Number 2 :</label></td>
                                <td> <input type="text" maxlength="10" value="<?php echo $student_data['mob_number_2']; ?>" name="mobile_number_2" /> </td>

                            </tr>

                            <tr colspan="5" align="left">
                                <td align="right"> <label> E-Mail </label></td>
                                <td> <b> : </b> </label></td>
                                <td> <input type="email" name="email" value="<?php echo $student_data['email']; ?>" ></td>

                                <td align="right"> <label> Pemanent Address : </label></td>
                                <td> <textarea name="address" rows="2" cols="20"> <?php echo $student_data['address']; ?> </textarea> </td>

                            </tr>

                            <tr>
                                <td colspan="5" align="center">
                                    <input type="submit" name="update_student" Value="Update Student"> &nbsp;
                                    <input type="Reset" Value="Clear">
                                    </select>
                            </tr>

                    </table>
            </form>
                        
<?php 
}
else
    {
        echo '<script> alert("Invalid Register Number"); </script>';
    }
    
    }
    
        if (isset($_POST['update_student']))
        {
            $register_number=$_POST['register_number'];
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
    
            $update_query = "UPDATE `student_info` SET `name` = '$student_name', `gender` = '$gender', `date_of_birth` = '$date_of_birth', `father` = '$father_name', `mother` = '$mother_name', `caste` = '$caste', `sub-caste` = '$sub_caste', `sslc_reg_no` = '$sslc_register_number', `year_of_passing` = '$year_of_passing', `mob_number_1` = '$mobile_number_1', `mob_number_2` = '$mobile_number_2', `email` = '$email', `address` ='$address' WHERE `student_info`.`register_number` = '$register_number'";

                $update_res = mysqli_query($con, $update_query);
    
                if ($update_res)
                {
                    echo '<script> alert("Student data updated successfully"); </script>';
                }
                else
                {
                    echo '<script> alert("Something went wrong.. Try Again"); </script>';
                }
    
            
                                
        }
?>

<?php
}

    else
    {
        header("location: ../index.php");
        exit();
    }

?>