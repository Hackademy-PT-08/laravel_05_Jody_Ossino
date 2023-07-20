<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Super Mario</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="Website Icon" type="png" href="/1683283_1727a.png">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])



  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center" > 

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="background-color: black";>
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 >NINTENDO JS</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('homepage')}}">Home</a></li>
          <li><a href="{{route('work')}}">Lavora con noi</a></li>
          <li><a href="#about">About</a></li>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="hero mt-5" >
    <div class="container p-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="bg-light p-5 rounded-5" method="POST" action="{{route('contact.submit')}}">
                <h2 style="color: black";>Inviaci i tuoi dati!</h2>
                @csrf
                <div class="mb-3 mt-5">
                    <label for="name" class="form-label fw-bolder">Nome e cognome</label>
                    <input type="text" name="name" naffe="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bolder">Indirizzo email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-dark my-btn mt-3">Inviaci i tuoi dati</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

   <!-- Vendor JS Files -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>