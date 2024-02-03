<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2, mengambil seluruh nilai input dan dimasukkan ke variabel
$nama         = $_POST['nama'];
$anggaran           = $_POST['anggaran'];
$tanggal            = $_POST['tanggal'];
$sisa        = $_POST['sisa'];


// 3. membuat query insert 
$qry = "INSERT INTO dana (nama,anggaran,tanggal,sisa) VALUES 
('$nama','$anggaran','$tanggal','$sisa')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman index.php
?>
<script>
    document.location="dana_desa.php";
</script>