<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Register</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md active" aria-current="page" href="register.php">Register</a>
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
              <div class="card col-md-4 shadow p-2 mb-5 rounded" style="width: 29rem;">
                <div class="card-body font-montserrat">
                  <h5 class="card-title">Register</h5>
                  <form action="proses_register.php" method="post" class="pt-2">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" id="hs-toggle" name="password">
                        <button class="btn btn-dark btn-md" type="button" id="button-addon2" onclick="hsToggle()"><i class="bi bi-eye" id="eye" title="Show Password"></i></button>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Confirm Password</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" id="hs-toggle-confirm" name="password_confirm">
                        <button class="btn btn-dark btn-md" type="button" id="button-addon2" onclick="hsToggleConfirm()"><i class="bi bi-eye" id="eye-confirm" title="Show Password"></i></button>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pria" class="col">
                          <input type="radio" name="jenis_kelamin" value="pria"  id="pria">
                          Pria
                        </label>
                        <label for="wanita" class="col">
                          <input type="radio" name="jenis_kelamin" value="wanita" id="wanita">
                          Wanita
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <div class="pt-2">
                      <p>Anda sudah punya Akun ? <a href="login.php">Login</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
      function hsToggle(){
        let toggle = document.getElementById("hs-toggle");
        let eye = document.getElementById("eye");
        if (toggle.type === "password") {
          toggle.type = "text";
          eye.classList.remove("bi-eye");
          eye.classList.add("bi-eye-slash");
          eye.setAttribute("title", "Hide Password");
        }
        else{
          toggle.type = "password";
          eye.classList.remove("bi-eye-slash");
          eye.classList.add("bi-eye");
          eye.setAttribute("title", "Show Password");
        }
      }
      function hsToggleConfirm(){
        let toggle = document.getElementById("hs-toggle-confirm");
        let eye = document.getElementById("eye-confirm");
        if (toggle.type === "password") {
          toggle.type = "text";
          eye.classList.remove("bi-eye");
          eye.classList.add("bi-eye-slash");
          eye.setAttribute("title", "Hide Password");
        }
        else{
          toggle.type = "password";
          eye.classList.remove("bi-eye-slash");
          eye.classList.add("bi-eye");
          eye.setAttribute("title", "Show Password");
        }
      }
    </script>
  </body>
</html>