<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>
<body>
	<h3><p><a href="index.php">Halaman Muka</a> / <a href="tambah.php">Halaman Admin</a></p>
	<p>Tambah Data Praktikan</p></h3>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>KOM</td>
				<td>:</td>
				<td>
					<select name="kom" required>
						<option>Pilih KOM</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option>Pilih Jurusan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Teknologi Informasi">Teknologi Informasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>