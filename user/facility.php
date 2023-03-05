<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Facility "<?php echo $username ?>"</title>
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
                <ul class="navbar-nav font-montserrat gap-1">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="facility.php">Facility</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="about.php">About Us</a>
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

        <header>
          <div class="container pt-5">
            <div class="text-center text-dark font-montserrat">
              <h1 class="display-5">Facility</h1>
              <p class="lead">More Facility information at Arjuna Resort</p>
            </div>
          </div>
        </header>

        <section>
          <div class="d-flex justify-content-center pb-5">
            <div id="carouselExampleIndicators" class="carousel slide col-md-8 col-md-offset-2">
              <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/swimming_pool.jpg"  class="d-block w-100" alt="swimming_pool">
                </div>
                <div class="carousel-item">
                  <img src="../img/gym.jpg" class="d-block w-100" alt="gym">
                </div>
                <div class="carousel-item">
                  <img src="../img/spa.jpg" class="d-block w-100" alt="spa">
                </div>
                <div class="carousel-item">
                  <img src="../img/bar.jpg" class="d-block w-100" alt="bar">
                </div>
                <div class="carousel-item">
                  <img src="../img/restaurant.jpg" class="d-block w-100" alt="restaurant">
                </div>
                <div class="carousel-item">
                  <img src="../img/room-6.jpg" class="d-block w-100" alt="room">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

        <!-- penjelasan dari carousel -->
        <section>
          <div class="container">
            <!-- keterangan pertama -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="../img/swimming_pool.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="swimming_pool">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Swimming Pool</h4>
                  <p>
                    Our resort has two types of swimming pools, namely private pools and public pools. 
                    Private swimming pools are available for certain rooms, while public swimming pools are available in the north and west.
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- keterangan kedua -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Gym</h4>
                  <p>
                    There are 4 gyms at Arjuna resort. Each gym has a different feel and even though the atmosphere is different, 
                    the completeness of the equipment is maintained.
                  </p>
                </div>
              </div>
                <div class="col-md-5 text-center">
                  <img src="../img/gym.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="gym">
                </div>
            </div>
            <!--  -->
            <hr>
            <!-- keterangan ketiga -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="../img/spa.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="spa">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Spa</h4>
                  <p>
                    For visitors who want to relax at Arjuna Resort, we provide a total of 8 spas, 
                    with services and a relaxing atmosphere.
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- keterangan keempat -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Bar</h4>
                  <p>
                    Arjuna Resort has a bar located on the beach with a thick beach feel. On certain events, 
                    we hold a party at the bar with a warm and lively beach feel
                  </p>
                </div>
              </div>
              <div class="col-md-5 text-center">
                <img src="../img/bar.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="bar">
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- keterangan kelima -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="../img/restaurant.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="restaurant">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Restaurant</h4>
                  <p>
                    Just like other resorts, Arjuna resort has a total of 3 restaurants with menu choices in the form of western, traditional, 
                    and Asian food. For those who don't want to leave the room or don't want to go to the restaurant, 
                    we can deliver food by phone call or a special application for Arjuna resort.</p>
                </div>
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- keterangan keenam -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Room</h4>
                  <p>
                    Arjuna Resort has a total of 330 rooms, with a total of 6 different variations. 
                    The rooms at Arjuna resort have a Coastal style that matches the feel of the beach where Arjuna Resort is located. 
                    For some variations of the room, we added a private pool that is suitable for families.
                  </p>
                </div>
              </div>
                <div class="col-md-5 text-center">
                  <img src="../img/room-6.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="room">
                </div>
            </div>
            <!--  -->
          </div>
        </section>

    <!-- footer -->
    <footer class="footer mt-5">
      <div class="container-fluid"> 
        <div class="row justify-content-center fs-5 pt-3 gap-3 md-4">
          <div class="col-md-5 text-center">
            <img src="../img/Arjuna_logo.png" class="rounded img-thumbnail" style="width: 11rem;" alt="arjuna_resort_logo">
          </div>
          <div class="col-md-5 d-flex align-items-center md-4">
            <div class="container font-montserrat text-center">
              <div class="text-center">
                <h4>Let's Check</h4>
              </div>
              <div class="row pt-3">
                <ul class="list text-center col">
                  <li class="li-item"><a href="index.php" class="btn btn-dark btn-md">Home</a></li>
                  <li class="li-item"><a href="about.php" class="btn btn-dark btn-md">About Us</a></li>
                  <li class="li-item"><a href="facility.php" class="btn btn-dark btn-md">Facility</a></li>
                </ul>
                <ul class="list text-center col">
                  <li class="li-item"><a href="user_profile.php" class="btn btn-dark btn-md">User Profile</a></li>
                  <li class="li-item"><a href="rent_room.php" class="btn btn-dark btn-md">Rent</a></li>
                  <li class="li-item"><a href="logout.php" class="btn btn-dark btn-md">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>