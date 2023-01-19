<?php

// session
session_start();

include "koneksi.php";
$username = $_POST['username'];
$pwd = $_POST['password'];

// syntax SQL untuk mengambil semua data sesuai dengan input dari login
$query = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

// $result sebagai tempat untuk object dari $koneksi dan $query
$result = mysqli_query($koneksi, $query);

if ($result->num_rows > 0) {
    // $row sebagai wadah untuk fetch dari database dengan result sebagai object dari database
    $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['pwd'] = $row['pwd'];
        // echo "selamat anda berhasil login";
        var_dump($result);

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