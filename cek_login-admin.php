<?php

session_start();

include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['inputUsername'];
$id_admin = $_POST['inputID'];
$password = $_POST['inputPassword'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from admin where username='$username'");
// menghitung jumlah data yang ditemukan
$cek_data = mysqli_fetch_array($login);
// $password = $cek_data['password'];
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	if (password_verify($password, $cek_data['password'])) {
		session_start();
		$nama = $cek_data['username'];
        $admin = $cek_data['id_admin'];
		$_SESSION['nama'] = $nama;
		$_SESSION['id_admin'] = $admin;
		// alihkan ke halaman dashboard admin
		header("location:halaman-admin.php");
	} else {
		header("location:login-admin.php?pesan=gagal");
	}
} else {
	header("location:login-admin.php?pesan=gagal");
}