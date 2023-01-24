<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Rent ""<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-color: antiquewhite">
      
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark text-primary" style="background-color:  #4f2d01;">
            <div class="container">
              <a class="navbar-brand font-leyton" href="index.html">
                <!-- <img src="/img/logo1.png" alt="Logo" width="35" class="d-inline-block align-text-top rounded-circle"> -->
                Arjuna Resort
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-montserrat gap-1">
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
                    <a class="nav-link" href="user_profile.php">User Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md active" aria-current="page" href="rent_room.php">Rent</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--  -->

        <!-- form login -->
        <section>
          <div class="container mt-5">
            <div class=" d-flex align-items-center justify-content-center">
              <div class="card col-md-4 shadow p-2 mb-5 rounded" style="width: auto;">
                <div class="card-body font-montserrat">
                  <h5 class="card-title">Rent Room</h5>
                  <form action="proses_register.php" method="post" class="pt-4">
                    <div class="row gap-5">
                      <div class="col">
                        <div class="mb-3">
                          <label for="id_pengunjung" class="form-label">Id. Pengunjung</label>
                          <input type="text" class="form-control" name="id_pengunjung" id="id_pengunjung">
                        </div>
                        <div class="mb-3">
                          <label for="nama_pengunjung" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_pengunjung" id="nama_pengunjung">
                        </div>
                        <div class="mb-3">
                          <label for="no_telepon" class="form-label">No. Telepon</label>
                          <input type="text" class="form-control" name="no_telepon" id="no_telepon">
                        </div>
                        <div class="mb-3">
                          <label for="no_ktp" class="form-label">No. KTP</label>
                          <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                        </div>
                        <div>
                          <label for="alamat" class="form-label">Alamat</label>
                          <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <div class="mb-3 row pt-3">
                            <label for="pria" class="col">
                              <input type="radio" name="jenis_kelamin" value="pria"  id="pria">
                              Pria
                            </label>
                            <label for="wanita" class="col">
                              <input type="radio" name="jenis_kelamin" value="wanita" id="wanita">
                              Wanita
                            </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label for="no_kamar" class="form-label">No. Kamar</label>
                          <input type="text" class="form-control" name="no_kamar" id="no_kamar">
                        </div>
                        <div class="mb-3">
                          <label for="jenis_kamar" class="form-label">Jenis Kamar</label>
                          <input type="text" class="form-control" name="jenis_kamar" id="jenis_kamar">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>