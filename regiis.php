<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/himatif.png" />
    <title>e-vote Himatif 2021</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="https://cdn.iconscout.com/icon/free/png-512/election-box-2-1168303.png" width="30" height="30" class="d-inline-block align-top" alt="brand-logo">
          PEMILWA HIMATIF 2021
        </a>
        <button class="btn btn-primary btn-outline-white" type="button" onclick="window.location.href='login.php';">Log In</button>
      </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="regis-id mt-5 mb-5 bg-light p-5">
              <hr>
              <h4 class="h4 text-center mb-3">Registrasi Calon Pemilih</h4>
              <hr class="mb-5">
              <form method="post" action="regis.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNama">Nama Lengkap</label>
                    <input type="text" name="inputNama" class="form-control" id="inputNama" required>
                    <small id="emailexp" class="form-text text-muted">cth: Nuridul Umam</small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputUsername">Username</label>
                    <input type="text" name="inputUsername" class="form-control" id="inputUsername" required>
                    <small id="emailexp" class="form-text text-muted">cth: nuridulumam01</small>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Email UB</label>
                  <input type="email" name="inputEmail" class="form-control" id="inputEmail" required>
                  <small id="emailexp" class="form-text text-muted">example@student.ub.ac.id</small>
                </div>
                <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" name="inputPassword" class="form-control" id="inputPassword" required>
                  <small id="helpPassword" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers.</small>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNIM">NIM</label>
                    <input type="number" class="form-control" id="inputNIM" name="inputNIM" min="183140710000000" max="203140719999999" required>
                    <small id="emailexp" class="form-text text-muted">cth: 19314071****</small>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputKelas">Kelas</label>
                    <select id="inputKelas" name="inputKelas" class="form-control" required>
                      <option selected disabled>Choose...</option>
                      <option>TI-A</option>
                      <option>TI-B</option>
                      <option>TI-C</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputAbsen">Absen</label>
                    <input type="text" name="inputAbsen" class="form-control" id="inputAbsen" required>
                  </div>
                </div>
                  <?php
                      if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                          echo '<p class="form-text text-danger font-weight-normal font-italic"> Nama dan Email anda sudah terdaftar!</p>';
                        } 
                      }
                  ?>
                <button type="submit" class="btn btn-primary mt-2">Register</button>
              </form>
            </div>
          </div>
      </div>













    <!-- Optional JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>