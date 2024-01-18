<?php
session_start();
if(!isset($_SESSION['sid'])){
  ?>
  <script>
    document.location="login.php";
  </script>
  <?php
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>Rantau Selamat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Dusun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      <div class="card">
              <div class="card-header">
                <h2 class="card-title">Data Dusun</h2>
        <div class="float-sm-right">
          <a class="btn btn-outline-dark mb-1" href="form_dusun.php">Tambah Data </a>
      </div>
      </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah KK</th>
                    <th scope="col">Action</th>
                </tr>
                  </thead>
                  <tbody>
                            <?php
                            //1. membuat koneksi
                            include_once("koneksi.php");
                            //2. membuat query untuk menampilkan seluruh data
                            $qry = "SELECT * FROM dusun";
                            //3. menjalankan query
                            $tampil = mysqli_query($con,$qry);
                            //4. menampilkan data menggunakan looping foreach
                            $nomor = 1;
                            foreach($tampil as $data){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['jmlhkk'] ?></td>
                                    <!-- Modal -->
                                    <div class="modal fade modal-lg" id="exampleModal<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail <?php echo $data['nama'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"><b>NIM</b></label>
                                            <br>
                                            <span class="fs-3"><?php echo $data['nim'] ?></span>
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"><b>Nama</b></label>
                                            <br>
                                            <span class="fs-3"><?php echo $data['nama'] ?></span>
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"><b>Jumlah KK</b></label>
                                            <br>
                                            <span class="fs-3"><?php echo $data['jmlhkk'] ?></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                <td>
                                    <a href="form_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Data Mahasiswa Dengan Nama <b><?php echo $data['nama'] ?></b> Ingin Dihapus?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <a href="proses_hapus.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Ya</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            
                        </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Dusun</th>
                    <th>PlatJumlahform(KK)</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js">
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
