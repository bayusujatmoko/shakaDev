<?php
	include 'connect.php';
	$nim=$_POST['nim'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	
	//mengecek jika kosong
	$q =mysql_query("update mahasiswa set nama ='$nama', jurusan='$jurusan', fakultas='$fakultas', email='$email' where nim='$nim'");
	if ($q){
		echo "<script>alert('Berhasil !'); window. location = 'tampil_mhs.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>