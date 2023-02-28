<?php

// session
session_start();

require("koneksi.php");
$username = $_POST['username'];
$pwd = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

$result = mysqli_query($koneksi, $query);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['pwd'] = $row['pwd'];
        header("location:../user/index.php");

}
    
elseif (($username == "syahrandy") AND ($pwd == "toor")) {
        $_SESSION['username'] = $username;
        $_SESSION['pwd'] = $pwd;
        header("location:../admin/index.php");
}
    
else {
        header("location:login.php");
}

?>