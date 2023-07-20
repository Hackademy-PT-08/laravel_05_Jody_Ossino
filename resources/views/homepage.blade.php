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
  @if (session('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
@endif
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" >
    <div class="container position-relative">
        <div  class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start mt-5 bg-light rounded-5 py-4 px-3">
          <h2 style="color: red";>Benvenuto nel mondo di Super Mario Bros</h2>
          <p style="color: black"; class="fs-5 fw-bold">Il celebre platform di Nintendo del 1985, Mario salva Peach da Bowser con power-up e livelli coinvolgenti.
          <br> Iconico e influente, sei pronto alla sfida? </p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
 
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header bg-light p-5 rounded-5">
          <h2>Altro su  Mario</h2>
          <p style="color: black"; class="fw-bold">

          Super Mario Bros è un'icona intramontabile dei videogiochi. Lanciato nel 1985, questo platform a scorrimento laterale segue le avventure di Mario, un idraulico italiano che sfida il malvagio Bowser per salvare la Principessa Peach. I livelli tematici, i nemici e i power-up, come il Super Fungo e il Fiore di Fuoco, offrono una sfida coinvolgente. La colonna sonora accattivante di Koji Kondo è diventata leggendaria. Super Mario Bros ha ispirato una vasta gamma di seguiti e spin-off, guadagnando fama mondiale e contribuendo alla cultura popolare. Un classico senza tempo, rappresenta il potere e l'innovazione dei videogiochi nel creare esperienze divertenti e memorabili.        </div>

        <div class="container mt-5">
         <div class="row gy-4">
           <div class="col-6">
                <img src="https://images7.alphacoders.com/131/1318286.jpeg" class="img-fluid rounded-5" alt="">
           </div>
           <div class="col-6">
            <img src="https://wallpapers.com/images/featured/mario-tokaayz2e1i6398t.jpg" class="img-fluid rounded-5" alt="">
           </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

 

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