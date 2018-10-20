<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_ta7');
	if(isset($_GET['nim'])) {
		$nim = $_GET['nim'];
		$query = mysqli_query($conn, "SELECT * FROM tb_ta7 WHERE nim=$nim");
		while ($data = mysqli_fetch_array($query)) {
?>

			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<center>
				<form method="POST" action="#">
					<table>
						<tr>
							<td>NIM</td>
							<td><input type="text" name="nim" disabled value= <?php echo $data['nim']; ?>></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value=<?php echo $data['nama']; ?>></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tgl" value=<?php echo $data['tgl']; ?>></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>
								<select name="gen">
									<option>---Pilih---</option>
									<option value="Laki"<?php echo ($data['gen']=="Laki-laki")?'selected':'' ?>>Laki-laki</option>
									<option value="Perempuan"<?php echo ($data['gen']=="Perempuan")?'selected':'' ?>>Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td>
								<select name="prodi">
										<option>---Pilih---</option>
										<option value="si"<?php echo ($data['prodi']=="Sistem Infromasi")?'selected':'' ?>>Sistem Infromasi</option>
										<option value="tt"<?php echo ($data['prodi']=="Teknik Telekomunikasi")?'selected':'' ?>>Teknik Telekomunikasi</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>
								<input type="radio" name="fak" value="fit" <?php echo ($data['fak']=="Fakultas Ilmu Terapan")?'checked':'' ?>>Fakultas Ilmu Terapan<br>
								<input type="radio" name="fak" value="fte" <?php echo ($data['fak']=="Fakultas Teknik Elektro")?'checked':'' ?>>Fakultas Teknik Elektro
							</td>
						</tr>
						<tr>
							<td>Asal</td>
							<td><input type="text" name="asal" value=<?php echo $data['asal']; ?>></td>
						</tr>
						<tr>
							<td>Motto</td>
							<td><textarea name="moto"><?php echo $data['moto'] ?></textarea></td>
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
		}
	}

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tgl = $_POST['tgl'];
		$gen = $_POST['gen'];
		$prodi = $_POST['prodi'];
		$fak = $_POST['fak'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		if(isset($nim)) {
			$query = mysqli_query($conn, "UPDATE tb_ta7 SET nim='$nim', nama='$nama', tgl='$tgl', gen='$gen', prodi='$prodi', fak='$fak', asal='$asal', moto='$moto' WHERE nim='$nim'");

			if($query) {
				echo "Berhasil";
				header("Location:view.php");
			} else {
				echo "Gagal";
			}
		}
	}
?>