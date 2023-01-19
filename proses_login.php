<?php

// session
session_start();

include "koneksi.php";
$username = $_POST['username'];
$pwd = $_POST['password'];
$query = "SELECT username, pwd FROM user ORDER BY username";

$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if (($username == $row['username']) AND ($pwd == $row['pwd'])) {
    $_SESSION['username'] = $row['username'];
    $_SESSION['pwd'] = $row['pwd'];
    echo "selamat anda berhasil login";
}

elseif (($username == "admin") AND ($pwd == "toor")) {
    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $pwd;
    echo "selamat anda berhasil login sebagai admin";
}

else {
    header("location:login.php");
}

?>