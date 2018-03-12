<?php
	include ("connect.php");
	$img = $_FILES['img']['name'];
	$imgs = exif_imagetype($_FILES['img']['tmp_name']);
	$judul = $_POST['judul'];
	$tanggal= $_POST['tanggal'];
	$informasi= $_POST['informasi'];
	$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
	
	if (empty($judul)){
	echo "<script>alert('Judul Berita belum diisi'); history.go(-1)</script>";
	} else if (empty($informasi)){
	echo "<script>alert('Informasi belum diisi'); history.go(-1)</script>";
	}else if (empty($tanggal)){
	echo "<script>alert('Tanggal belum diisi'); history.go(-1)</script>";
	}else if (empty($img)){
	echo "<script>alert('Gambar belum diupload'); history.go(-1)</script>";
	}else{
		
		$p = in_array($imgs, $allowed);

		if(!$p){
			echo "<script>alert('Update Gagal ! File upload yang diizinkan hanya file gambar dengan format jpg, png dan gif.'); history.go(-1)</script>";
		} else {
			move_uploaded_file($_FILES['img']['tmp_name'], "Images/".$_FILES['img']['name']);
			$q = mysql_query("INSERT INTO berita (id,img,judul,tanggal,informasi,id_admin) VALUES ('','$img', '$judul', '$tanggal', '$informasi',10000001)");
			if($q){
				echo "<script>alert('Data Berhasil Diubah !'); window.location = 'tampil_profil_admin.php'</script>";
			}else{
				echo "<script>alert('Update Gagal !'); window.location = 'tampil_profil_admin.php'</script>";
			}
		}
	}
?>

