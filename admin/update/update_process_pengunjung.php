<?php

require("../../app/koneksi.php");
$id = $_POST['id_pengunjung'];
$nama = $_POST['nama_pengunjung'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$no_tlp = $_POST['no_telepon'];
$no_ktp = $_POST['no_ktp'];

$query = "UPDATE pengunjung SET
          id_pengunjung = '$id',
          nama_pengunjung = '$nama',
          alamat = '$alamat',
          jenis_kelamin = '$jk',
          no_telepon = '$no_tlp',
          no_ktp = '$no_ktp'
          WHERE id_pengunjung = '$id'";

mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");


?>