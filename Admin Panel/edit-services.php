<?php
session_start();
error_reporting(0);
include('include/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {
    $id = intval($_GET['id']);
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $specilization = $_POST['specilization'];
        $spec_description = $_POST['spec_description'];
        $spec_image = "../../uploads/" . $_FILES['spec_image']['name'];
        if (is_uploaded_file($_FILES['spec_image']['tmp_name'])) {
            move_uploaded_file($_FILES['spec_image']['tmp_name'], "../../uploads/" . $_FILES['spec_image']['name']);
            $docimage = $_FILES['spec_image']['name'];
        }
    
        if ($_FILES['spec_image']['error'] > 0) {
            echo "Error uploading file!";
        }

        $sql = "UPDATE services SET specilization = '$specilization', spec_description = '$spec_description', spec_image = '$spec_image' WHERE id = '$id'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Service updated Successfully');</script>";
            echo "<script>window.location.href ='manage-services.php'</script>";
        }
    }
}

// Retrieve the service details for editing
if (isset($_GET['id'])) {
    $sid = $_GET['id'];
    $sql = "SELECT * FROM services WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Edit Services</title>

    <link rel="icon" type="images/png" href="../admin/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            color: #104163;
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
        }

        .book_btn:hover {
            background-color: #79aa2f;
            color: #fff;
        }

        .name {
            border: 2px solid #104163 !important;
            width: 100%;
            margin-bottom: 10px;
        }

        .description {
            border: 2px solid #104163 !important;
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
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
                                <h1 class="mainTitle">Admin | Edit Service Details</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Admin</span>
                                </li>
                                <li class="active">
                                    <span>Edit Service Details</span>
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
                                                <h5 class="panel-title">Edit Service</h5>
                                            </div>
                                            <div class="panel-body">

                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <label for="specilization">Service Name</label><br>
                                                    <input type="text" id="specilization" name="specilization" class="name" placeholder="Service Name Name" value="<?php echo $row['specilization']; ?>" required><br>
                                                    <label for="spec_description">Description</label><br>
                                                    <textarea id="spec_description" name="spec_description" class="description" placeholder="Service Description" required><?php echo $row['spec_description']; ?></textarea><br>
                                                    <label for="spec_image">Upload Image</label><br>
                                                    <input type="file" id="spec_image" name="spec_image" class="image" required><br><br>
                                                    <input type="submit" value="Submit" name="submit" class="book_btn">
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