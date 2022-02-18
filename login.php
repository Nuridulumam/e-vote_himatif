<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/himatif.png" />
    <title>e-vote Himatif 2022</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="https://cdn.iconscout.com/icon/free/png-512/election-box-2-1168303.png" width="30" height="30" class="d-inline-block align-top" alt="brand-logo">
          PEMILWA HIMATIF 2022
        </a>
          <!-- <button class="btn btn-primary btn-outline-white" type="button">Log In</button> -->
        </div>
      </nav>

      <div class="container">
          <div class="row">
              <div class="col-sm-5 offset-sm-4">
                <div class="login-id mt-5 bg-light p-5">
                    <h4 class="h4 text-center mb-5">Login e-Vote HIMATIF</h4>
                    <form method="POST" action="cek_login.php">
                      <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                          <input type="text" class="form-control" id="inputUsername" name="inputUsername">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail">Email address</label>
                          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="inputEmail">
                          <small id="emailHelp" class="form-text text-muted">example: example@student.ub.ac.id</small>
                      </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                      <?php
                      if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                          echo "<small class="."form-text text-muted"."> Maaf Username anda salah!</small>";
                        } 
                      }
                      ?>
                        </div>

                      <button type="submit" class="btn btn-primary mb-1" >Log in</button> <br>
                      <small id="no-account" class="form=text text-muted">Have no account? <a href="regiis.php">Register here</a></small>
                    </form>
                </div>
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