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
    <?php
      session_start();
      include 'koneksi.php';
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
          <button class="btn btn-danger btn-outline-white" type="button" onclick="window.location.href='keluar.php';">Keluar</button>
        </div>
      </nav>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 mt-5">
            <div class="card text-center">
              <div class="card-header">Hai! <?= $_SESSION['nama_lengkap']; ?></div>
              <div class="card-body">
                <h5 class="card-title">e-Vote Himatif 2021</h5>
                <p class="card-text">Data statistik hasil e-vote Pemilihan Calon Kahim-Wakahim <br> Himpunan Mahasiswa Teknologi Informasi 2021</p>
                <div class="chart">
                  <div class="row">
                    <div class="col-12">
                      <canvas id="myChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted">ID <?= $_SESSION['id_pemilih']; ?></div>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>






    <!-- Optional JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'doughnut',

          // The data for our dataset
          data: {
              labels: ['Ami - Yogi', 'Tidak Memilih'],
              datasets: [{
                  label: 'Hasil e-vote Kahim-Wakahim Himatif 2021',
                  backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)'],
                  borderColor: 'rgb(255, 255, 255)',
                  data: [
                  <?php 
                    $hitung_paslon1 = mysqli_query($koneksi, "SELECT * FROM tb_paslon1 where pilihan='AMI - YOGI'");
                    echo mysqli_num_rows($hitung_paslon1);
                    ?>, 
                  <?php 
                    $hitung_paslon2 = mysqli_query($koneksi, "SELECT * FROM tb_paslon2 where pilihan='Tidak Memilih'");
                    echo mysqli_num_rows($hitung_paslon2);
                    ?>]
              }]
          },

          // Configuration options go here
          options: {}
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>