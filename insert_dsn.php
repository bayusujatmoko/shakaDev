<?php
	include 'connect.php';
	$nidn=$_POST['nidn'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	$username= $_POST['username'];
	$password= md5($_POST['password']);
	$ulangPassword= md5($_POST['ulangPassword']);
	if (empty($nidn)){
	echo "<script>alert('NIDN belum diisi'); history.go(-1)</script>";
	} else if (empty($nama)){
	echo "<script>alert('Nama belum diisi'); history.go(-1)</script>";
	} else if (empty($jurusan)){
	echo "<script>alert('Jurusan belum diisi'); history.go(-1)</script>";
	}else if(empty($fakultas)){
	echo "<script>alert('Fakultas belum diisi'); history.go(-1)</script>";
	}else if (empty($email)){
	echo "<script>alert('email belum diisi'); history.go(-1)</script>";
	} else if (empty($username)){
	echo "<script>alert('username belum diisi'); history.go(-1)</script>";
	} else if (empty($password)){
	echo "<script>alert('Password belum diisi'); history.go(-1)</script>";
	} else if (empty($ulangPassword)){
	echo "<script>alert('Konfirmasi Password belum diisi'); history.go(-1)</script>";
	} else if ($password != $ulangPassword){
	echo "<script>alert('Konfirmasi Password tidak cocok'); history.go(-1)</script>";
	} else{
		$q = mysql_query("insert into dosen values ('$nidn','', '$nama', '$jurusan','$fakultas','$email','$username','$password', 3, 10000001)");
		if ($q){
			echo "<script>alert('Berhasil Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar_dsn.php'>";
		}else{
			echo "<script>alert('Username atau E-Mail telah digunakan')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar_dsn.php'>";
	}
}
?>

