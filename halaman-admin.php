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
        <button class="btn btn-danger btn-outline-white" type="button" onclick="window.location.href='keluar.php';">Keluar</button>
        </div>
      </nav>

      <?php
        include 'koneksi.php';
        session_start();
        if ($_SESSION['id_admin'] == "") {
          header("location:login-admin.php?pesan=gagal");
        }
        $data1 = mysqli_query($koneksi, "SELECT * FROM tb_paslon1 ORDER BY pilihan ASC");
        $data2 = mysqli_query($koneksi, "SELECT * FROM tb_paslon2 ORDER BY pilihan ASC");
        $data_vote1 = mysqli_fetch_assoc($data1);
        $data_vote2 = mysqli_fetch_assoc($data2);
      ?>
      
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-lg-2">
        <div class="card text-center shadow mb-3">
              <div class="card-header">Hai! <?= $_SESSION['nama']; ?></div>
              <div class="card-body">
                <h5 class="card-title">Halaman Panwas PEMILWA HIMATIF 2021</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-muted">ID <?= $_SESSION['id_admin']; ?></div>
            </div>
            
            <ul class="list-group shadow">
            <li class="list-group-item text-center text-body bg-light">Daftar Tabel Paslon</li>
              <li class="list-group-item text-center">
                <!-- collapse paslon 1 -->
                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#paslon1Example" aria-expanded="false" aria-controls="paslon1Example">
                Tabel Paslon 1
                </button>
              </li>
              <li class="list-group-item text-center">
                <!-- collapse paslon 2 -->
                <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#paslon2Example" aria-expanded="false" aria-controls="paslon2Example">
                  Tabel Paslon 2
                </button>
              </li>
            </ul>
            
        </div>
        <div class="col-lg-10">
            <!-- DATA -->
          <div class="collapse" id="paslon1Example">
            <div class="card shadow card-body mb-3">
                <h4 class="h4 mb-2" width="300px">Tabel Daftar Pemilih Paslon 1</h4>
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
                  <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                do {
              ?>
                  <tr style="width: 100%;">
                    <th scope="row"><?= $no++?></th>
                    <td><?= $data_vote1['id_pemilih']?></td>
                    <td width="250px"><?= $data_vote1['nama_lengkap']?></td>
                    <td width="250px"><?= $data_vote1['email']?></td>
                    <td><?= $data_vote1['pilihan']?></td>
                    <td><?= $data_vote1['tanggal']?></td>
                    <td width="100px"><?= $data_vote1['waktu']?></td>
                    <td>
                    <a href="hapus-suara.php?kode=<?= $data_vote1["id_pemilih"]; ?>" type="button" class="badge badge-danger">
                      Tidak Sah
                    </a>
                    </td>
                  </tr>    
              <?php 
                } while ($data_vote1= mysqli_fetch_assoc($data1));
                ?>
              </tbody>
              </table>
            </div>
          </div>
                <!-- DATA 2 -->
                <div class="collapse" id="paslon2Example">
            <div class="card shadow card-body">
                <h4 class="h4 mb-2" width="300px">Tabel Daftar Pemilih Paslon 2</h4>
              <table id="dataTable1" class="table table-hover table-responsive" >
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Pemilih</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pilihan</th>
                  <th scope="col">Hari/Tanggal</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                do {
              ?>
                  <tr style="width: 100%;">
                    <th scope="row"><?= $no++?></th>
                    <td><?= $data_vote2['id_pemilih']?></td>
                    <td width="250px"><?= $data_vote2['nama_lengkap']?></td>
                    <td width="260px"><?= $data_vote2['email']?></td>
                    <td><?= $data_vote2['pilihan']?></td>
                    <td><?= $data_vote2['tanggal']?></td>
                    <td width="150px"><?= $data_vote2['waktu']?></td>
                    <td>
                    <a href="hapus-suara.php?kode=<?= $data_vote1["id_pemilih"]; ?>" type="button" class="badge badge-danger">
                      Tidak Sah
                    </a>
                    </td>
                  </tr>
                <?php 
                } while ($data_vote2= mysqli_fetch_assoc($data2));
                ?>
              </tbody>
              </table>
            </div>
          </div>
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
    <script>
        $(document).ready(function() {
              $('#dataTable1').DataTable();
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>