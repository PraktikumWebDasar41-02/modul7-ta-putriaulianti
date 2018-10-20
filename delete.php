<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_ta7');
	$nim = $_GET['nim'];
	$query = mysqli_query($conn, "DELETE FROM tb_ta7 WHERE nim = '$nim'");
	if($query) {
		echo "Data Terhapus";
		header("Location:view.php");
	}
?>