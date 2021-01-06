<?php
	include "koneksi.php";
	
	$id = $_GET['id'];

	$delete = mysqli_query($con, "DELETE FROM data_siswa WHERE id = '$id'");

	header("location: index.php");
?>