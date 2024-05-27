<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PENGURUS - Raj Hikmatul Karomah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Jagad.jpeg" rel="icon">
  <link href="assets/img/Jagad.jpeg" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><img src="assets/img/logo.png" alt=""><a href=""> Raj <span> Hikmatul</span> Karomah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/">Home</a></li>

          <li class="dropdown"><a href="#"><span>Unit Lembaga</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="istigosah">Jama'ah Istighosah</a></li>
              <li><a href="bimbel" >Bimbel Nurani</a></li>
              <li><a href="koperasi">Koperasi</a></li>
              <li><a href="konsultasi">Jagad Konsultasi</a></li>
              <li><a href="media">Ruang Media Guru</a></li>
              <li><a href="science">Science Club</a></li>
              <li><a href="komunitas">Komunitas Pemuda Kreatif</a></li>
 
              <li><a href="team" class="active">Team</a></li>
            </ul>
          </li>

          <li><a href="jamedia">JA MEDIA</a></li>
          <li><a href="berita" >BERITA</a></li>
          <li><a href="contact" >Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
       
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pengurus</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Pengurus</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <div class="teams bg-light mt-5 py-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Pengurus Pondok Jagad 'Alimussiry Mojokerto</h2>
      </div>
      <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea
        molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repeliendus enim incidunt assumenda
        pariatur, quisquam evaniet numquam.</p>
      <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="card" style="width: 18rem;">
            <img src="image/{{$team->image}}" class="card-img-top" height="340vh" alt="..." >
            <div class="card-body text-center">
              <h5 class="card-title text-bold">{{$team->title}}</h5>
              <p class="card-text text-muted">{{$team->description}}</p>
              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
            Designed by <a href="https://instagram.com/rch.ar_?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D">rch.ar_</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>