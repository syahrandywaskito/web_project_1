<?php

include "../../koneksi.php";
$code = $_GET['no_kamar'];
$query = "DELETE FROM kamar WHERE no_kamar = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_kamar.php");

?>