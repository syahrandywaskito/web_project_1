<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Login</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-color: antiquewhite">
      
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark text-primary" style="background-color:  #4f2d01;">
            <div class="container">
              <a class="navbar-brand font-leyton" href="../index.html">
                <!-- <img src="/img/logo1.png" alt="Logo" width="35" class="d-inline-block align-text-top rounded-circle"> -->
                Arjuna Resort
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-montserrat">
                  <li class="nav-item">
                    <a class="nav-link" href="../index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../facility.html">Facility</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md" href="register.php">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--  -->

        <!-- form login -->
        <section>
          <div class="container">
            <div class=" d-flex align-items-center justify-content-center" style="height: 80vh">
              <div class="card col-md-4 shadow p-3 mb-5 rounded" style="width: 25rem;">
                <div class="card-body font-montserrat">
                  <h5 class="card-title">LOGIN</h5>
                  <form action="proses_login.php" method="post" class="pt-2">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <div class="pt-2">
                      <p>Anda belum punya Akun ? <a href="register.php">Register</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>