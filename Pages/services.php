<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Healhub </title>

    <!-- Fav Icon -->
    <link rel="icon" type="images/png" href="images/favicon.png">
    <!-- BootStrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive.css?v=<?php echo time(); ?>">
    <!-- AIOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Header -->
    <?php
include ('include/header.php');
include('include/config.php');


?>
    <!--  Header end -->
    <!-- Hero -->
    <section class="otherpage-hero">
        <h2 class="text-center">Our Services</h2>
    </section>

    <section class="services">
        <div class="container">
            <h4 class="text-center">Services</h4>
            <h2 class="text-center">Our Clinics</h2>
            <div class="clinic">
                <div class="row">
                    <?php
                $query = "SELECT * FROM services"; 
                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $spec_image = $row['spec_image']; 
                    $specilization = $row['specilization']; 
                    echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 my-5" data-aos="fade-up">';
                    echo '<div class="card" style="width: 22rem;">';
                    echo '<img src="uploads'.$spec_image.'" class="card-img-top">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $specilization . '</h5>';
                    echo '<a href="healhub/user-login.php" class="btn btn-primary serbtn">Book An Appointment</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                mysqli_free_result($result);
                ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php
include('include/footer.php');

?>
    <!-- Footer ENd -->

    <!-- SCript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- Script Custom JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/proper.min.js.js"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 200,
        duration: 1000,
    });
    </script>
</body>

</html>