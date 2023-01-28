<?php

include "../../koneksi.php";
$code = $_GET['id_karyawan'];
$query = "DELETE FROM karyawan WHERE id_karyawan='$code'";
mysqli_query($koneksi, $query);
header("location:../show_karyawan.php");
?>