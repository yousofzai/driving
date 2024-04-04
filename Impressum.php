<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/new.png" />
    <title>Website der Fahrschule</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" /> -->
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

    <!-- site Stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->





    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"> <img src="img/new.png" width="180px" height="95px"> <!-- <i class="fa fa-car text-primary me-2">NEW</i> --> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right: 120px;">
                <a href="deutsch.php" class="nav-item nav-link text-light">Home</a>
                <div class="nav-item dropdown ">
                    <a href="Führerschein.php" class="nav-item nav-link dropdown-toggle text-light">FÜHRERSCHEIN</a>
                    <div class="dropdown-menu m-0 bg-secondary">
                        <a href="Theorie.php" class="dropdown-item">THEORIE</a>
                        <!-- <a href="practical.php" class="dropdown-item">Praktisch</a> -->
                        <!-- <a href="Driving School change.php" class="dropdown-item">Fahrschule wechseln</a> -->
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="Öffnungszeiten.php" class="nav-item nav-link text-light">ÖFFNUNGSZEITEN</a>
                <a href="Preise.php" class="nav-item nav-link text-light">Preise</a>
                <a href="Herunterladen.php" class="nav-item nav-link text-light">DOWNLOADS</a>
                <a href="Kontakt.php" class="nav-item nav-link text-light">Kontakt</a>
                <!-- <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a> -->
                <li class="nav-item dropdown" style="margin-left: 80px">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <h4><i class="bi bi-globe2"></h4></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="Impressum.php">Deutsch</a></li>
                        <li><a class="dropdown-item" href="Imprint.php">English</a></li>
                    </ul>
                </li>

            </div>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mt-5">
                <h1 class="text-light fw-bold mt-4">Impressum</h1>

                <p>Fahrschule Bayani<br>
                    Haroon Bayani<br>
                    Goethe Straße 17,<br>
                    35452 Heuchelheim<br>
                    <br><br>
                    Telefon: 01747576777<br>
                    Mail: Fahrschule.bayani@gmail.com<br>
                    Umsatzsteuer-Identifikationsnummer:
                    DE02080461135<br>
                    <br><br>
                    Zuständig Aufsichtsbehörde:<br>
                    Regierungspräsidium Gießen<br>
                    Landgraf-Philipp-Platz 1-7, <br>
                    35390 Gießen<br>
                </p>
                <!-- Add more content here -->
            </div>
        </div>
    </div>
























    <div class="container-fluid bg-Secondary text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kontakt aufnehmen</h4>
                    <h2 class="text-white mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                    <p class=" text-start mb-2"><i class="fa fa-map-marker-alt me-3"></i>Goethestraße 17, 35452<span class="me-4"> Heuchelheim, Germany<span></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+491747576777</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>fahrschule.bayani@gmail.com</p>
                </div>


                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Website-Links</h4>
                    <a class="btn btn-link" href="deutsch.php">Home</a>
                    <a class="btn btn-link" href="Führerschein.php">Führerschein</a>
                    <a class="btn btn-link" href="Öffnungszeiten.php">Öffnungszeiten</a>
                    <a class="btn btn-link" href="Preise.php">Preise</a>
                    <a class="btn btn-link" href="Herunterladen.php">Downloads</a>
                    <a class="btn btn-link" href="Kontakt.php">Kontakt</a>
                    <a class="btn btn-link" href="Theorie.php">Theorie</a>
                    <!-- <a class="btn btn-link" href="practical.php">praktisch</a> -->
                    <!-- <a class="btn btn-link" href="Driving School Change.php">Fahrschule wechseln</a> -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Allgemeine Links</h4>
                    <a class="btn btn-link" href="Impressum.php">Impressum</a>
                    <a class="btn btn-link" href="Datenschutz.php">Datenschutz</a>
               <!--     <a class="btn btn-link" href="">Cookie-Richtlinie</a>  -->

                </div>


                <div class="col-lg-3 col-md-6">

                    <h6 class="text-white mt-2 mb-3">Folgen Sie uns</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="https://instagram.com/fahrschule_bayani?igshid=OGQ5ZDc2ODk2ZA=="><i class="bi bi-instagram"></i></a>
                        <!--  <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-white text-light wow fadeIn  " data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-dark">
                    &copy; <a href="#" class="text-dark">By Hamid Momand</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-white bg-light btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>



    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>