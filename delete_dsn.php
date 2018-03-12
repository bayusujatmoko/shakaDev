<?php
	include 'connect.php';
	$nidn = $_GET['nidn'];
	
	$q = mysql_query("DELETE from dosen where nidn='$nidn'");
	if ($q){
		echo "<script>alert('Berhasil !'); window.location = 'tampil_dsn.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
		}
?>