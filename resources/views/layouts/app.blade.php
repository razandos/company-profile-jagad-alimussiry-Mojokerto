<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
  <style>
 pre {
    font-family: "Open Sans", sans-serif;
    margin: 0; /* Menghilangkan margin */
    padding: 0; /* Menghilangkan padding */
    white-space: pre-wrap; 
    margin-top: 0;
    margin-bottom: 1rem;
    font-size : 16px;
  }

</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboards</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name; }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboards" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                </a>
            </li> 
            <li class="nav-item">
                <a href="/" target="_blank" class="nav-link">
                  <i class="nav-icon fas fa-link"></i>
                    <p>
                      Lihat Website
                    </p>
                </a>
            </li> 
            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboards/slide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Data Slide show</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/teams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengurus</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboards/event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/beranda" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/jamedia" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ja Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/istigosah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Istigosah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/bimbel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bimbel Nur Aini</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/koperasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Koperasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/konsultasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jagad Konsultasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/guru" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ruang Media Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/science" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Science Club</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboards/komuniti" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Komunitas Pemuda Kreatif</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-arrow-left"></i>
            <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">

              @yield('content')


              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
<script>
    document.getElementById('descriptionlengkap').addEventListener('input', function (event) {
        // Deteksi jika tombol Enter ditekan
        if (event.key === 'Enter') {
            // Tambahkan karakter newline ke dalam teks
            this.value += '\n';
        }
    });
</script>

</body>
</html>
