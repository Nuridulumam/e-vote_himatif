<?php
include "koneksi.php";
$regis = mysqli_query($koneksi, "SELECT * from tb_user where use");
$cek_data = mysqli_fetch_array($regis);

$nama = $cek_data['nama_lengkap'];
echo $nama;