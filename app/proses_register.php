<?php

require("koneksi.php");
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$pwd_confirm = $_POST['password_confirm'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// confirm system
if ($pwd == $pwd_confirm) {
  $query = "INSERT INTO user SET
            email = '$email',
            nama_lengkap = '$nama_lengkap',
            username = '$username',
            pwd = '$pwd', 
            jenis_kelamin = '$jenis_kelamin'";
  
  mysqli_query($koneksi, $query);
  header("location:login.php");
}

else {
  // header("location: register.php");
?>
  <script>
    alert("Password Doesn't Match");
    document.location="register.php";
  </script>
<?php
}
?>