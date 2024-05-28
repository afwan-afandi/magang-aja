<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | admin</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php
session_start();
include "../koneksi.php"
  ?>
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../admin.php" class="nav-link">MenuAwal</a>
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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="../admin.php" class="nav-link">
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
                <a href="../pages/registrasi.php" class="nav-link">
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
                <a href="../pages/daftar_baru.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Baru </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/data_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/data_kaos.php" class="nav-link">
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
                <a href="../pages/transaksi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/data_pembayaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
              LogOut
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
  

  <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <br>
            <h2 class="page-title">Dashboard | Data Kaos </h2>
            
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Kaos v1</li>
              </ol>
            </nav>
          </div>


          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:grey;">
                        <tr align="center">
                          <th> No Pendaftaran</th>
                          <th> Tanggal </th>
                          <th> Nama </th>
                          <th> Ukuran </th>
                          <th> Action </th>

                        </tr>
                      </thead>
                      <?php
                      $query = "SELECT * FROM data_siswa ORDER BY id ASC";
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                      ?>
                        <tbody style="background-color:white;">
                          <td style="text-align: center;"><?php echo $row['no_pendaftaran']; ?></td>
                          <td><?php echo $row['tanggal']; ?></td>
                          <td><?php echo $row['nama_siswa']; ?></td>
                          <td><?php echo $row['ukuran']; ?></td>
                          
                          <td style="text-align: center;">
                            <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal"  data-target="#<?php echo $edit_modal_id; ?>">Edit</button>
                            
                          </td>
                        </tbody>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation" action="proses/pros_edit_kaos.php" method="post">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label for="firstName">No Pendaftaran</label>
                                      <input type="text" class="form-control" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Tanggal</label>
                                      <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="">
                                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Nama Siswa</label>
                                      <input type="text" class="form-control" name="nama_siswa" id="lastName" placeholder="" value="<?php echo $row['nama_siswa']; ?>" required="">
                                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col- md- 12 mb-3">
                                        <label for="country">ukuran</label>
                                        <select class="custom-select d-block w-100" name="ukuran"  id="country" required="">
                                            <option >Pilih....</option>
                                            <option>XXXL</option>
                                            <option >XXL</option>
                                            <option >XL</option>
                                            <option >L</option>
                                            <option >M</option>
                                            <option >S</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            PLEASE SELECT A VALID COUNTRY
                                        </div>
                                    </div>
                                    

                                  </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php
                        $no++;
                      }
                      ?>



                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->



          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
