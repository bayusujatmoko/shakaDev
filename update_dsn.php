<?php
	include 'connect.php';
	$nidn=$_POST['nidn'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE dosen SET nama ='$nama', jurusan='$jurusan', fakultas='$fakultas', email='$email' WHERE nidn='$nidn'");
	if ($q){
		echo "<script>alert('Berhasil !'); window. location = 'tampil_dsn.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>