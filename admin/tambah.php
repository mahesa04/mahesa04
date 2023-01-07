<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
</head>
<body>
 
	<h2>Tambah Barang</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
            <tr>
				<td>gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>