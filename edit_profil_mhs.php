<?php
	include ("connect.php");
	$nim=$_POST['nim'];
	$img = $_FILES['img']['name'];
	$imgs = exif_imagetype($_FILES['img']['tmp_name']);
	$nama = $_POST['nama'];
	$fakultas= $_POST['fakultas'];
	$jurusan= $_POST['jurusan'];
	$email= $_POST['email'];
	$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
	
	//mengecek jika kosong
	
	$p = in_array($imgs, $allowed);

	if(!$p){
		echo "<script>alert('Update Gagal ! File upload yang diizinkan hanya file gambar dengan format jpg, png dan gif.'); history.go(-1)</script>";
	} else {
		move_uploaded_file($_FILES['img']['tmp_name'], "Images/profilimg/".$_FILES['img']['name']);
		$q =mysql_query("UPDATE mahasiswa SET img = '$img', nama ='$nama', jurusan='$jurusan', email='$email',fakultas='$fakultas' WHERE nim='$nim'");
		if($q){
			echo "<script>alert('Data Berhasil Diubah !'); window.location = 'tampil_profil_admin.php'</script>";
		}else{
			echo "<script>alert('Update Gagal !'); window.location = 'tampil_profil_admin.php'</script>";
		}
	}
?>