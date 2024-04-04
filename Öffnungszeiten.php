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


    <nav class="navbar navbar-expand-lg  sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"> <img src="img/new.png" width="180px" height="95px"> <!-- <i class="fa fa-car text-primary me-2">NEW</i> --> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right: 120px;">
                <a href="deutsch.php" class="nav-item nav-link text-light active">Home</a>
                <!-- <a href="team.html" class="nav-item nav-link">Team</a> -->
                <!-- <a href="vehicles.html" class="nav-item nav-link">Our Vehicles</a>         -->
                <div class="nav-item dropdown">
                <!--    <a href="FÜHRERSCHEIN.php" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">FÜHRERSCHEIN</a>   -->
                    <!-- solving on click problem by Fahim-->

                    <a href="Führerschein.php" class="nav-item nav-link dropdown-toggle text-light">FÜHRERSCHEIN</a>
                    <div class="dropdown-menu bg-secondary m-0">
                        <a href="Theorie.php" class="dropdown-item">Theorie</a>
                        <!-- <a href="practical.php" class="dropdown-item">Praktisch</a> -->
                        <!-- <a href="Driving School change.php" class="dropdown-item">Fahrschule wechseln</a> -->
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="Öffnungszeiten.php" class="nav-item nav-link text-light">ÖFFNUNGSZEITEN</a>
                <a href="Preise.php" class="nav-item nav-link text-light">Preise</a>
                <a href="Herunterladen.php" class="nav-item nav-link text-light">Downloads</a>
                <a href="Kontakt.php" class="nav-item nav-link text-light">Kontakt</a>
                <!-- <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a> -->
                <li class="nav-item dropdown" style="margin-left: 80px;">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <h4><i class="bi bi-globe2"></h4></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="Öffnungszeiten.php">Deutsch</a></li>
                        <li><a class="dropdown-item" href="OPENINGHOURS.php">English</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- start opening hour  -->

    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <h1 class="mt-5 text-light fw-bold">ÖFFNUNGSZEITEN</h1>

            </div>
        </div>
        <div class="row mb-5 text-light">

            <table class="table border-3 mt-5">
                <thead>
                    <tr>
                        <th scope="col">Tage der Woche</th>
                        <th scope="col">Begin</th>
                        <th scope="col">Ende</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Montag</td>
                        <td>17:00</td>
                        <td>18:30</td>
                    </tr>
                    <tr>

                        <td>Mittwoch</td>
                        <td>17:00</td>
                        <td>18:30</td>
                    </tr>
                </tbody>
            </table>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="mt-5 text-light fw-bold">THEORIE UNTERICHT</h2>

                    </div>
                </div>
                <div class="row mb-5">

                    <table class="table border-3 mt-5">
                        <thead>
                            <tr>
                                <th scope="col">Tage der Woche</th>
                                <th scope="col">Begin</th>
                                <th scope="col">Ende</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>Montag</td>
                                <td>18:30</td>
                                <td>20:00</td>
                            </tr>
                            <tr>

                                <td>Mittwoch</td>
                                <td>18:30</td>
                                <td>20:00</td>
                            </tr>
                        </tbody>
                    </table>










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