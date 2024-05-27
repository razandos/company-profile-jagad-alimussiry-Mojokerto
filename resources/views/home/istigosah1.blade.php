<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ISTIGOSAH - Raj Hikmatul Karomah</title>
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
  <style>
pre {
    font-family: "Open Sans", sans-serif;
    margin: 0; /* Menghilangkan margin */
    padding: 0; /* Menghilangkan padding */
    white-space: pre-wrap; 
    margin-top: 0;
    margin-bottom: 1rem;
    font-size : 16px;
    text-align: left;
    margin-left: 0;
    
  }
</style>
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
              <li><a href="istigosah" class="active">Jama'ah Istighosah</a></li>
              <li><a href="bimbel" >Bimbel Nurani</a></li>
              <li><a href="koperasi">Koperasi</a></li>
              <li><a href="konsultasi">Jagad Konsultasi</a></li>
              <li><a href="media">Ruang Media Guru</a></li>
              <li><a href="science">Science Club</a></li>
              <li><a href="komunitas">Komunitas Pemuda Kreatif</a></li>
 
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
          <h2>Jama'ah istighosah</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Jama'ah istigosah</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            @foreach ($istigosah as $istigosah1 )
            <article class="entry">

              <div class="entry-img">
                <img src="image/{{$istigosah1->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$istigosah1->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{ $istigosah1->user->name }} </a></li>
                </ul>
              </div>
              <!-- Istigosah1 adalah acara spiritual yang diadakan secara massal dengan tujuan untuk memperkuat ikatan batin dengan Allah SWT dan meningkatkan kedamaian spiritual. Acara ini dihadiri oleh jamaah yang berasal dari berbagai daerah, yang berkumpul dalam kebersamaan untuk beribadah, berdoa, dan mengungkapkan rasa syukur kepada Sang Pencipta.
              -->
              <div class="entry-content">
    <p id="content-{{ $istigosah1->id }}">
        {{$istigosah1->description}}
    </p>

    <pre id="additional-content-{{ $istigosah1->id }}" style="display: none;">
    <p> {{ trim($istigosah1->descriptionlengkap) }} </p>
    </pre>
            
    <a href="#" onclick="toggleContent(this);" data-id="{{ $istigosah1->id }}">Read more</a>
</div>


              <!-- <div class="read-more">
                  <a href="BlogIstigosah">Read More</a>
                </div> -->
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
function toggleContent(clickedElement) {
    const contentId = clickedElement.dataset.id;
    const content = document.getElementById('content-' + contentId);
    const additionalContent = document.getElementById('additional-content-' + contentId);

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