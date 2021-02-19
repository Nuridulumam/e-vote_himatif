<?php
include "koneksi.php";
$namalengkap = $_POST['inputNama'];
$username = $_POST['inputUsername'];
$email = $_POST['inputEmail'];
$nim = $_POST['inputNIM'];
$kelas = $_POST['inputKelas'];
$absen = $_POST['inputAbsen'];
// enkripsi dulu...
$password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);

// KODE-id_pemilih
$kode = substr(str_shuffle("1234567890"), 3, 3);
$id_pemilih = "VTI$kode"; 
// query simpan

// verifikasi nama dan username 
$regis = mysqli_query($koneksi, "SELECT * from tb_user where nama_lengkap='$namalengkap'");
$cek_data = mysqli_fetch_array($regis);

// validasi user exist
    $available_name = $cek_data['nama_lengkap'];
    $available_nim = $cek_data['nim'];
    if (empty($available_name) || empty($available_nim)){
        mysqli_query($koneksi, "INSERT INTO tb_user VALUE('', '$id_pemilih', '$nim', '$email','$namalengkap', '$username', '$password', '$kelas', '$absen')");
        header("location:login.php");
    } else {
        header("location:regiis.php?pesan=gagal");
    }
