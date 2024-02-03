<?php
            include_once("koneksi.php");
            $sql_dan = "SELECT * FROM dana";
            $result_dan = mysqli_query($con,$sql_dan);
            $dan = mysqli_num_rows($result_dan)
            ?>
<?php
            include_once("koneksi.php");
            $sql_bel = "SELECT * FROM belanja";
            $result_bel = mysqli_query($con,$sql_bel);
            $bel = mysqli_num_rows($result_bel)
            ?>
<?php
            include_once("koneksi.php");
            $sql_ran = "SELECT * FROM rancangan";
            $result_ran = mysqli_query($con,$sql_ran);
            $ran = mysqli_num_rows($result_ran)
            ?>
<?php
            include_once("koneksi.php");
            $sql_dan = "SELECT * FROM dusun";
            $result_dan = mysqli_query($con,$sql_dan);
            $dus = mysqli_num_rows($result_dan)
            ?>