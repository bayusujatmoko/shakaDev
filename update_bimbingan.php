<?php
	include 'connect.php';
	$nim=$_POST['nim'];
	$nidn=$_POST['nidn'];
	$dosen=$_POST['dosen'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	$telepon= $_POST['telepon'];
	$judul= $_POST['judul'];
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE bimbingan SET nama ='$nama', nidn ='$nidn',dosen ='$dosen', jurusan='$jurusan', fakultas='$fakultas', email='$email', telepon='$telepon', judul='$judul' WHERE nim='$nim'");
	if ($q){
		echo "<script>alert('Berhasil !'); window. location = 'tampil_bimbingan_mhs.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>