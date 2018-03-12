<?php
	include 'connect.php';
	$nim=$_POST['nim'];
	$nidn=$_POST['nidn'];
	$dosen = $_POST['dosen'];
	$nama = $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$fakultas= $_POST['fakultas'];
	$email= $_POST['email'];
	$telepon= $_POST['telepon'];
	$judul= $_POST['judul'];
	$tanggapan= $_POST['tanggapan'];
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = date("Y-m-d");
	if (empty($nim)){
	echo "<script>alert('NIM belum diisi'); history.go(-1)</script>";
	} else if (empty($nidn)){
	echo "<script>alert('NIDN belum diisi'); history.go(-1)</script>";
	} else if (empty($dosen)){
	echo "<script>alert('Nama Dosen belum diisi'); history.go(-1)</script>";
	}  else if (empty($nama)){
	echo "<script>alert('Nama belum diisi'); history.go(-1)</script>";
	} else if (empty($jurusan)){
	echo "<script>alert('Jurusan belum diisi'); history.go(-1)</script>";
	}else if(empty($fakultas)){
	echo "<script>alert('Fakultas belum diisi'); history.go(-1)</script>";
	}else if (empty($email)){
	echo "<script>alert('Email belum diisi'); history.go(-1)</script>";
	}else if (empty($telepon)){
	echo "<script>alert('telepon belum diisi'); history.go(-1)</script>";
	}else if (empty($judul)){
	echo "<script>alert('judul belum diisi'); history.go(-1)</script>";
	}else{
		$q = mysql_query("insert into bimbingan values ('', '$nim', '$nidn','$dosen', '$nama', '$jurusan','$fakultas','$email','$telepon','$judul','Menunggu konfirmasi dosen...','$tanggal')");
		if ($q){
			echo "<script>alert('Berhasil Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar_bimbingan.php'>";
		}else{
			echo "<script>alert('Gagal Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar_bimbingan.php'>";
	}
}
?>

