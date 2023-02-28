<?php

require("../../app/koneksi.php");
$code = $_GET['no_transaksi'];
$query_transaksi = "DELETE FROM transaksi WHERE no_transaksi = '$code'";
$query_detail = "DELETE FROM detail_transaksi WHERE no_transaksi = '$code'";
mysqli_query($koneksi, $query_transaksi);
mysqli_query($koneksi, $query_detail);
header("location:../show_transaksi.php");

?>