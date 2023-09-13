<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

if(isset($_POST['submit']))
{	
	$eid=$_GET['editid'];
	$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$patage=$_POST['patage'];
$medhis=$_POST['medhis'];
$sql=mysqli_query($con,"update tblpatient set PatientName='$patname',PatientContno='$patcontact',PatientEmail='$patemail',PatientGender='$gender',PatientAdd='$pataddress',PatientAge='$patage',PatientMedhis='$medhis' where ID='$eid'");
if($sql)
{
echo "<script>alert('Patient info updated Successfully');</script>";
header('location:manage-patient.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor | Add Patient</title>

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

    .panel-heading h5 {
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

    .form-group input {
        border: 2px solid #104163 !important;
    }

    .form-group textarea {
        border: 2px solid #104163 !important;
    }

    .input-icon>input {
        border: 2px solid #104163;
    }

    .input-icon>input:focus {
        border: 2px solid #084D22;
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

    a {
        color: #104163;
    }

    a:hover {
        color: #084D22;
    }

    .book_btn {
        background-color: #104163;
        color: #fff;
        padding: 10px 40px 10px 40px;
        border: none;
        border-radius: 5px;
        font-size: 15px;
        font-weight: 500;
    }

    .book_btn:hover {
        background-color: #084D22;
        color: #fff;
    }
    </style>


</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php');?>
        <div class="app-content">
            <?php include('include/header.php');?>

            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Patient | Add Patient</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Patient</span>
                                </li>
                                <li class="active">
                                    <span>Add Patient</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Add Patient</h5>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" name="" method="post">
                                                    <?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblpatient where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                                    <div class="form-group">
                                                        <label for="doctorname">
                                                            Patient Name
                                                        </label>
                                                        <input type="text" name="patname" class="form-control"
                                                            value="<?php  echo $row['PatientName'];?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Patient Contact no
                                                        </label>
                                                        <input type="text" name="patcontact" class="form-control"
                                                            value="<?php  echo $row['PatientContno'];?>" required="true"
                                                            maxlength="10" pattern="[0-9]+">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Patient Email
                                                        </label>
                                                        <input type="email" id="patemail" name="patemail"
                                                            class="form-control"
                                                            value="<?php  echo $row['PatientEmail'];?>" readonly='true'>
                                                        <span id="email-availability-status"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Gender: </label>
                                                        <?php  if($row['Gender']=="Female"){ ?>
                                                        <input type="radio" name="gender" id="gender" value="Female"
                                                            checked="true">Female
                                                        <input type="radio" name="gender" id="gender" value="male">Male
                                                        <?php } else { ?>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="Male"
                                                                checked="true">Male
                                                            <input type="radio" name="gender" id="gender"
                                                                value="Female">Female
                                                        </label>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">
                                                            Patient Address
                                                        </label>
                                                        <textarea name="pataddress" class="form-control"
                                                            required="true"><?php  echo $row['PatientAdd'];?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Patient Age
                                                        </label>
                                                        <input type="text" name="patage" class="form-control"
                                                            value="<?php  echo $row['PatientAge'];?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Medical History
                                                        </label>
                                                        <textarea type="text" name="medhis" class="form-control"
                                                            placeholder="Enter Patient Medical History(if any)"
                                                            required="true"><?php  echo $row['PatientMedhis'];?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Creation Date
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php  echo $row['CreationDate'];?>" readonly='true'>
                                                    </div>
                                                    <?php } ?>
                                                    <button type="submit" name="submit" id="submit" class="book_btn">
                                                        Update
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
        </div>
    </div>
    </div>
    <!-- start: FOOTER -->
    <?php include('include/footer.php');?>
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