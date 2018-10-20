<!DOCTYPE html>
<html>
<head>
	<title>TA 7</title>
</head>
<body>
	<center>
	<form method="POST" action="view.php">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="gen">
						<option>---Pilih---</option>
						<option value="Laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
					<select name="prodi">
							<option>---Pilih---</option>
							<option value="si">Sistem Infromasi</option>
							<option value="tt">Teknik Telekomunikasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
					<input type="radio" name="fak" value="fit">Fakultas Ilmu Terapan<br>
					<input type="radio" name="fak" value="fte">Fakultas Teknik Elektro
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto</td>
				<td><textarea name="moto"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>

<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_ta7');

	if(isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tgl = $_POST['tgl'];
		$gen = $_POST['gen'];
		$prodi = $_POST['prodi'];
		$fak = $_POST['fak'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		$query = "INSERT INTO tb_ta7 VALUES ('$nim', '$nama', '$tgl', '$gen', '$prodi', '$fak', '$asal', '$moto')";
		$sql = mysqli_query($conn, $query);

		if($sql) {
			echo "Berhasil";
		} else {
			echo "Gagal";
		}
	}
?>