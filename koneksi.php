<?php 
	$servername = "localhost"; //BISA DIKASIH NILAI LOCALHOST ATAU 127.0.0.1
	$username = "root";
	$password = "";
	$dbname = "db_sekolah1";

	$con = mysqli_connect($servername, $username, $password, $dbname);
	if(!$con){
		echo "Gagal";
	}
?>