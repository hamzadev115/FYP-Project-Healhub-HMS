<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  doctors where contactno='$contactno' and docEmail='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['cnumber']=$contactno;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


}

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Recovery</title>

    <link rel="icon" type="images/png" href="../doctor/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .input-icon>input {
        border: 2px solid #104163;
    }

    .input-icon>input:focus {
        border: 2px solid #084D22;
    }

    p {
        font-size: 15px;
        font-weight: 500;
        color: #104163;
        font-family: 'Montserrat';
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
        padding: 8px 20px 8px 20px;
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
                    <h2> Healhub |Password Recovery</h2>
                </a>
            </div>

            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Doctor Password Recovery
                        </legend>
                        <p>
                            Please enter your Contact number and Email to recover your password.<br />

                        </p>

                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="contactno"
                                    placeholder="Registred Contact Number">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Registred Email">
                                <i class="fa fa-user"></i> </span>
                        </div>

                        <div class="form-actions">

                            <button type="submit" class="book_btn pull-right" name="submit">
                                Reset <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        <div class="new-account">
                            Already have an account?
                            <a href="index.php">
                                Log-in
                            </a>
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