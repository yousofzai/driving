<!DOCTYPE html>
<html class="new" lang="en">

<head>
   <meta charset="utf-8">
    <title>Driving School Website</title>
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!--  Stylesheet -->
    <link href="css/Rigest.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- site Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="bod">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

       <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 ">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"> <img src="img/new.png" width="180px" height="95px"> <!-- <i class="fa fa-car text-primary me-2">NEW</i> --> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right: 120px;"> 
                <a href="index.html" class="nav-item nav-link text-dark">Home</a>
                <!-- <a href="team.html" class="nav-item nav-link">Team</a> -->
                <!-- <a href="vehicles.html" class="nav-item nav-link">Our Vehicles</a>              -->
                <div class="nav-item dropdown">
                    <a href="Driver lisince.html" class="nav-item nav-link dropdown-toggle">Drivers License</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="Theory.html" class="dropdown-item">Theory</a>                    
                        <a href="Driving School change.html" class="dropdown-item">Driving School Change</a>
                    </div>
                </div>
                <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="Prices.html" class="nav-item nav-link">Prices</a>
                <a href="Downloads.html" class="nav-item nav-link">Downloads</a>
                <a href="rigester.html" class="reg nav-link fs-6 fw-bold">Register</a>
                <li class="nav-item dropdown">
                        <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown"><h4><i class="bi bi-globe2"></h4></i></a>
                        <ul class="dropdown-menu bg-secondary">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Persian</a></li>
                            <li><a class="dropdown-item" href="#">Pashto</a></li>
                        </ul>
                    </li>
                   
            </div>
        </div>
    </nav>
   
    <!-- Navbar End -->



<!-- rigestraion start-->
 <div class="km">
  <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">Sign in</a></li>
        <li class="signup-inactive"><a class="btn">Sign up </a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
                <form class="form-signin" action="" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
            <a class="btn-signin">Sign in</a>
          </div>
                </form>
        
                <form class="form-signup" action="" method="post" name="form">
          <label for="fullname">Full name</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Confirm password</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
          <a ng-click="checked = !checked" class="btn-signup">Sign Up</a>
                </form>
      
            <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                <div class="successtext">
                   <p> Thanks for signing up! Check your email for confirmation.</p>
                </div>
             </div>
    
      </div>
      
      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
      
      <div>
        <div class="cover-photo"></div>
        <div class="profile-photo"></div>
        <h1 class="welcome">Welcome, Chris</h1>
        <a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>

      </div>
  </div>
</div>
 
    <!-- rigesrion End -->


    <div class="container-fluid bg-Secondary text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-white mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+491747576777</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>fahrschule.bayani@gmail.com</p>
                </div>

                  <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Site Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <!-- <a class="btn btn-link" href="">Team</a> -->
                    <!-- <a class="btn btn-link" href="">Our Vehicles </a> -->
                    <a class="btn btn-link" href="">Drivers License</a>
                    <a class="btn btn-link" href="">Theory</a>
                    <a class="btn btn-link" href="">Driving School Change</a>
                </div>
                
                 <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Genral Links</h4>
                    <a class="btn btn-link" href="contact.html">Contact</a>
                    <a class="btn btn-link" href="rigester.html">Register</a>
                    <a class="btn btn-link" href="Prices.html">Prices</a>
                    <a class="btn btn-link" href="Downloads.html">Downloads</a>
                    <a class="btn btn-link" href="Imprint.html">Imprint</a>
                    <a class="btn btn-link" href="Data protection.html">Data protection</a>
                    <a class="btn btn-link" href="">Cookie Policy</a>
                    
                </div>
            
               
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
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