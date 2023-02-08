<?php
include "../../koneksi.php";
$code = $_GET['id_dtl_transaksi'];
$query = "DELETE FROM detail_transaksi WHERE id_dtl_transaksi = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_detail.php");
?>