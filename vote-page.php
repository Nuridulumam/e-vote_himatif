<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['id_pemilih'] == "") {
		header("location:login.php?pesan=gagal");
	}

	?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="https://cdn.iconscout.com/icon/free/png-512/election-box-2-1168303.png" width="30" height="30" class="d-inline-block align-top" alt="brand-logo">
          PEMILWA HIMATIF 2021
        </a>
          <!-- <button class="btn btn-danger btn-outline-white" type="button" onclick="window.location.href='index.html';">Keluar</button> -->
        </div>
      </nav>

      <div class="container">
        <div class="row mt-5">
          <div id="header" class="container">
            <div class="rounded">
              <div class="display-4 text-center"><?= $_SESSION['nama_lengkap']; ?></div>
              <h6 class="mt-2 text-muted text-center">Silahkan pilih !</h6>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4 mt-5">
            <div class="card shadow bg-white">
            <img class="card-img-top" src="img/Paslon 1 (2).png" alt="Kahim-wakahim">
              <div class="card-body">
                <h6 class="card-title">Nur Amalia Asmi - Attila Shandi Prayogi</h6>
                <p class="card-text"></p>
                <form action="vote.php" method="POST">
                  <input type="submit" class="btn btn-primary" name="KAHIM-WAKAHIM1" value="PASLON 1">
              </div>
            </div>
          </div>
          <div class="col-sm-4 mt-5">
            <div class="card shadow bg-white">
              <img src="img/abstain.png" class="card-img-top p-5" alt="abstain" width="348px" height="272px">
              <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".0em">-</text></svg> -->
              <div class="card-body">
                <h6 class="card-title"> Abstain</h6>
                <p class="card-text"></p>
                <input type="submit" class="btn btn-primary" name="KAHIM-WAKAHIM2" value="Abstain">
              </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-2"></div>
            <div class="form-inline col-sm-8">
              <p class="text-muted p-1" style="margin-top: 20px;">Tag :</p>
              <input type="text" name="nama_lengkap" class="form-control mr-sm-2 mt-4 text-muted text-center" value="<?= $_SESSION['nama_lengkap']; ?>" readonly disabled>
              <input type="text" name="email" class="form-control mr-sm-2 mt-4 text-muted text-center" value="<?= $_SESSION['email']; ?>" readonly disabled>
              <input type="text" name="id_pemilih" class="form-control mr-sm-2 mt-4 text-muted text-center" value="<?= $_SESSION['id_pemilih']; ?>" readonly disabled>
            </div>
          </form>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>