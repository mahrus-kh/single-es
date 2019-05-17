<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Single ES</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/lte/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'php-file/cek-session.php'?>
  <?php include "include/main-header.php"?>
  <?php include "include/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default flat">
            <div class="box-body text-center">
              <h3>PERAMALAN JUMLAH PRODUKSI KRIPIK TEMPE PADA PT. LANCAR JAYA MALANG</h3>
              <h3 style="margin-top: 10px;">MENGGUNAKAN METODE SINGLE EXPONENTIAL SMOOTHING</h3>
              <br><br>
              <img src="assets/image/logo-asia.png" style="height: 200px;">
              <br><br>
              <h4>Oleh </h4>
              <h4>Eka Agustin (14201058)</h4>
              <br><br><br><br>
              <h4 style="margin: 5px;">PROGRAM STUDI TEKNIK INFORMATIKA</h4>
              <h4 style="margin: 5px;">SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER ASIA MALANG</h4>
              <h4 style="margin: 5px;">2019</h4>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
  <?php include 'include/footer.php';?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="assets/lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/lte/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/lte/dist/js/app.min.js"></script>
<script src="include/modify.js"></script>
<!-- page script -->
</body>
</html>
