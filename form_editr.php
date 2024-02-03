<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM rancangan WHERE id='$id'";
$data = mysqli_query($con,$qry);

$bl = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rantau Selamat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Selamat Datang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Forms dusun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
          <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 m-auto mt-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Data Dana</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
              <div class="card-body">
        <form action="proses_editr.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $bl['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Pendapatan</label>
                <input type="nama" value="<?php echo $bl['nama'] ?>" name="nama" class="form-control" id="exampleInputnama">
            </div>

            <div class="mb-3">
                <label for="exampleInputanggaran" class="form-label">Anggaran</label>
                <input type="text" value="<?php echo $bl['anggaran'] ?>" name="anggaran" class="form-control" id="exampleInputanggaran">
            </div>

            <div class="mb-3">
                <label for="exampleInputtgl" class="form-label">Tanggal</label>
                <input type="date" value="<?php echo $bl['tanggal'] ?>" name="tanggal" class="form-control" id="exampleInputtgl">
            </div>

            <div class="mb-3">
                <label for="exampleInputsisa" class="form-label">Kurang/Lebih</label>
                <input type="text" value="<?php echo $bl['sisa'] ?>" name="sisa" class="form-control" id="exampleInputsisa">
            </div>

            <button type="proses" class="btn btn-primary">Proses Data</button>
            <a class="btn btn-secondary" href="rancangan.php">Batal </a>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('footer.php') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
