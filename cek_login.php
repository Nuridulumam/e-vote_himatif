<?php

session_start();

include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['inputUsername'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from tb_user where username='$username'");
$vote1 = mysqli_query($koneksi, "SELECT * from tb_paslon1 where email='$email'");
$vote2 = mysqli_query($koneksi, "SELECT * from tb_paslon2 where email='$email'");
// menghitung jumlah data yang ditemukan
$cek_data = mysqli_fetch_array($login);
$cek_vote1 = mysqli_fetch_array($vote1);
$cek_vote2 = mysqli_fetch_array($vote2);
// $password = $cek_data['password'];
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	if (password_verify($password, $cek_data['password'])) {
		session_start();
		$nama = $cek_data['nama_lengkap'];
		$email = $cek_data['email'];
        $id_pemilih = $cek_data['id_pemilih'];
		$pilihan1 = $cek_vote1['pilihan'];
		$pilihan2 = $cek_vote2['pilihan'];
		$_SESSION['email'] = $email;
		$_SESSION['nama_lengkap'] = $nama;
		$_SESSION['username'] = $username;
		$_SESSION['id_pemilih'] = $id_pemilih;
		$_SESSION['pilihan1'] = $pilihan1;
		$_SESSION['pilihan2'] = $pilihan2;
		// alihkan ke halaman dashboard admin
		header("location:bf-vote.php");
	} else {
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}