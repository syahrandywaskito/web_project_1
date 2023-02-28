<?php

require("../../app/koneksi.php");
$email = $_POST['email'];
$nama = $_POST['nama_lengkap'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "INSERT INTO user SET
          email = '$email',
          nama_lengkap = '$nama',
          username = '$username',
          pwd = '$pwd',
          jenis_kelamin = '$jenis_kelamin'";

mysqli_query($koneksi, $query);
header("location:../show_website_user.php");

?>