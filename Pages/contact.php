<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Healhub</title>

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

    <!-- Main Header -->
    <?php
include ('include/header.php');

?>
    <!-- Main Header end -->
    <!-- Hero -->
    <section class="otherpage-hero">
        <h2 class="text-center">Contact Us</h2>
    </section>


    <?php
include_once('healhub/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['contactno'];
$message=$_POST['message'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$phone','$message')");
echo "<script>alert('Thanks for Contacting us. We will be in touch within a few minutes');</script>";
echo "<script>window.location.href ='contact.php'</script>";

} ?>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3" data-aos="fade-right">
                    <form method="post">
                        <h2>Ask Your Queries</h2>
                        <hr>
                        <div class="name">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname"
                                    class="form-control input-sm" required></div>
                        </div>
                        <div class="email">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address"
                                    class="form-control input-sm" required></div>
                        </div>

                        <div class="mobile">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8"><input type="text" name="contactno" placeholder="Enter Mobile Number"
                                    class="form-control input-sm" required></div>
                        </div>

                        <div class="mesg">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"
                                    name="message" required></textarea>
                            </div>
                        </div>

                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                            <button class="submitbtn" type="submit" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3" data-aos="fade-left">
                    <section class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9042690586284!2d71.46696901448665!3d30.211279617628183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b33f3daf6e737%3A0x92a5d98d1de24498!2sLa%20Salle%20Rd%2C%20Peer%20Khurshid%20Colony%20Chah%20Usman%20Wala%2C%20Multan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1674755653816!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section>
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