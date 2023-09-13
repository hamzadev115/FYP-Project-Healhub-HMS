<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
error_reporting(0);
include('include/config.php');
if (strlen($_SESSION['id'] == 0)) {
  header('location:logout.php');
} else {

  if (isset($_POST['submit'])) {
    $docspecialization = $_POST['Doctorspecialization'];
    $docname = $_POST['docname'];
    $docaddress = $_POST['clinicaddress'];
    $docfees = $_POST['docfees'];
    $doccontactno = $_POST['doccontact'];
    $docemail = $_POST['docemail'];
    $password = md5($_POST['npass']);
    $docimage = "../../uploads/" . $_FILES['docimage']['name'];
    if (is_uploaded_file($_FILES['docimage']['tmp_name'])) {
      move_uploaded_file($_FILES['docimage']['tmp_name'], "../../uploads/" . $_FILES['docimage']['name']);
      $docimage = $_FILES['docimage']['name'];
    }

    if ($_FILES['docimage']['error'] > 0) {
      echo "Error uploading file!";
    }

    $sql = mysqli_query($con, "insert into doctors(specilization,doctorName,address,docFees,contactno,docEmail,password,docimage) values('$docspecialization','$docname','$docaddress','$docfees','$doccontactno','$docemail','$password', '$docimage')");
    if ($sql) {
      echo "<script>alert('Doctor info added Successfully');</script>";
      echo "<script>window.location.href ='manage-doctors.php'</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Add Doctor</title>

    <link rel="icon" type="images/png" href="../admin/assets/images/favicon.png">
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
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <style>
    .panel-white,
    .partition-white {
        background-color: #f5f5f5;
        position: relative;
        color: #000;
        border: 2px solid #104163;
    }

    .panel-title {
        font-size: 20px !important;
        font-weight: 600;
        color: #104163;
        font-family: 'Montserrat';
    }

    .panel-heading h2 {
        font-size: 20px;
        color: #000;
        font-family: 'Montserrat';
        font-weight: 600;
    }

    body {
        color: 000;
        height: 100%;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 500;
        background: #f7f7f8;
    }

    label {
        color: #000;
        font-weight: 500;
    }

    #page-title h1 {
        color: #000;
        font-size: 25px;
        font-weight: 600;
        font-family: 'Montserrat';
    }

    #page-title .breadcrumb {
        color: #000;
        font-size: 15px;
        font-weight: 500;
        font-family: 'Montserrat';
    }

    .breadcrumb>.active {
        color: #084D22;
    }

    #page-title .breadcrumb>li+li:before {
        color: #104163;
    }

    .book_btn {
        background-color: #104163;
        color: #fff;
        padding: 10px 40px 10px 40px;
        border: none;
        border-radius: 5px;
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .book_btn:hover {
        background-color: #084D22;
        color: #fff;
    }

    .form-group input {
        border: 2px solid #104163 !important;
    }

    .form-group select {
        border: 2px solid #104163 !important;
    }

    .form-group textarea {
        border: 2px solid #104163 !important;
    }
    </style>
    <script type="text/javascript">
    function valid() {
        if (document.adddoc.npass.value != document.adddoc.cfpass.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.adddoc.cfpass.focus();
            return false;
        }
        return true;
    }
    </script>


    <script>
    function checkemailAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#docemail").val(),
            type: "POST",
            success: function(data) {
                $("#email-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>
</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">

            <?php include('include/header.php'); ?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Admin | Add Doctor</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Admin</span>
                                </li>
                                <li class="active">
                                    <span>Add Doctor</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Add Doctor</h5>
                                            </div>
                                            <div class="panel-body">

                                                <form role="form" name="adddoc" method="post" onSubmit="return valid();"
                                                    enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="DoctorSpecialization">
                                                            Doctor Specialization
                                                        </label>
                                                        <select name="Doctorspecialization" class="form-control"
                                                            required="true">
                                                            <option value="">Select Specialization</option>
                                                            <?php $ret = mysqli_query($con, "select * from doctorspecilization");
                                while ($row = mysqli_fetch_array($ret)) {
                                ?>
                                                            <option
                                                                value="<?php echo htmlentities($row['specilization']); ?>">
                                                                <?php echo htmlentities($row['specilization']); ?>
                                                            </option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="doctorname">
                                                            Doctor Name
                                                        </label>
                                                        <input type="text" name="docname" class="form-control"
                                                            placeholder="Enter Doctor Name" required="true">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="address">
                                                            Doctor Clinic Address
                                                        </label>
                                                        <textarea name="clinicaddress" class="form-control"
                                                            placeholder="Enter Doctor Clinic Address"
                                                            required="true"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Doctor Consultancy Fees
                                                        </label>
                                                        <input type="text" name="docfees" class="form-control"
                                                            placeholder="Enter Doctor Consultancy Fees" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Doctor Contact no
                                                        </label>
                                                        <input type="text" name="doccontact" class="form-control"
                                                            placeholder="Enter Doctor Contact no" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Doctor Email
                                                        </label>
                                                        <input type="email" id="docemail" name="docemail"
                                                            class="form-control" placeholder="Enter Doctor Email id"
                                                            required="true" onBlur="checkemailAvailability()">
                                                        <span id="email-availability-status"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            Password
                                                        </label>
                                                        <input type="password" name="npass" class="form-control"
                                                            placeholder="New Password" required="required">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword2">
                                                            Confirm Password
                                                        </label>
                                                        <input type="password" name="cfpass" class="form-control"
                                                            placeholder="Confirm Password" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputimage">
                                                            Upload Doctor Image
                                                        </label>
                                                        <input type="file" name="docimage" class="form-control"
                                                            required="required">
                                                    </div>
                                                    <button type="submit" name="submit" id="submit" class="book_btn">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: BASIC EXAMPLE -->






            <!-- end: SELECT BOXES -->

        </div>
    </div>
    </div>
    <!-- start: FOOTER -->
    <?php include('include/footer.php'); ?>
    <!-- end: FOOTER -->

    <!-- start: SETTINGS -->
    <?php include('include/setting.php'); ?>

    <!-- end: SETTINGS -->
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
    <script src="vendor/selectFx/classie.js"></script>
    <script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CLIP-TWO JAVASCRIPTS -->
    <script src="assets/js/main.js"></script>
    <!-- start: JavaScript Event Handlers for this page -->
    <script src="assets/js/form-elements.js"></script>
    <script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>
<?php } ?>