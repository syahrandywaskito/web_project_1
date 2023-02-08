<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Admin "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

	<div>
    <div class="row flex-nowrap gap-4">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-primary" style="background-color: #4f2d01;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 gap-3 text-white min-vh-100">
          <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline font-leyton">Arjuna Resort</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start font-montserrat" id="menu">
            <li class="nav-item">
              <a class="nav-link align-middle p-2 btn btn-dark btn-md active" href="index.php" aria-current="page">
                <i class="bi bi-house fs-4"></i>
                <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn btn-dark btn-md dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fs-4 bi bi-credit-card"></i> 
                  <span class="ms-1 d-none d-sm-inline">Opsi</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
                  <li>
                    <a class="dropdown-item" href="show_transaksi.php">Transaksi</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="show_detail.php">Detail Transaksi</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="show_pengunjung.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-file-person"></i> 
                <span class="ms-1 d-none d-sm-inline">Pengunjung</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_karyawan.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-workspace"></i> 
                <span class="ms-1 d-none d-sm-inline">Karyawan</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_kamar.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-houses"></i> 
                <span class="ms-1 d-none d-sm-inline">Kamar</span> 
              </a>
            </li>
            <li class="nav-item">
              <a href="show_website_user.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-circle"></i> 
                <span class="ms-1 d-none d-sm-inline">Website User</span> 
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4 font-montserrat">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="../img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
							<span class="d-none d-sm-inline mx-1"><?php echo $username?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
              <li>
								<a class="dropdown-item" href="admin_profile.php">Profile</a>
							</li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</li>
            </ul>
          </div>
        </div>
      </div>
			<div class="col py-3 ml-2">
				<div class="container">

          <!-- header -->
          <header class="mt-4 row">
            <div class="col">
              <h3 class="fw-light font-montserrat">Admin Workspace | Home</h3>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
              <div class="font-montserrat">
                <div id="hari"></div>
                <div id="clock"></div>
              </div>
            </div>
          </header>
          <!--  -->

          <hr>
          <!-- content -->
          <main>
            <header>
              <div class="container mt-5">
                <div class="text-center text-dark font-montserrat">
                  <h2 class="fw-light">Welcome <?php echo $username?></h2>
                  <p class="lead">Welcome to Admin Workspace, Enjoy!!</p>
                </div>
              </div>
            </header>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <!--  -->
				</div>
			</div>
  	</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- personal js -->
  <script src="clock.js"></script>
</body>
</html>