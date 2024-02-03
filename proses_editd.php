<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id                 = $_POST['id'];
$nama         = $_POST['nama'];
$anggaran           = $_POST['anggaran'];
$tanggal            = $_POST['tanggal'];
$sisa        = $_POST['sisa'];


// 3. membuat query insert 
$qry = "UPDATE dana SET nama='$nama', anggaran='$anggaran',tanggal='$tanggal',sisa='$sisa' WHERE id='$id'";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman jurusan.php
?>

<script>
    document.location="dana_desa.php";
</script>