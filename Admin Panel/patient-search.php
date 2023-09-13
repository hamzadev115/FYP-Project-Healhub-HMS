<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | View Patients</title>


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

    .table>thead>tr>th {
        color: #000 !important;
        font-family: 'Montserrat';
    }


    a {
        color: #104163;
    }

    h4 {
        color: #104163;
        font-size: 15px;
        font-family: 'Montserrat';
        font-weight: 500;
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

    label {
        font-weight: 400;
        color: #000;
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
                                <h1 class="mainTitle">Admin | View Patients</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Admin</span>
                                </li>
                                <li class="active">
                                    <span>View Patients</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post" name="search">

                                    <div class="form-group">
                                        <label for="doctorname">
                                            Search by Name/Mobile No.
                                        </label>
                                        <input type="text" name="searchdata" id="searchdata" class="form-control"
                                            value="" required='true'>
                                    </div>

                                    <button type="submit" name="search" id="submit" class="btn book_btn">
                                        Search
                                    </button>
                                </form>
                                <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
                                <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
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

$sql=mysqli_query($con,"select * from tblpatient where PatientName like '%$sdata%'|| PatientContno like '%$sdata%'");
$num=mysqli_num_rows($sql);
if($num>0){
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

                                                <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i
                                                        class="fa fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <?php 
$cnt=$cnt+1;
} } else { ?>
                                        <tr>
                                            <td colspan="8"> No record found against this search</td>

                                        </tr>

                                        <?php } }?>
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
    <!-- start: FOOTER -->
    <?php include('include/footer.php');?>
    <!-- end: FOOTER -->

    <!-- start: SETTINGS -->
    <?php include('include/setting.php');?>

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