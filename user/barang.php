<?php 
 

 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Barang</title>
</head>
<?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
<div class="card">
       <div class="head-card">
       <?php echo "<img src='../gambar/$d[gambar]'";?>
      <img src="gambar/images.jpg" alt="">
       </div>
       <div class="body-card">
      <h1><?php echo $d['nama']; ?> </h1>
      <p><?php echo $d['jenis']; ?> </p>
      <h2><?php echo $d['harga']; ?> </h2>
      <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
       </div>
</div>
  <?php 
		}
		?>