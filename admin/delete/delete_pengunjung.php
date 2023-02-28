<?php

require("../../app/koneksi.php");
$code = $_GET['id_pengunjung'];
$query = "DELETE FROM pengunjung WHERE id_pengunjung = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");

?>