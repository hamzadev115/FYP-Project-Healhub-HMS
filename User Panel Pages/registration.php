<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>

    <link rel="icon" type="images/png" href="../healhub/assets/images/favicon.png">
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

    .main-login .box-register {
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
    }

    .book_btn:hover {
        background-color: #084D22;
        color: #fff;
    }

    .form-group input {
        border: 2px solid #104163 !important;
    }

    .clip-radio.radio-primary input[type="radio"]:checked+label:before {
        background: #104163;
    }

    .input-icon>input {
        border: 2px solid #104163;
    }

    .input-icon>input:focus {
        border: 2px solid #084D22;
    }
    </style>

    <script type="text/javascript">
    function valid() {
        if (document.registration.password.value != document.registration.password_again.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.registration.password_again.focus();
            return false;
        }
        return true;
    }
    </script>


</head>

<body class="login">
    <!-- start: REGISTRATION -->
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../index.php">
                    <h2>Healhub | Patient Registration</h2>
                </a>
            </div>
            <!-- start: REGISTER BOX -->
            <div class="box-register">
                <form name="registration" id="registration" method="post" onSubmit="return valid();">
                    <fieldset>
                        <legend>
                            Sign Up
                        </legend>
                        <p>
                            Enter your personal details below:
                        </p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <label class="block">
                                Gender
                            </label>
                            <div class="clip-radio radio-primary">
                                <input type="radio" id="rg-female" name="gender" value="female">
                                <label for="rg-female">
                                    Female
                                </label>
                                <input type="radio" id="rg-male" name="gender" value="male">
                                <label for="rg-male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <p>
                            Enter your account details below:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" id="email"
                                    onBlur="userAvailability()" placeholder="Email" required>
                                <i class="fa fa-envelope"></i> </span>
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password_again" name="password_again"
                                    placeholder="Password Again" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-actions">
                            <p>
                                Already have an account?
                                <a href="user-login.php">
                                    Log-in
                                </a>
                            </p>
                            <button type="submit" class="book_btn pull-right" id="submit" name="submit">
                                Submit <i class="fa fa-arrow-circle-right"></i>
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

    <script>
    function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'email=' + $("#email").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status1").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>

</body>
<!-- end: BODY -->

</html>