<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_ta7');
	$sqli = mysqli_query($conn, "SELECT * FROM tb_ta7");
?>

<!DOCTYPE html>
<html>
<head>
	<title>TA 7</title>
</head>
<body>
	<center>
		<form>
			<table border="1" cellpadding="5">
				<th>NIM</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto</th>
				<th>Aksi</th>

				<?php
					while ($data = mysqli_fetch_array($sqli)) {
						echo"<tr>";
						echo"<td>".$data['nim']."</td>";
						echo"<td>".$data['nama']."</td>";
						echo"<td>".$data['tgl']."</td>";
						echo"<td>".$data['gen']."</td>";
						echo"<td>".$data['prodi']."</td>";
						echo"<td>".$data['fak']."</td>";
						echo"<td>".$data['asal']."</td>";
						echo"<td>".$data['moto']."</td>";
						echo "<td><a href=delete.php?nim=".$data['nim']."> Hapus </a> || <a href=edit.php?nim=".$data['nim']."> Edit </a></td>";
						echo"<tr>";
					}
				?>
			</table>
		</form>
		<a href="input.php"> INPUT </a>
	</center>
</body>
</html>