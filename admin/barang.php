<?php 
 
 include 'config.php';
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Utama</title>
</head>
<a href="logout.php" class="btn1">Logout</a>
<body>
<?php 
		
		$no = 1;
		$data = mysqli_query($conn,"SELECT * FROM barang");  
		while($d = mysqli_fetch_array($data)){
			?>

<div class="card1">
    <div class="head_card1"></div>
    <a href="gambar/<?php echo $d['gambar']?>"><img src="gambar/<?php echo $d['gambar']?>"></a>
    <div class="body_card1">
    <h1><?php echo $d['nama']; ?> </h1><!--MENAMPILKAN BARANG MASIH BELUM SELESAI DAN SALAH SATUNYA ITU  MENAMBAH GAMBAR-->
      <p><?php echo $d['jenis']; ?> </p>
      <h2><?php echo $d['harga']; ?> </h2>
      <a href="tambah.php?id=<?php echo $d['id']; ?>">TAMBAH</a>|&nbsp;
      <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>|&nbsp;
	    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>|&nbsp;
        <a href="cetak_barang.php?id=<?php echo $d['id']; ?>">Cetak</a>
    </div>
</div>




  <?php 
		}
		?>

