<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/new.png" />
    <title>Driving School Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->




    <!-- start navbar -->

    <nav class="navbar navbar-expand-lg  sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"> <img src="img/new.png" width="180px" height="95px"> <!-- <i class="fa fa-car text-primary me-2">NEW</i> --> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right: 120px;">
                <a href="index.php" class="nav-item nav-link text-light active">Home</a>
                <!-- <a href="team.html" class="nav-item nav-link">Team</a> -->
                <!-- <a href="vehicles.html" class="nav-item nav-link">Our Vehicles</a>         -->
                <div class="nav-item dropdown">
                    <a href="Driverlisince.php" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">Drivers License</a>
                    <div class="dropdown-menu bg-secondary m-0">
                        <a href="Theory.php" class="dropdown-item">Theory</a>
                        <!-- <a href="practical.php" class="dropdown-item">Practical</a> -->
                        <!-- <a href="Driving School change.php" class="dropdown-item">Driving School Change</a> -->
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="OPENINGHOURS.php" class="nav-item nav-link text-light">OPENING HOURS</a>
                <a href="Prices.php" class="nav-item nav-link text-light">Prices</a>
                <a href="Downloads.php" class="nav-item nav-link text-light">Downloads</a>
                <a href="contact.php" class="nav-item nav-link text-light">Contact</a>
                <!-- <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a> -->
                <li class="nav-item dropdown" style="margin-left: 80px;">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <h4><i class="bi bi-globe2"></h4></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="Führerschein.php">Deutsch</a></li>
                        <li><a class="dropdown-item" href="Driverlisince.php">English</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>

    <!-- end navbar-->


    <!-- driver lecinse  Start -->
    <div class="container-xxl py-6">
        <div class="container shadow-sm p-3 mb-5 rounded">
            <!-- Page Header Start -->
            <div class="text-center mx-auto mb-5 wow fadeInUp shadow-sm p-3 mb-5 rounded" data-wow-delay="0.1s" style="max-width: 500px;"><br><br>
                <h1 class="display-6 mb-4 fs-1">your driver's license</h1><br>
                <p class="text-center">Here's how it works - the training in 4 steps</p>
                <!-- <h class="text-primary text-uppercase mb-2">Tranding Courses</h6>-->
            </div>

            <!-- Page Header End -->
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="coursess-item d-flex flex-column overflow-hidden h-100  shadow-lg  mb-5 rounded">
                        <div class="text-center p-4 pt-0">
                            <img src="img/mark.png" class="float-end mt-2" style="height:60px">

                        </div>
                        <div class="text-center p-4 pt-0">
                            <!-- <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
                            <h5 class="mb-3 float-start fw-bold fs-3 text-light">Step 1:</h5>
                            <p class="fs-6" style="margin-top: 50px;">Registration – Your “driver’s license” project begins with registration at our driving school. This is possible at any time in our branch. To register, you only need your identity card/passport as well as money for the registration and learning material. You will receive all information about the process, the costs and other important documents from our well-trained office team. Of course, we take the time to answer your questions and have checklists ready for you.

                                Are you under 18? No problem - either you bring a parent to register or a declaration of consent signed by the parents.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="coursess-item d-flex flex-column  overflow-hidden h-100 shadow-lg  mb-5 rounded">
                        <div class="text-center p-4 pt-0">
                            <img src="img/mark.png" class="float-end mt-2" style="height:60px">

                        </div>
                        <div class="text-center p-4 pt-0">
                            <!-- <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
                            <h5 class="mb-3 float-start fw-bold text-light fs-3">Step 2:</h5>
                            <p class="fs-6" style="margin-top: 50px;">Theory – From the day you register, you can attend the theory class in our branch. Until your theory test, the following classes are required for class B.

                                12x basic material (only 6x basic material if you have another driving license class)

                                2x class-specific lessons.</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="coursess-item d-flex flex-column  overflow-hidden h-100 shadow-lg  mb-5 rounded">
                        <div class="text-center p-4 pt-0">
                            <img src="img/mark.png" class="float-end mt-2" style="height:60px">

                        </div>
                        <div class="text-center p-4 pt-0">
                            <!-- <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
                            <h5 class="mb-3 float-start fw-bold text-light fs-3">Step 3:</h5>
                            <p class="fs-6" style="margin-top: 50px;">Practice - you have submitted your driver's license application and the associated documents and have already been to theory classes a few times? Then it's time to get in the car! Register in our office to drive. We are happy to try to fulfill your driving instructor request. Now you get in touch with your driving instructor for driving appointments.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="coursess-item d-flex flex-column overflow-hidden h-100 shadow-lg mb-5 rounded">
                        <div class="text-center p-4 pt-0">
                            <img src="img/mark.png" class="float-end mt-2" style="height:60px">

                        </div>
                        <div class="text-center p-4 pt-0">
                            <!-- <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
                            <h5 class="mb-3 float-start fw-bold text-light fs-3">Step 4:</h5>
                            <p class="fs-6" style="margin-top: 50px;">Testing – TÜV is calling! The days of cramming questions and practicing driving are coming to an end and it's time for the exams. In theory, your learning program gives you realistic feedback on your exam readiness. You can make an appointment for the theory test with us at any time. A so-called “pre-test” is important beforehand. For the test, your driving instructor will plan the practical test date in consultation with you - of course only when you are both convinced of your driving skills.</p>

                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="text-light">Driving license at 17</h1>
                    <p>Started as a pilot project, the driver's license at 17 is now a model for success.</p>
                    <h2 class="text-light">Why drive from the age of 17</h2>
                    <p>The aim of "accompanied driving from 17" is to increase road safety for young novice drivers. Young novice drivers are more often than average the main cause of accidents involving personal injury The reasons for this are a lack of experience and an increased willingness to take risks. After passing the test, young novice drivers may drive a car from the age of 17, but an accompanying person must be present for every journey. This accompanying person(s) must be entered in the test certificate. The advantage of this measure is as follows Moderate influence of an escort
                        Additional driving practice for the novice driver – the learning phase is extended
                        Young drivers can benefit from the experience of the escorts.</p>
                    <!-- Add more content here -->
                </div>
                <div class="col-lg-6 col-md-12">
                    <h2 class="text-light">Accompanying person requirements</h2>
                    <p>Minimum age 30 years
                        At least 5 years uninterrupted possession of class B
                        Maximum 1 point in Flensburg (according to the new point regulation)
                        Less than 0.5 per mille blood alcohol while driving.</p>
                    <h2 class="text-light">Training</h2>
                    <p>The student may start training class B/BE at the age of 16 1/2 years.
                        The training content corresponds to the normal training for a category B driving licence.</p>
                    <h2 class="text-light">Test</h2>
                    <p>class="room">The theory test can be taken 3 months before the age of 17. 1 month before the 17th birthday the practical exam.

                        The issued test certificate also includes the classes: AM and L (without accompanying person).

                        The probationary period begins upon receipt of the test certificate.</p>

                </div>
            </div>
        </div>























        <!--  <div class="container">
             <div class="row">
               <div class="col-lg-4 col-md-6 wow fadeInUp" id="newman">
                <h1 class="fs-1 text-white">Driving license at 17</h1><br>
                <p class="rem">Started as a pilot project, the driver's license at 17 is now a model for success.</p>
                <h4 class="rem text-white">Why drive from the age of 17?</h4>
                <p class="ram">The aim of "accompanied driving from 17" is to increase road safety for young novice drivers. Young novice drivers are more often than average the main cause of accidents involving personal injury.</p>

               <p class="reem">The reasons for this are a lack of experience and an increased willingness to take risks. After passing the test, young novice drivers may drive a car from the age of 17, but an accompanying person must be present for every journey. This accompanying person(s) must be entered in the test certificate. The advantage of this measure is as follows.</p>

               <p class="rssm">Moderate influence of an escort
                Additional driving practice for the novice driver – the learning phase is extended
                Young drivers can benefit from the experience of the escorts.</p>

                <h4 class="rem text-white fs-5">Accompanying person requirements</h4>

                <p class="room">Minimum age 30 years
                 At least 5 years uninterrupted possession of class B
                 Maximum 1 point in Flensburg (according to the new point regulation)
                 Less than 0.5 per mille blood alcohol while driving.</p>

                 <h4 class="rem text-white fs-5">Training</h4>
                 <p class="room">The student may start training class B/BE at the age of 16 1/2 years.
                 The training content corresponds to the normal training for a category B driving licence.</p>
                 <h4 class="rem text-white fs-5">Test</h4>
                 <p class="room">The theory test can be taken 3 months before the age of 17. 1 month before the 17th birthday the practical exam.

                 The issued test certificate also includes the classes M, L and S (without accompanying person).

                 The probationary period begins upon receipt of the test certificate.</p>

              </div>
          </div>
      </div>
   </div> -->
        <!-- driver lecinse End -->





        <!-- Back to Top -->
        <a href="#" class="btnn btn-lg btn-white btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>