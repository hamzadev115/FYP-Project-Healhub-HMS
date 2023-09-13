<?php
session_start();
include("include/config.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$uname=$_POST['username'];
$dpassword=md5($_POST['password']);	
$ret=mysqli_query($con,"SELECT * FROM doctors WHERE docEmail='$uname' and password='$dpassword'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['dlogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uid=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
//Code Logs
$log=mysqli_query($con,"insert into doctorslog(uid,username,userip,status) values('$uid','$uname','$uip','$status')");

header("location:dashboard.php");
}
else
{

$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into doctorslog(username,userip,status) values('$uname','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
header("location:index.php");

}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor Login | Healhub</title>

    <link rel="icon" type="images/png" href="../doctor/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <style>
    h2 {
        font-size: 25px;
        font-weight: 600;
        color: #104163;
        font-family: 'Montserrat';
    }

    p {
        font-size: 15px;
        font-weight: 500;
        color: #104163;
        font-family: 'Montserrat';
    }

    .input-icon>input {
        border: 2px solid #104163;
    }

    .input-icon>input:focus {
        border: 2px solid #084D22;
    }

    .main-login .copyright {
        font-size: 15px;
        font-weight: 500;
        color: #104163;
        font-family: 'Montserrat';
    }

    fieldset legend {
        font-size: 15px;
        font-weight: 500;
        color: #104163;
        font-family: 'Montserrat';
    }

    fieldset {
        background: #f5f5f5;
        border: 2px solid #104163;
        border-radius: 5px;
        margin: 20px 0 20px 0;
        padding: 25px;
        position: relative;
    }

    .main-login .box-login {
        background-color: #f5f5f5;
    }

    .input-icon>[class*="fa-"],
    .input-icon>[class*="ti-"] {
        bottom: 0;
        color: #104163;
        display: inline-block;
    }

    .main-login .new-account {
        color: #000;
    }

    a {
        color: #104163;
    }

    a:hover,
    a:focus,
    a:active {
        color: #084D22;
    }

    .book_btn {
        background-color: #104163;
        color: #fff;
        padding: 10px 30px 10px 30px;
        border: none;
        border-radius: 5px;
        font-size: 15px;
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .book_btn:hover {
        background-color: #084D22;
        color: #fff;
    }
    </style>
</head>

<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../../index.php">
                    <h2> Healhub | Doctor Login</h2>
                </a>
            </div>

            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your name and password to log in.<br />
                            <span
                                style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                                <i class="fa fa-user"></i> </span>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password"
                                    placeholder="Password">
                                <i class="fa fa-lock"></i>
                            </span>
                            <a href="forgot-password.php">
                                Forgot Password ?
                            </a>
                        </div>
                        <div class="form-actions">

                            <button type="submit" class="book_btn pull-right" name="submit">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>


                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Healhub</span>.
                    <span>All rights reserved</span>
                </div>


            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/login.js"></script>
    <script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
    </script>

</body>
<!-- end: BODY -->

</html>