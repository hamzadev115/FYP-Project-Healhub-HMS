<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
   $pres=$_POST['pres'];
   
 
      $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
    if ($query) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor | Manage Patients</title>

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
        font-size: 18px;
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
        font-family: 'Montserrat';
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
                                <h1 class="mainTitle">Doctor | Manage Patients</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Doctor</span>
                                </li>
                                <li class="active">
                                    <span>Manage Patients</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15"> <span class="text-bold">Patients</span>
                                </h5>
                                <?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                                <table border="1" class="table table-bordered">
                                    <tr align="center">
                                        <td colspan="4" style="font-size:20px;color:blue">
                                            Patient Details</td>
                                    </tr>

                                    <tr>
                                        <th scope>Patient Name</th>
                                        <td><?php  echo $row['PatientName'];?></td>
                                        <th scope>Patient Email</th>
                                        <td><?php  echo $row['PatientEmail'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope>Patient Mobile Number</th>
                                        <td><?php  echo $row['PatientContno'];?></td>
                                        <th>Patient Address</th>
                                        <td><?php  echo $row['PatientAdd'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Patient Gender</th>
                                        <td><?php  echo $row['PatientGender'];?></td>
                                        <th>Patient Age</th>
                                        <td><?php  echo $row['PatientAge'];?></td>
                                    </tr>
                                    <tr>

                                        <th>Patient Medical History(if any)</th>
                                        <td><?php  echo $row['PatientMedhis'];?></td>
                                        <th>Patient Reg Date</th>
                                        <td><?php  echo $row['CreationDate'];?></td>
                                    </tr>

                                    <?php }?>
                                </table>
                                <?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr align="center">
                                        <th colspan="8">Medical History</th>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Blood Pressure</th>
                                        <th>Weight</th>
                                        <th>Blood Sugar</th>
                                        <th>Body Temprature</th>
                                        <th>Medical Prescription</th>
                                        <th>Visit Date</th>
                                    </tr>
                                    <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php  echo $row['BloodPressure'];?></td>
                                        <td><?php  echo $row['Weight'];?></td>
                                        <td><?php  echo $row['BloodSugar'];?></td>
                                        <td><?php  echo $row['Temperature'];?></td>
                                        <td><?php  echo $row['MedicalPres'];?></td>
                                        <td><?php  echo $row['CreationDate'];?></td>
                                    </tr>
                                    <?php $cnt=$cnt+1;} ?>
                                </table>

                                <p align="center">
                                    <button class="book_btn waves-effect waves-light w-lg" data-toggle="modal"
                                        data-target="#myModal">Add Medical History</button>
                                </p>

                                <?php  ?>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-bold" id="exampleModalLabel">Add Medical
                                                    History</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                                    <form method="post" name="submit">

                                                        <tr>
                                                            <th>Blood Pressure :</th>
                                                            <td>
                                                                <input name="bp" placeholder="Blood Pressure"
                                                                    class="form-control wd-450" required="true">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Blood Sugar :</th>
                                                            <td>
                                                                <input name="bs" placeholder="Blood Sugar"
                                                                    class="form-control wd-450" required="true">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Weight :</th>
                                                            <td>
                                                                <input name="weight" placeholder="Weight"
                                                                    class="form-control wd-450" required="true">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Body Temprature :</th>
                                                            <td>
                                                                <input name="temp" placeholder="Blood Sugar"
                                                                    class="form-control wd-450" required="true">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Prescription :</th>
                                                            <td>
                                                                <textarea name="pres" placeholder="Medical Prescription"
                                                                    rows="12" cols="14" class="form-control wd-450"
                                                                    required="true"></textarea>
                                                            </td>
                                                        </tr>

                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="book_btn">Submit</button>

                                                </form>
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
                <!-- end: FOOTER -->

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
<?php }  ?>