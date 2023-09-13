<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reg Users | View Medical History</title>

    <link rel="icon" type="images/png" href="../healhub/assets/images/favicon.png">
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
    #page-title h1 {
        color: #000;
        font-size: 25px;
        font-weight: 600;
        font-family: 'Montserrat';
    }

    #page-title .breadcrumb {
        color: #000;
        font-size: 15px;
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .breadcrumb>.active {
        color: #104163;
    }

    #page-title .breadcrumb>li+li:before {
        color: #104163;
    }

    .table>thead>tr>th {
        color: #000 !important;
        font-family: 'Montserrat';
    }

    a {
        color: #104163;
    }

    a:hover {
        color: #084D22;
    }

    .table>thead>tr>th {
        color: #000 !important;
        font-family: 'Montserrat';
    }

    .table tbody>tr>td {
        font-size: 14px;
        font-weight: 500;
        font-family: 'Montserrat';
    }

    .table thead tr {
        font-size: 14px;
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
                                <h1 class="mainTitle">Users | Medical History</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Users</span>
                                </li>
                                <li class="active">
                                    <span>Medical History</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <table class="table table-hover" id="sample-table-1">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Patient Name</th>
                                        <th>Patient Contact Number</th>
                                        <th>Patient Gender </th>
                                        <th>Creation Date </th>
                                        <th>Updation Date </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$uid=$_SESSION['id'];
$sql=mysqli_query($con,"select tblpatient.* from tblpatient join users on users.email=tblpatient.PatientEmail where users.id='$uid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
                                    <tr>
                                        <td class="center"><?php echo $cnt;?>.</td>
                                        <td class="hidden-xs"><?php echo $row['PatientName'];?></td>
                                        <td><?php echo $row['PatientContno'];?></td>
                                        <td><?php echo $row['PatientGender'];?></td>
                                        <td><?php echo $row['CreationDate'];?></td>
                                        <td><?php echo $row['UpdationDate'];?>
                                        </td>
                                        <td>

                                            <a href="view-medhistory.php?viewid=<?php echo $row['ID'];?>"><i
                                                    class="fa fa-eye"></i></a>

                                        </td>
                                    </tr>
                                    <?php 
$cnt=$cnt+1;
 }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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