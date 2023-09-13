<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healhub: Health & Wellness for ALL</title>

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
    <link rel="stylesheet" href="css/testimonial.css?v=<?php echo time(); ?>">

    <style>
    .container {
        max-width: 1200px;
    }

    .searchresult {
        margin-top: 100px;
        font-size: 25px;
        font-weight: 600;
        color: #000;
        font-family: 'Montserrat';
    }

    .cardresult {
        margin-bottom: 100px;
    }
    </style>


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <?php
    include('include/config.php');
    include('include/header.php');
    ?>

    <div class="container">
        <h2 class="searchresult text-center">
            Search result : <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                if (!empty($_POST['spec_name'])) {
                                    echo $_POST['spec_name'];
                                } else {
                                    echo 'No service selected.';
                                }
                            } else {
                                echo 'Invalid request.';
                            }
                            ?>
        </h2>
    </div>

    <!-- search-result.php -->
    <div class="container cardresult d-flex justify-content-center">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['spec_name'])) {
                $selectedService = $_POST['spec_name'];

                $conn = new PDO('mysql:host=localhost;dbname=healhub', 'root', '');
                $stmt = $conn->prepare('SELECT specilization , spec_image FROM services WHERE specilization = :selectedService');
                $stmt->bindParam(':selectedService', $selectedService);
                $stmt->execute();
                $serviceInfo = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($serviceInfo) {
                    $spec_image = $serviceInfo['spec_image'];
                    $spec_name = $serviceInfo['specilization'];

                    // Display the service information in a card
                    echo ' <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 my-5">';
                    echo '<div class="card" style="width: 24rem;">';
                    echo '<img src="healhub/uploads/' . $spec_image . '" class="card-img-top">';
                    echo '<div class="card-body">';
                    echo ' <h5 class="service-title">' . $spec_name . '</h5>';
                    echo  '<a href="healhub/user-login.php" class="btn btn-primary sbtn">Book An Appointment</a>';
                    echo ' </div>';
                    echo ' </div>';
                    echo ' </div>';
                } else {
                    echo '<p>No service found.</p>';
                }
            } else {
                echo '<p>No service selected.</p>';
            }
        } else {
            echo '<p>Invalid request.</p>';
        }
        ?>
    </div>


    <!-- Footer Start -->
    <?php
    include('include/footer.php');

    ?>

    <!-- Footer End -->

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

</body>

</html>