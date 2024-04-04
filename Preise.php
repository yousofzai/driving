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

    <!-- Template Stylesheet -->
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
                <!--   <a href="FÜHRERSCHEIN.php" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">FÜHRERSCHEIN</a>  -->
                   <!-- solving the problem of ON-Click Führerschein   -->

                    <a href="Führerschein.php" class="nav-item nav-link dropdown-toggle text-light">FÜHRERSCHEIN</a>
                    <div class="dropdown-menu bg-secondary m-0">
                        <a href="Theorie.php" class="dropdown-item">Theorie</a>
                        <!-- <a href="practical.php" class="dropdown-item">Praktisch</a> -->
                        <!-- <a href="Driving School change.php" class="dropdown-item">Fahrschule wechseln</a> -->
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="Öffnungszeiten.php" class="nav-item nav-link text-light">Öffnungszeiten</a>
                <a href="Preise.php" class="nav-item nav-link text-light">Preise</a>
                <a href="Herunterladen.php" class="nav-item nav-link text-light">Downloads</a>
                <a href="Kontakt.php" class="nav-item nav-link text-light">Kontakt</a>
                <!-- <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a> -->
                <li class="nav-item dropdown" style="margin-left: 80px;">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <h4><i class="bi bi-globe2"></h4></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="Preise.php">Deutsch</a></li>
                        <li><a class="dropdown-item" href="prices.php">English</a></li>

                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- strat price -->

    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <h1 class="mt-5 text-light fw-bold">PREISE</h1>
                <hr style="border-top: 4px solid white; margin-top: 100px;">
            </div>
        </div>
        <div class="row mb-5">

            <div class="col-lg-6 col-md-12 mt-4">
                <h1 class="text-light fw-bold fs-2">KlasseB: 197</h1>
                <p class="fs-5 mt-5">Mit dem B197 lässt sich die
                    Führerscheinausbildung auf Fahrzeugen mit Schalt- und Automatikgetriebe kombinieren, ohne dass es zu Einschränkungen im Führerschein kommt.
                    Besonderheit: Die Ausbildung findet vorwiegend auf Fahrzeugen mit
                    Automatikgetriebe statt.
                    Die Prüfung findet auf einem Fahrzeug mit Automatikgetriebe statt.
                    10 Fahrstunden zu 45 Minuten auf einem Fahrzeug der Klasse B
                    mit Schaltgetriebe müssen durchgeführt werden.
                    (bestehend aus den Themen Fahrzeugbeherrschung, Grundfahraufgaben, Überland- und Autobahnfahrten)
                    Das bedeutet:
                    Keine Einschränkung auf Automatik-Fahrzeuge
                    Schneller und leichter zum Führerschein
                    Mehr Spaß beim Fahren</p>

                <!-- <div class="col-lg-6 col-md-12 ms-4">
     <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=320x1024:format=png/path/se4df9ff482c2640b/image/i4b443186ac2d86ee/version/1687559072/image.png">
    </div> -->

            </div>

            <div class="col-lg-6 col-md-12 ">
                <h1 class="text-light mt-4 fw-bold fs-3">Klasse: B, BA, B197</h1>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Klassen</th>
                            <th scope="col">Preise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Grundbetrag</td>
                            <td>455,00</td>

                        </tr>
                        <tr>

                            <td>Fahrstunde</td>
                            <td>60,00</td>

                        </tr>
                        <tr>

                            <td>Überland</td>
                            <td>60,00</td>

                        </tr>
                        <tr>

                            <td>Autobahn</td>
                            <td>60,00</td>

                        </tr>
                        <tr>

                            <td>Bel,-Fahrt</td>
                            <td>60,00</td>

                        </tr>
                    <!--    <tr>

                            <td>Fehlstunde</td>
                            <td>60,00</td>

                        </tr>   -->
                        <tr>

                            <td>Theo,- Prüfung</td>
                            <td>77,50</td>

                        </tr>
                        <tr>

                            <td>Prak,- Prüfung</td>
                            <td>165,00</td>

                        </tr>
                        <tr>

                            <td>TUV Dekra (Theo,)</td>
                            <td>24,99</td>

                        </tr>
                        <tr>

                            <td>TUV Dekra (Prakt,)</td>
                            <td>129,83</td>

                        </tr>
                        <tr>

                            <td>Lernmaterial App&Buch</td>
                            <td>95,00</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <hr style="border-top: 4px solid white; margin-top: 100px;">
            <!-- <div class="col-lg-6 col-md-12 mt-5">
     <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=320x1024:format=png/path/se4df9ff482c2640b/image/i47bf3a25fc1e66e5/version/1687559072/image.png">
    </div>
      <div class="col-lg-6 col-md-12 ">
         <h1 class="text-light mt-4 fw-bold fs-3">Class BE:</h1>
        <table class="table bg-warning">
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Calsses</th>
      <th scope="col">currency</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Basic amount</td>
      <td>0</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Driving hour</td>
      <td>0</td>
   
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Special trip</td>
      <td>0</td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Practical driving test</td>
      <td>0</td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>TÜV practice fee</td>
      <td>0</td>
      
    </tr>
 
    </tr> -->
            </tbody>
            </table>
        </div>
    </div>
    </div>






    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-light btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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