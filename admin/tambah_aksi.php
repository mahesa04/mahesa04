<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
 
// menginput data ke database
mysqli_query($conn, "insert into barang set nama='$nama', jenis='$jenis', harga='$harga', gambar='$gambar'");

 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
 
?>