<?php

require("../../app/koneksi.php");
$em = $_POST['email'];
$nama = $_POST['nama_lengkap'];
$un = $_POST['username'];
$pwd = $_POST['password'];
$jk = $_POST['jenis_kelamin'];

$query = "UPDATE user SET
          email = '$em',
          nama_lengkap = '$nama',
          username = '$un',
          pwd = '$pwd',
          jenis_kelamin = '$jk'
          WHERE email = '$em'";

mysqli_query($koneksi, $query);
header("location:../show_website_user.php");

?>