<?php

include "../../koneksi.php";
$code = $_GET['no_transaksi'];
$query = "DELETE FROM transaksi WHERE no_transaksi = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_transaksi.php");

?>