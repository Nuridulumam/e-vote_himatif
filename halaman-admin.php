<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/himatif.png" />
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>e-vote Himatif 2021</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="https://cdn.iconscout.com/icon/free/png-512/election-box-2-1168303.png" width="30" height="30" class="d-inline-block align-top" alt="brand-logo">
          ADMIN PEMILWA HIMATIF 2021
        </a>
          <!-- <button class="btn btn-primary btn-outline-white" type="button" onclick="window.location.href='login.php';">Log In</button> -->
        </div>
      </nav>

      <?php
        include 'koneksi.php';
        session_start();
        $data = mysqli_query($koneksi, "SELECT * FROM tb_vote ORDER BY pilihan ASC");
        $data_vote = mysqli_fetch_assoc($data);
      ?>
      
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-lg-2">
        <div class="card text-center">
              <div class="card-header">Hai! <?= $_SESSION['nama']; ?></div>
              <div class="card-body">
                <h5 class="card-title">Halaman Panwas PEMILWA HIMATIF 2021</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-muted">ID <?= $_SESSION['id_admin']; ?></div>
            </div>
        </div>
        <div class="col-lg-10">
          <h4 class="h4 mb-4" width="300px">Tabel Daftar Pemilih PEMILWA HIMATIF 2021</h4>
          <hr>
          <table id="dataTable" class="table table-hover table-responsive" >
          <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">ID Pemilih</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">Pilihan</th>
              <th scope="col">Hari/Tanggal</th>
              <th scope="col">Waktu</th>
              </tr>
          </thead>
          <tbody>
          <?php 
            $no = 1;
            do {
          ?>
              <tr style="width: 100%;">
                <th scope="row"><?= $no++?></th>
                <td><?= $data_vote['id_pemilih']?></td>
                <td width="300px"><?= $data_vote['nama_lengkap']?></td>
                <td width="260px"><?= $data_vote['email']?></td>
                <td><?= $data_vote['pilihan']?></td>
                <td><?= $data_vote['tanggal']?></td>
                <td><?= $data_vote['waktu']?></td>
              </tr>
            <?php 
            } while ($data_vote= mysqli_fetch_assoc($data));
            ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>









      <!-- Optional JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
              $('#dataTable').DataTable();
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>