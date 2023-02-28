<?php

require("../../app/koneksi.php");
$code = $_GET['email'];
$query = "DELETE FROM user WHERE email = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_website_user.php");

?>