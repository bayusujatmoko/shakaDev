<?php
	include 'connect.php';
	$nim = $_GET['nim'];
	
	$q = mysql_query("DELETE from mahasiswa where nim='$nim'");
	if ($q){
		echo "<script>alert('Berhasil !'); window.location = 'tampil_mhs.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
		}
?>