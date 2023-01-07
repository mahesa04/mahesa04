<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
 
// update data ke database
mysqli_query($conn,"update barang set nama='$nama', jenis='$jenis', harga='$harga', gambar='$gambar' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_utama.php");
 
?>