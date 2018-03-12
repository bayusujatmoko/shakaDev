<?php
	include ("connect.php");
	session_start();

	function random($length)
	{
	    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $string = '';
	    for($i = 0; $i < $length; $i++) {
	        $pos = rand(0, strlen($data)-1);
	        $string .= $data{$pos};
	    }
	    return $string;
	}

	$acak = random(8);
	$acaks = md5($acak);
	$email = $_POST['email'];

	if (empty($email)){
	echo "<script>alert('Email belum diisi'); history.go(-1)</script>";
	}else{
		$sql = mysql_query("SELECT * FROM admin WHERE email='$email'");
		$sql1 = mysql_query("SELECT * FROM mahasiswa WHERE email='$email'");
		$sql2 = mysql_query("SELECT * FROM dosen WHERE email='$email'");
		
		if((mysql_num_rows($sql) == 0) and (mysql_num_rows($sql1) == 0) and (mysql_num_rows($sql2) == 0)){
			echo "<script>alert('Email salah atau Email tidak ditemukan')</script>";
			echo "<meta http-equiv='refresh' content='1 url=reset_pass.html'>";
		}else{
			$q =mysql_query("UPDATE admin SET password='$acaks' WHERE email='$email'");
			$q1 =mysql_query("UPDATE mahasiswa SET password='$acaks' WHERE email='$email'");
			$q2 =mysql_query("UPDATE dosen SET password='$acaks' WHERE email='$email'");
			if ($q or $q1 or $q2){
				ini_set('display_errors', 1 );
				error_reporting( E_ALL );
				$from    = "Sharing Knowledge Application <bayusujatmoko@gmail.com>";
				$to 	 = $email;
				$subject = "Reset Password akun SHAKA";
				$message = "Kami memberikan password default dari sistem. Segera ubah password anda setelah melakukan login. Untuk melakukan login, Silahkan masukkan password berikut : ".$acak;
				$headers = "From:" . $from;
				mail($to,$subject,$message, $headers);
				echo "<script>alert('Password Berhasil di Reset. Coba cek Email anda sekarang. Jika tidak ada di Inbox cek Spam'); window.location = 'reset_pass.html'</script>";
			} else {
				echo "<script>alert('Gagal !'); history.go(-1)</script>";
			}
		}
	}
?>