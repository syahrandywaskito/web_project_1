<?php

include "../../koneksi.php";
$id = $_POST['id_pengunjung'];
$nama = $_POST['nama_pengunjung'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_telepon'];
$no_ktp = $_POST['no_ktp'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "INSERT INTO pengunjung SET
          id_pengunjung = '$id',
          nama_pengunjung = '$nama',
          alamat = '$alamat',
          jenis_kelamin = '$jenis_kelamin',
          no_telepon = '$no_tlp',
          no_ktp = '$no_ktp'";

mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");
?>
