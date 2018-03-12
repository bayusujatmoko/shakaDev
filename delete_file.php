<?php
	include 'connect.php';
	$id = $_GET['id'];
	$nama = $_GET['nama_file'];
	$tipe = $_GET['tipe_file'];
	$target = 'files/'.$nama.'.'.$tipe;
	$q = mysql_query("DELETE from download where id='$id'");
	$p = unlink($target);
	if ($p and $q){
		echo "<script>alert('File Berhasil Dihapus!'); window.location = 'upload_materi.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>