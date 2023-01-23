<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | User "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark text-primary" style="background-color:  #4f2d01;">
            <div class="container">
              <a class="navbar-brand font-leyton" href="index.php">
                <!-- <img src="/img/logo1.png" alt="Logo" width="35" class="d-inline-block align-text-top rounded-circle"> -->
                Arjuna Resort
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-montserrat">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="facility.php">Facility</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="user_profile.php">User Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--  -->

        <?php

        include "../koneksi.php";
        $input_user = mysqli_query($koneksi, "SELECT * FROM user");
        $data_user = mysqli_fetch_array($input_user);
        ?>

        <!--Header User Profile -->
        <header>
          <div class="container pt-5">
          <div class="text-center text-dark font-montserrat">
              <h1 class="display-5">User Profile</h1>
              <p class="lead">User Profile <?php echo $data_user['username']?></p>
            </div>
          </div>
        </header>
        <!--  -->

        <!-- User Profile -->
         <section>
          <div class="container font-montserrat">
            <div class="row text-center pt-3">
              <div class="col">
                <img src="../img/Arjuna_logo.png" style="width: 10rem;" class="rounded-circle" alt="">
              </div>
            </div>
            <div class="row gap-3 text-center pt-3 justify-content-center">
              <div class="col-md-4 border border-success rounded p-3">
                <h4>Username</h4>
                <p><?php echo $data_user['username']?></p>
              </div>
              <div class="col-md-4 border border-success rounded p-3">
                <h4>Password</h4>
                <p><?php echo $data_user['pwd']?></p>
              </div>
            </div>
            <div class="row gap-3 text-center pt-3 justify-content-center">
              <div class="col-md-4 border border-success rounded p-3">
                <h4>Full Name</h4>
                <p><?php echo $data_user['nama_lengkap']?></p>
              </div>
              <div class="col-md-4 border border-success rounded p-3">
                <h4>Email</h4>
                <p><?php echo $data_user['email']?></p>
              </div>
            </div>
          </div>
         </section>
        <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>