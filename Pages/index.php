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

    <!-- AIOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <?php
    include('include/config.php');
    include('include/header.php');

    ?>

    <!-- Slider STart -->
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="images/slide 1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-capitalize fw-bold fade-up-animation"
                        style="margin-bottom:20px; font-size:25px; text-align:left;">
                        Healhub</h2>
                    <p class="fade-left-animation" style="margin-bottom:20px; text-align:left;">World-Class expertise
                        and a legacy
                        of healthcare excellence.<br>
                        To be the Best Hospital in Pakistan you must go Beyond Healthcare. <br>Welcome to Healhub
                        Pakistan..</p>
                    <a href="about.php" class="sliderbtn zoom-in-animation"> Read More</a>
                </div>
            </div>
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="images/Slide 2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-capitalize fw-bold fade-up-animation"
                        style="margin-bottom:20px; font-size:25px; text-align:left;">
                        Beyond Healthcare
                    </h2>
                    <p class="fade-left-animation" style="text-align:left;">State-of-the-art technology, latest
                        innovative techniques, personalised
                        patient experiences.<br>
                        A
                        multi-speciality hospital combining comfort, convenience & sophistication for every patient</p>
                    <a href="about.php" class="sliderbtn zoom-in-animation"> Read More</a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Slider end -->
    <!-- Card -->
    <section class="maincard">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-right">
                    <div class="topcard text-center">
                        <div class="icon-box">
                            <img src="images/icon1.svg">
                        </div>
                        <h2>
                            Experienced Staff
                        </h2>
                        <p>We have the qualified and experienced staff that will take care of you in safe hands
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-up">
                    <div class="topcard text-center">
                        <div class="icon-box">
                            <img src="images/icon3.svg">
                        </div>
                        <h2>
                            Eassy Appointment
                        </h2>
                        <p>We are available 24/7 for you. You can easly get an appointment from our qualified
                            staff
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-left">
                    <div class="topcard text-center">
                        <div class="icon-box">
                            <img src="images/icon2.svg">
                        </div>
                        <h2>
                            Latest Technology
                        </h2>
                        <p>State-of-the-art technology, latest innovative techniques, patient
                            experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search form -->
    <div class="container find-from">
        <h4 class="text-center search">Search</h4>
        <h2 class="text-center find">Find A Doctor</h2>
        <form class="form-s" action="search-result.php" method="POST">
            <label for="option" class="select">Select a Service:</label>
            <select name="spec_name" id="option">
                <option value="">Select a service</option>
                <?php
                    $sql = "SELECT specilization FROM services";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $spec_name = $row['specilization'];
                        echo "<option value='$spec_name'>$spec_name</option>";
                    }
                    ?>

            </select>
            <input type="submit" value="Search" class="searchbtn">
        </form>
    </div>
    <!-- About Section-->
    <section class="about text-center" data-aos="fade-in">
        <div class="container">
            <h4>About </h4>
            <h2>
                Healhub Hospital
            </h2>
            <p>At Healhub Hospital, we are passionate about our mission to deliver healthcare services to
                patients that go above and beyond anything they’ve experienced before.
                <br><br>
                Our team of medical professionals bring a wealth of experience and knowledge to the community,
                showcasing a wide range of expertise across specialties. Designed with Pakistan in mind, the
                pristine facility is a combination of comfort, convenience and sophistication at every stage,
                for
                every patient.
                <br><br>
                From medical innovation to outpatient care, our legacy of excellence shows and we are committed
                to
                bringing a new standard of patient-first healthcare excellence to the region.
            </p>
        </div>
    </section>


    <!-- Services -->
    <section class="services">
        <div class="container">
            <h4 class="text-center">Services</h4>
            <h2 class="text-center">Our Clinics</h2>
            <div class="clinic">
                <div class="row">
                    <?php
                $query = "SELECT * FROM services ORDER BY RAND() LIMIT 6"; 
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
        <div class="clinic-btn d-flex justify-content-center" data-aos="fade-in">
            <a href="services.php"><button>View All Services</button></a>
        </div>
        </div>
        </div>
    </section>
    <!-- Services Section END -->

    <!-- Doctors -->
    <section class="doctor">
        <div class="specialist">
            <h4 class="text-center">Doctors</h4>
            <h2 class="text-center">Our Specialist</h2>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3 right-sec" data-aos="zoom-in">
                        <h2>
                            Let Healhub Hospital <br>take care of your health
                        </h2>
                        <p>Healhub Hospital is a global healthcare investment group and believes access to
                            healthcare is a fundamental right for everyone. The Group invests in emerging
                            markets to
                            bring private, quality driven healthcare to meet the needs of local people. The
                            Healhub
                            Group is leading the way in transforming the traditional healthcare model through
                            its
                            integrated cross-continents platform, its impact driven model and quality driven
                            hospitals.</p>
                        <div class="doctorsec-btn">
                            <a href="about.php"><button>Read More</button></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-left">
                        <div class="text-center">
                            <a href="Dr-Zafar-Iqbal.php"> <img src="images/doctors/Zafar.jpg"></a>
                            <a href="Dr-Zafar-Iqbal.php">
                                <h2 class="doctorh2">Dr. Zafar Iqbal</h2>
                            </a>
                            <h3 class="doctorh3">ENT Specialist</h3>
                            <a href="healhub/user-login.php"><button class="docbtn">Get An
                                    Appointment</button></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-left">
                        <div class="text-center">
                            <a href="Dr-Zeinab-Fatima.php"> <img src="images/doctors/zenab.jpg"></a>
                            <a href="Dr-Zeinab-Fatima.php">
                                <h2 class="doctorh2">Dr. Zeinab Fatima</h2>
                            </a>
                            <h3 class="doctorh3">Family Medicine</h3>
                            <a href="healhub/user-login.php"><button class="docbtn">Get An
                                    Appointment</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section End -->

    <!-- Why Choose Healhub -->
    <section class="choose">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-right">
                    <img src="images/why.png">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 choosesec2" data-aos="fade-left">
                    <h2>
                        Why Choose Healhub Hospital?
                    </h2>
                    <ul>
                        <li>Services Under One Roof</li>
                        <li>Critical Care & Emergency Service</li>
                        <li>Latest Medical Technology</li>
                        <li>Qualified Medical Professionals</li>
                    </ul>
                    <a href="about.php"><button class="discover">
                            Discover More
                        </button></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Why Choose ENd -->

    <!-- Total Section -->
    <section class="total" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                    <h2>15000+</h2>
                    <h3>Patient Served</h3>
                </div>
                <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                    <h2>200+</h2>
                    <h3>Qualified Doctors</h3>
                </div>
                <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                    <h2>500+</h2>
                    <h3>Qualified Staff</h3>
                </div>
            </div>
        </div>
    </section>
    <!--  FAQS -->
    <section class="faq" data-aos="fade-up">
        <div class="container">
            <h3 class="text-center">Our</h3>
            <h2 class="text-center fw-bold location">Location & FAQS</h2>
            <div class="accordin">
                <div class="accordion" id="faqs">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Where is Healhub Hospital in Pakistan located?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqs">
                            <div class="accordion-body">
                                Healhub Hospital Pakistan is conveniently located in La Salle Rd, Peer
                                Khurshid
                                Colony Multan, Pakistan
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the opening times of Healhub Hospital?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqs">
                            <div class="accordion-body">
                                Our Clinics are open Monday-Sunday 8am – 8pm and our Emergency Department is 24
                                hours
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Does Healhub Hospital have a 24-Hour Emergency Department?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqs">
                            <div class="accordion-body">
                                Yes, Healhub Hospital has a fully equipped 24-Hour Emergency Department that
                                has been
                                serving the local community and the wider Dubai areas for several years.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What type of Doctors and Services does Healhub have?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqs">
                            <div class="accordion-body">
                                Healhub Hospital is a multispecialty hospital catering for all major and
                                several
                                niche services. Our services include but are not limited to: Allergy &
                                Immunology
                                Cardiac
                                Surgery Cardiology Dental Dermatology Endocrinology ENT Family Medicine
                                Gastroenterology &
                                Hepatology General Surgery Head & Neck Surgery Hematology-Oncology Imaging &
                                Radiology
                                Internal Medicine Nephrology Neurology Neurosurgery Obstetrics & Gynecology
                                Ophthalmology
                                Orthopedic Surgery Pain Management Pediatrics Plastic Surgery Pulmonology
                                Pychiatry
                                &
                                Pyschology Rheumatology Urology Vascular Medicine. We also have a 24-Hour
                                Emergency
                                Department.
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9042690586284!2d71.46696901448665!3d30.211279617628183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b33f3daf6e737%3A0x92a5d98d1de24498!2sLa%20Salle%20Rd%2C%20Peer%20Khurshid%20Colony%20Chah%20Usman%20Wala%2C%20Multan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1674755653816!5m2!1sen!2s"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>



    <!-- Total Section End -->

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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 200,
        duration: 600,
    });
    </script>

</body>

</html>