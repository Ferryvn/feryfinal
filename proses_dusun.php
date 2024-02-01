<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2. mengambil seluruh nilai input dan dimasukkan ke variabel
$nama               = $_POST['nama'];
$jmlhkk            = $_POST['jmlhkk'];


// 3. membuat query insert 
$qry = "INSERT INTO jurusan (nama,jmlhkk) VALUES ('$nama','$jmlhkk')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman jurusan.php
?>

<script>
    document.location="dusun.php";
</script>