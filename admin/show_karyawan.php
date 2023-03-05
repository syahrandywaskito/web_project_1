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
								<a class="nav-link align-middle p-2 btn btn-dark btn-md" href="index.php">
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
								<a href="show_karyawan.php" class="nav-link align-middle p-2 btn btn-dark btn-md active" aria-current="page">
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
								<img src="../img/hollow_knight.jpg" alt="hugenerd" width="40" height="40" class="rounded-circle">
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
								<h3 class="fw-light font-montserrat">Admin Workspace | Karyawan</h3>
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

						<!-- breadcrump -->
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb font-montserrat">
								<li class="breadcrumb-item active" aria-current="page">Karyawan</li>
							</ol>
						</nav>
						<!--  -->

						<!-- Content -->
						<main class="mt-3">
							<!-- add data -->
							<section>
								<a href="add_karyawan.php" class="btn btn-dark btn-md font-montserrat">Add Data</a>
							</section>
							<!--  -->

							<section class="mt-4">
										<form action="" method="post">
											<div class="d-flex align-items-center flex-wrap gap-2 font-montserrat">
												<div class="">
													<label for="">Cari Berdasarkan</label>
												</div>
												<div class="">
													<select name="pilih" id="search" class="btn btn-dark btn-md">
														<option value="">------</option>
														<option value="id_karyawan">ID karyawan</option>
														<option value="nama_karyawan">Nama Karyawan</option>
														<option value="jenis_kelamin">Jenis kelamin</option>
													</select>
												</div>
												<div class="">
													<input type="text" name="textcari" class="form-control-sm">
												</div>
												<div class="">
													<input type="submit" name="cari" value="Cari" class="btn btn-dark btn-md">	
												</div>
												<div class="">
													<input type="submit" name="semua" value="Tampilkan Semua" class="btn btn-dark btn-md">
												</div>
											</div>
										</form>
							</section>

							<!-- Table -->
							<section class="table-responsive-md font-montserrat mt-4">
								<table class="table table-striped text-center">
									<thead>
										<tr>
											<th scope="col" class="fst-italic fw-normal">No</th>
											<th scope="col" class="fst-italic fw-normal">ID Karyawan</th>
											<th scope="col" class="fst-italic fw-normal">Nama Karyawan</th>
											<th scope="col" class="fst-italic fw-normal">Jenis Kelamin</th>
											<th scope="col" colspan="2" class="fst-italic fw-normal">Opsi</th>
										</tr>
									</thead>
									<tbody>
										<!-- php search -->
										<?php
										require("../app/koneksi.php");
										$input_karyawan = "";
										if (isset($_POST['cari'])) {
											$opsi = $_POST['pilih'];
											$nama_data = $_POST['textcari'];
											$input_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE $opsi LIKE '%$nama_data%'");
										}
										else{
											$input_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
										}
										?>
										<!--  -->

										<!-- php dynamic table -->
										<?php

										require("../app/koneksi.php");
										$no = 1;
										foreach ($input_karyawan as $row) {
											echo "<tr>
															<td>$no</td>
															<td>" . $row['id_karyawan'] . "</td>
															<td>" . $row['nama_karyawan'] . "</td>
															<td>" . $row['jenis_kelamin'] . "</td>
															<td>
																	<a href='update_karyawan.php?id_karyawan=$row[id_karyawan]' class='btn btn-dark btn-md'>Update</a>
															</td>
															<td>
																	<a href='delete/delete_karyawan.php?id_karyawan=$row[id_karyawan]' class='btn btn-dark btn-md'>Delete</a>
															</td>
														</tr>";
											$no++;
										}
										
										?>
										<!--  -->
									</tbody>
								</table>
							</section>
							<!--  -->

						</main>
						<!--  -->
					</div>
				</div>
			</div>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

		<!-- personal JS -->
		<script src="clock.js"></script>
  </body>
</html>