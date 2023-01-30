<?php

include "../../koneksi.php";
$id = $_POST['id_karyawan'];
$nama = $_POST['nama_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "UPDATE karyawan SET 
          id_karyawan = '$id',
          nama_karyawan = '$nama',
          jenis_kelamin = '$jenis_kelamin'
          WHERE id_karyawan = '$id'";

mysqli_query($koneksi, $query);
header("location:../show_karyawan.php");


?>