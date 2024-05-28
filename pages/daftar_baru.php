<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | daftar baru</title>

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
                <a href="../pages/input_gelombang.php" class="nav-link">
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
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="needs-validation" action="proses/pos_tambah_baru.php" method="post">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="firstName">Nama</label>
                  <input type="text" class="form-control" name="nama" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Username</label>
                  <input type="text" class="form-control" name="username" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Password</label>
                  <input type="text" class="form-control" name="password" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="" for="">Sebagai</label>
                  <div class="form-inline">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sebagai" id="inlineRadio1" value="Admin">
                      <label class="custom-label text-black" for="inlineRadio1">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sebagai" id="inlineRadio2" value="Petugas">
                      <label class="custom-label text-black" for="inlineRadio2">Petugas</label>
                    </div>
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

<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              </ol>
            </nav>
          </div>

          <?php
          // Ambil nomor pendaftaran tertinggi dari tabel data_siswa
          $sql = "SELECT MAX(no_pendaftaran) AS max_registration_number FROM data_siswa";
          $result = $koneksi->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $last_registration_number = $row["max_registration_number"];

            // Jika tidak ada nomor pendaftaran sebelumnya, mulai dari BYR001
            if ($last_registration_number === null) {
              $new_registration_number = "BYR001";
            } else {
              // Ubah nomor pendaftaran terakhir ke nomor pendaftaran baru
              $last_number = intval(substr($last_registration_number, 3));
              $next_number = $last_number + 1;
              $new_registration_number = "BYR" . sprintf("%03d", $next_number);
            }
          } else {
            // Penanganan kesalahan jika query tidak berhasil
            echo "Error: " . $koneksi->error;
          }

          // Gunakan $new_registration_number sesuai kebutuhan di sini



          ?>
         
          
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h1 class="mb-3">Daftar Siswa Baru</h1>


                    <form class="needs-validation" action="proses/pos_tambah_baru.php" method="post">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control " name="no_pendaftar" id="no_pen" placeholder="" value="<?php echo $new_registration_number; ?>" required="" readonly style="color: black;">

                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>

                        </div>

                        <div class="col-md-5 mb-3">
                          <label for="lastName">Nama Lengkap</label>
                          <input type="text" class="form-control text-black " name="nama_siswa" id="lastName" placeholder="" value="" required="">
                          <input type="hidden" name="tanggal" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                        <div class="col-md-5 mb-3">
                          <label for="firstName">Tempat,Tanggal Lahir</label>
                          <input type="text" class="form-control text-black" name="ttl" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>

                      <?php
                      $query = "SELECT * FROM tbl_gel ORDER BY id ASC ";
                      $result = mysqli_query($koneksi,$query);

                      if(!$result){
                        die("query error : " . mysqli_error($koneksi));
                      }
                      ?>

                      <div class = "row">
                        <div class = "col-md-6 mb-3">
                          <label for="gelombang">Gelombang</label>
                         <select class="custom-select d-block w-100" name ="gelombang"
                         id="gelombang" requred="">
                        <option value="">pilih...</option>
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                          echo '<option value="' . $row['gelombang'].'">' . $row['gelombang'] . '</option>';
                        }
                        ?>
                        </select>
                        <div class = "invalid-feedback">silakan pilih gelombang</div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-6 mb-3">
                          <label class="" for="">Jenis Kelamin</label>
                          <div class="form-inline">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Laki-Laki">
                              <label class="custom-label text-black" for="inlineRadio1">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Perempuan">
                              <label class="custom-label text-black" for="inlineRadio2">Perempuan</label>
                            </div>
                          </div>
                        </div>

                      </div>

                  </div>
                  <h4 class="col-md-6 mb-3">Agama</h4>

                  <div class="d-block col-md-6 mb-3">
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="credit" name="agama" type="radio" class="cuform-control text-black-input" checked="" required="" value="Islam">
                          <label class="cuform-control text-black-label" for="credit">Islam</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="debit" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Kristen">
                          <label class="cuform-control text-black-label" for="debit">Kristen</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-balack-input" required="" value="Katolik">
                          <label class="cuform-control text-black-label" for="paypal">Katolik</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Hindu">
                          <label class="cuform-control text-black-label" for="paypal">Hindu</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Buddha">
                          <label class="cuform-control text-black-label" for="paypal">Buddha</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-black custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Konghuchu">
                          <label class="cuform-control text-black-label" for="paypal">Konghuchu</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">No Telepon Siswa</label>
                      <input type="text" class="form-control text-black" name="no_telpSiswa" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Asal Sekolah </label>
                      <input type="text" class="form-control text-black" name="asal" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>

                  </div>


                  <div class="mb-3 col-md-14">
                    <label for="address">Alamat Sekolah</label>
                    <textarea class="form-control text-black" id="address" name="alamat_sekolah" placeholder="1234 Main St" required="" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>

                  <div class="col-md-14 mb-3">
                    <label for="country">Pilih Jurusan</label>
                    <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                      <option value="">Pilih...</option>
                      <option>REKAYASA PERANGKAT LUNAK</option>
                      <option>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                      <option>MANANJEMEN PERKANTORAN</option>
                      <option>DESAIN KOMUNIKASI VISUAL</option>
                      <option>BISNIS DARING DAN PEMASARAN</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>

                  <h4 class="mb-3">Biodata Orang Tua</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Orang Tua</label>
                      <input type="text" class="form-control text-Black" id="cc-name" name="nama_ortu" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Orang Tua</label>
                      <textarea class="form-control text-black" id="address" name="alamat_ortu" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-black" name="no_telpOrtu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-black" name="pekerjaan_ortu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="mb-3">Biodata Wali</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Wali</label>
                      <input type="text" class="form-control text-black" id="cc-name" name="nama_wali" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Wali</label>
                      <textarea class="form-control text-black" id="address" name="alamat_wali" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-black" name="no_telpWali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-black" name="pekerjaan_wali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
                  </form>
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
