<?php

include "../../koneksi.php";
$no = $_POST['no_kamar'];
$jenis = $_POST['jenis_kamar'];
$harga = $_POST['harga'];

$query = "UPDATE kamar SET
          no_kamar = '$no',
          jenis_kamar = '$jenis',
          harga = '$harga'
          WHERE no_kamar = '$no'";

mysqli_query($koneksi, $query);
header("location:../show_kamar.php");
?>