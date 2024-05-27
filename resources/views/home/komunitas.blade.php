<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KOMUNITAS PEMUDA KREATIF - Raj Hikmatul Karomah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

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
              <li><a href="bimbe" >Bimbel Nurani</a></li>
              <li><a href="koperasi">Koperasi</a></li>
              <li><a href="konsultasi">Jagad Konsultasi</a></li>
              <li><a href="media">Ruang Media Guru</a></li>
              <li><a href="science">Science Club</a></li>
              <li><a href="komunitas" class="active">Komunitas Pemuda Kreatif</a></li>
 
              <li><a href="team">Team</a></li>
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
          <h2>Komunitas Pemuda Kreatif</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Komunitas Pemuda Kreatif</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          @foreach ($komuniti as $komunitas )
            <article class="entry">

              <div class="entry-img">
                <img src="image/{{$komunitas->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$komunitas->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{ $komunitas->user->name }}</a></li>
               
                </ul>
              </div>

              <div class="entry-content">
              <p id="content">
              {{$komunitas->description}}
             </p>
            
              <p id="additional-content" style="display: none;">
              {{$komunitas->description}}
              <br>
              {{$komunitas->descriptionlengkap}}
               </p>
              <a href="#" onclick="toggleContent();">Read more</a>
              </div>

            </article><!-- End blog entry -->
            @endforeach

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                <li><a href="istigosah">Jama'ah Istigosah<span></span></a></li>
                  <li><a href="bimbel">Bimbel Nur Aini<span></span></a></li>
                  <li><a href="koperasi">Koperasi<span></span></a></li>
                  <li><a href="konsultasi">Jagad Konsultasi<span></span></a></li>
                  <li><a href="media">Ruang Media Guru <span></span></a></li>
                  <li><a href="science">Science Club<span></span></a></li>
                  <li><a href="komunitas">Komunitas Pemuda Kreatif<span></span></a></li>
             
                </ul>
              </div><!-- End sidebar categories-->



            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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
  <script>
  function toggleContent() {
    var content = document.getElementById('content');
    var additionalContent = document.getElementById('additional-content');

    if (additionalContent.style.display === 'none') {
      additionalContent.style.display = 'block';
      content.style.display = 'none';
    } else {
      additionalContent.style.display = 'none';
      content.style.display = 'block';
    }
  }
</script>

</body>

</html>