<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <style>
		table tr td,
		table tr th{
			font-size: 12pt;
            padding: 10px;
		}
	</style>
</head>
<body>
<?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>

<div class="card1">
    <div class="head_card1"></div>
        <img src="../gambar/acer.jpg">
        <div class="body_card1">
        <h1><?php echo $d['nama']; ?> </h1><!--MENAMPILKAN BARANG MASIH BELUM SELESAI DAN SALAH SATUNYA ITU  MENAMBAH GAMBAR-->
        <p><?php echo $d['jenis']; ?> </p>
        <h2><?php echo $d['harga']; ?> </h2>
    </div>
</div>




  <?php 
		}
		?>

<script>
		window.print();
</script>
</body>
</html>
