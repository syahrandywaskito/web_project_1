<?php

require("../../app/koneksi.php");
$nomor = $_POST['no_kamar'];
$jenis = $_POST['jenis_kamar'];
$harga = $_POST['harga'];

$query = "INSERT INTO kamar SET
          no_kamar = '$nomor',
          jenis_kamar = '$jenis',
          harga = '$harga'";

mysqli_query($koneksi, $query);
header("location:../show_kamar.php");

?>