<?php
	include 'connect.php';
	$nim=$_POST['nim'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	$telepon= $_POST['telepon'];
	$judul= $_POST['judul'];
	$tanggapan= $_POST['tanggapan'];
	//mengecek jika kosong
	$q =mysql_query("UPDATE bimbingan SET nama ='$nama', jurusan='$jurusan', fakultas='$fakultas', email='$email', telepon='$telepon', judul='$judul', tanggapan='$tanggapan' WHERE nim='$nim'");
	if ($q){
		echo "<script>alert('Berhasil !'); window. location = 'tampil_bimbingan.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>