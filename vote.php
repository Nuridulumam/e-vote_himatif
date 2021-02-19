<?php
include "koneksi.php";
session_start();

$namalengkap = $_SESSION['nama_lengkap'];
$email = $_SESSION['email'];
$id_pemilih = $_SESSION['id_pemilih'];
date_default_timezone_set('Asia/Bangkok');
$waktu = date('h:i:s');
$tanggal = date("l, Y-m-d");


if ($_POST['KAHIM-WAKAHIM1']) {
    $pilih = "AMI - YOGI";
    mysqli_query($koneksi, "INSERT INTO tb_paslon1 VALUE('$id_pemilih', '$email', '$namalengkap','$pilih', '$tanggal', '$waktu')");
} 
else if ($_POST['KAHIM-WAKAHIM2']) {
    $pilih = "Tidak Memilih";
    mysqli_query($koneksi, "INSERT INTO tb_paslon2 VALUE('$id_pemilih', '$email', '$namalengkap','$pilih', '$tanggal', '$waktu')");
}

// query simpan


session_destroy();
header("location:index.html");
