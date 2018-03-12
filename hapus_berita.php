<?php
	include ("connect.php");
	$id = $_GET['id'];
	
	$q = mysql_query("DELETE from berita where id='$id'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampil_berita.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>