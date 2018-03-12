<?php
	include("connect.php");
	$nim = $_POST['nim'];
	$passLama = $_POST['passLama'];
	$passBaru= $_POST['passBaru'];
	$passBaruLagi= $_POST['passBaruLagi'];

	//mengecek jika kosong
	if (empty($passLama)){
	echo "<script>alert('Password lama belum diisi'); history.go(-1)</script>";
	} else if (empty($passBaru)){
	echo "<script>alert('Password baru belum diisi'); history.go(-1)</script>";
	} else if (empty($passBaruLagi)){
	echo "<script>alert('Konfirmasi Password belum diisi'); history.go(-1)</script>";
	} else if ($passBaru != $passBaruLagi ){
	echo "<script>alert('Konfirmasi Password tidak cocok'); history.go(-1)</script>";
	}else{
		$query = mysql_query("SELECT password FROM mahasiswa WHERE nim = '$nim' and password = '$passLama'");
		$row = mysql_fetch_assoc($query);
		
		if($row){
			$q = mysql_query("UPDATE mahasiswa SET password = '$passBaruLagi' WHERE nim='$nim'");
			
			if ($q){
				echo "<script>alert('Data Berhasil Diubah !'); window.location = 'form_ubah_pass_mhs.php'</script>";
			} else {
				echo "<script>alert('Gagal !'); history.go(-1)</script>";
			}
		} else {
			echo "<script>alert('Password lama tidak sesuai !'); window.location = 'form_ubah_pass_mhs.php'</script>";
		}
	}
?>