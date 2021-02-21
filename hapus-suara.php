<?php
include 'koneksi.php';
$kode=$_GET['kode'];

$delete=mysqli_query($koneksi, "DELETE from tb_paslon1 where id_pemilih='$kode'");
if($delete){
    echo("<script>alert('Data telah dihapus');</script>");
    echo("<script>document.location='halaman-admin.php'</script>");
    
    }
    else{
    echo("<script>alert('Gagal');</script>");
    echo("<script>document.location='halaman-admin.php'</script>");
    
    }
    