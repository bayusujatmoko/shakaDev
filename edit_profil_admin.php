<?php
	include ("connect.php");
	$id=$_POST['id'];
	$img = $_FILES['img']['name'];
	$imgs = exif_imagetype($_FILES['img']['tmp_name']);
	$nama = $_POST['nama'];
	$telepon= $_POST['telepon'];
	$email= $_POST['email'];
	$alamat= $_POST['alamat'];
	$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);

	//mengecek jika kosong
	$p = in_array($imgs, $allowed);

	if(!$p){
		echo "<script>alert('Update Gagal ! File upload yang diizinkan hanya file gambar dengan format jpg, png dan gif.'); history.go(-1)</script>";
	} else {
		move_uploaded_file($_FILES['img']['tmp_name'], "Images/profilimg/".$_FILES['img']['name']);
		$q = mysql_query("UPDATE admin SET img = '$img', nama ='$nama', telepon='$telepon', email='$email',alamat='$alamat' WHERE id='$id'");
		if($q){
			echo "<script>alert('Data Berhasil Diubah !'); window.location = 'tampil_profil_admin.php'</script>";
		}else{
			echo "<script>alert('Update Gagal !'); window.location = 'tampil_profil_admin.php'</script>";
		}
	}
?>