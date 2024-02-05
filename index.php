<!DOCTYPE html>
<html lang="en">

<head>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <script>
    window.history.backward();
    </script>
    <link rel="shortcut icon" href="image/title_logo.png" type="image/png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="js/login.js"></script>
    <title>Login | CBK Student Portal</title>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col1">
                <img src="image/logo.png" height="115px" width="115px">

            </div>


            <div class="col2">
                <br>
                <h2> KLE Society's </h2>
                <h1> C. B. KORE POLYTECHNIC, CHIKODI. </h1>

            </div>


        </div>
    </div>
    <div class="formname">
        STUDENT PORTAL
    </div>

    <div class="form">

        <form action="php/login.php" method="post">

            <h3>Login</h3>
            <?php if (isset($_GET['error'])) { ?>
            <div class="error"><?php echo $_GET['error']; ?> </div>
            <?php } ?>

            <div class="logintype">
                <br> <input type="radio" name="logintype" value="student" class="logintype"> Student
                <input type="radio" name="logintype" value="staff" class="logintype"> Staff
            </div>

            <label for="username">Username</label>
            <input type="text" placeholder="user name" name="username" id="username" onfocus="userclr()" required oninvalid="alert('Username required');" onblur="original()">

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" onfocus="pwdclr()" required oninvalid="alert('Password required');" onblur="original()">

            <input type="submit" id="button1" value="Login" onmouseover="loginBtnClr()" onmouseout="loginOriginal()"
                href="admin.html">
            <input type="reset" id="button2" value="Clear" onmouseover="resetBtnClr()" onmouseout="resetOriginal()">
            <br>



        </form>

    </div>
    <footer>
        footer

    </footer>


</body>

</html>