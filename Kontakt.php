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

    <nav class="navbar navbar-expand-lg  sticky-top py-0 ">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"> <img src="img/new.png" width="180px" height="95px"> <!-- <i class="fa fa-car text-primary me-2">NEW</i> --> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right: 120px;">
                <a href="deutsch.php" class="nav-item nav-link text-light">Home</a>
                <!-- <a href="team.html" class="nav-item nav-link">Team</a> -->
                <!-- <a href="vehicles.html" class="nav-item nav-link">Our Vehicles</a> -->
                <div class="nav-item dropdown">
                    <a href="Führerschein.php" class="nav-item nav-link dropdown-toggle text-light">FÜHRERSCHEIN</a>
                    <div class="dropdown-menu bg-secondary m-0">
                        <a href="Theorie.php" class="dropdown-item">Theorie</a>
                        <!-- <a href="practical.php" class="dropdown-item">Praktisch</a> -->
                        <!-- <a href="Driving School change.php" class="dropdown-item">Fahrschule wechseln</a> -->
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="Öffnungszeiten.php" class="nav-item nav-link text-light">ÖFFNUNGSZEITEN</a>
                <a href="Preise.php  " class="nav-item nav-link text-light">Preise</a>
                <a href="Herunterladen.php" class="nav-item nav-link text-light">Downloads</a>
                <a href="Kontakt.php" class="nav-item nav-link text-light">Kontakt</a>
                <!-- <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a> -->
                <li class="nav-item dropdown" style="margin-left: 80px">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <h4><i class="bi bi-globe2"></h4></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="Kontakt.php">Deutsch</a></li>
                        <li><a class="dropdown-item" href="contact.php">English</a></li>
                    </ul>
                </li>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->




    <!-- Contact Start -->
    <section class="text-center">

        <div class="container-xxl py-6 ">
            <div class="container h-100">
                <div class="row g-5  " style="margin-bottom: 100px;">
                    <h3 class="mb-5 text-light ">KONTAKT</h3>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 500px; height: 39rem; margin-top:-3px">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        </div>
                        <div class="position-relative h-100">
                            <iframe class="position-relative w-100 h-100 border-10" data-mdb-animation-reset="tada" data-wow-delay="0.5s" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2533.5146521023407!2d8.63436907656494!3d50.58038697161726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDM0JzQ5LjQiTiA4wrAzOCcxMy4wIkU!5e0!3m2!1sen!2s!4v1696578421357!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0;" allowfullscreen="" loading="fast" tabindex="0"></iframe>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                         <form action="https://formsubmit.co/fahrschule.bayani@gmail.com" method="post" class="shadow-lg rounded">
                         <!--   <form action="https://fahrschule-bayani.de/fahimm.watanyar@gmail.com" method="post" class="shadow-lg rounded"> -->
                            <div class="module_column row g-3">
                                <div class="col-md-6">
                                    <div class=" form-floating">
                                        <input type="text" name="name" required class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                        <label for="name">Ihr Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" required class="form-control border-0 bg-light" id="email" placeholder="Your Email">
                                        <label for="email">Deine E-Mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" required class="form-control border-0 bg-light" id="subject" placeholder="Subject">
                                        <label for="subject">Thema</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" required class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Nachricht</label>
                                        <input type="hidden" name="_captcha" value="false">
                                        <input type="hidden" name="_template" value="table">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary py-3 px-5" type="submit">Nachricht senden</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.5s">
                        <h4 class="text-start mb-4 float-start fs-6 text-light">Nehmen Sie Kontakt mit uns auf:<p class="text-light fs-6 mt-4">Ihre Meinung ist uns wichtig. Ob es sich um eine einfache Frage oder eine wertvolle Anregung handelt, wir sind für Sie da. Sie können uns telefonisch kontaktieren oder uns direkt eine E-Mail schicken.</p>
                            <font style="vertical-align: inherit;  text-decoration: underline;" class="fon">INFO</font>
                            <br><br>
                            <font style="vertical-align: inherit; " class="bin"><i class="bi bi-telephone me-4"></i>+491747576777</font><br><br>
                            <font style="vertical-align: inherit; " class="bin"><i class="bi bi-envelope me-4"></i>fahrschule.bayani@gmail.com</font>
                        </h4>

                    </div>

                </div>
            </div>
        </div>



    </section>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-Secondary text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kontakt aufnehmen</h4>
                    <h5 class="text-white mb-4"><i class="fa fa-car text-white me-2"></i>Fahrschule-Bayani</h5>
                    <p class="text-start mb-2"><i class="fa fa-map-marker-alt me-3"></i>Goethestraße 17, 35452<span class="me-4"> Heuchelheim, Germany<span></p>
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
                <!--    <a class="btn btn-link" href="">Cookie-Richtlinie</a>   -->

                </div>


                <div class="col-lg-3 col-md-6">

                    <h6 class="text-white mt-4 mb-3">Folgen Sie uns</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="https://instagram.com/fahrschule_bayani?igshid=OGQ5ZDc2ODk2ZA=="><i class="bi bi-instagram"></i></a>
                        <!-- <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a> -->
                        <!-- <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a> -->
                        <!-- <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-white text-light  wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-dark">
                    &copy; <a href="#" class="text-dark">By Fahim Watanyar</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-white bg-light btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>






    <!-- Back to Top -->


    <!--   <script>
function sendMail(str) {
    var link = "mailto:slim.hmidi1@gmail.com" + "&subject=" + escape("This is my subject") + "&body=" + escape(str);
    location.href = link;
}
function submit_comment() {
var name = document.forms["contact_form"]["Name"].value;
var Email = document.forms["contact_form"]["Email"].value;
var Phone = document.forms["contact_form"]["Phone"].value;
var Location = document.forms["contact_form"]["Location"].value;
var Comment = document.forms["contact_form"]["Location"].value;
if((name !="") && (Email !="") && (Phone !="") && (Location !="") && (Comment !="")) {
   sendMail("HELLO");
}
}
</script> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src=" https://smtpjs.com/v3/smtp.js"></script>


</body>

</html>