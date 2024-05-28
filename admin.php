<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | admin</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">MenuLogin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">

      <?php

// Mengatur zona waktu menjadi Waktu Indonesia Barat (WIB)
date_default_timezone_set('Asia/Jakarta');

// Array nama hari dalam Bahasa Indonesia
$nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Array nama bulan dalam Bahasa Indonesia
$nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

// Mendapatkan hari ini dalam format tanggal
$tanggal_hari_ini = date("Y-m-d");

// Mendapatkan informasi hari, bulan, dan tahun
$hari = date('w', strtotime($tanggal_hari_ini));
$nama_hari_ini = $nama_hari[$hari];
$tanggal = date('d', strtotime($tanggal_hari_ini));
$bulan = date('n', strtotime($tanggal_hari_ini));
$nama_bulan_ini = $nama_bulan[$bulan - 1];
$tahun = date('Y', strtotime($tanggal_hari_ini));

// Output hasil
echo "$nama_hari_ini, $tanggal-$nama_bulan_ini-$tahun";

?>

      </li>
    </ul>

    <!-- Right navbar links -->
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/registrasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/input_gelombang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Gelombang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Pendaftaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/daftar_baru.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Baru </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/data_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/data_kaos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kaos</p>
                </a>
              </li>
            </ul>
          </li>
          
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pembayaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/transaksi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/data_pembayaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Logout
              </p>
            </a>
              </li> 
            </ul>
          </li>
         
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
    include"koneksi.php";
    $query = "SELECT  COUNT(*) AS total_siswa FROM data_siswa";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
      die("Query error:" . mysqli_error($koneksi));
    }
    $row = mysqli_fetch_assoc ($result);
    $total_siswa = $row['total_siswa'];

    $koneksi->close();

    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard | Statistic</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3 class="text-white"><?php echo $row['total_siswa'];?></h3>

                <p>Jumlah Pendaftaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5<sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Jurusan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>

               <?php
               include 'koneksi.php';
               $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
               $result_tanggal = mysqli_query($koneksi, $query_tanggal);
               if(!$result_tanggal){
                die ("Query error :" . mysqli_error($koneksi));

               }
               $row_tanggal = mysqli_fetch_assoc($result_tanggal);
               $tanggal = $row_tanggal['tanggal'];
               $query = "SELECT SUM(bayar-kembalian) AS total_income
               FROM data_bayar WHERE tanggal ='$tanggal'";
               $result = mysqli_query($koneksi, $query);

               if(!$result){
                die ("Query error:" . mysqli_error($koneksi) );

               }
               $row = mysqli_fetch_assoc($result);
               $total_income = $row ['total_income'];
               
               ?>
               
          
               
           
          <!-- ./col -->
         
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div>
      
      <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>RP. <?php echo number_format($total_income, 0, ',', ',');?></h3>

                <p>Income Harian</p>
              </div>
              <div class="icon">
                <i class=""></i>
              </div><!-- /.container-fluid -->
              </div>
              </div>

     
      <?php
        include 'koneksi.php';
        $query = "SELECT SUM(bayar-kembalian) AS total_pengurangan FROM data_bayar";
        $result = mysqli_query($koneksi, $query);

        if (!$result){
          die("Query error:" . mysqli_error($koneksi));
        }
        $row = mysqli_fetch_assoc($result);
        $total_pengurangan = $row['total_pengurangan'];
        $koneksi->close();
        ?>
      
       <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Rp. <?php echo $row ['total_pengurangan'];?></h3>

                <p>Jumlah Pemasukanl </p>
              </div>
              <div class="icon">
                <i class=""></i>
              </div>
         
              
            
         


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
