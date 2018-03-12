<?php
include "connect.php";
session_start();
	$username = mysql_real_escape_string(htmlentities($_POST['username']));
	$password = md5(mysql_real_escape_string(htmlentities($_POST['password'])));

	$sql = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysql_error());
	$sql1 = mysql_query("SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'") or die(mysql_error());
	$sql2 = mysql_query("SELECT * FROM dosen WHERE username='$username' AND password='$password'") or die(mysql_error());
	
	if((mysql_num_rows($sql) == 0) and (mysql_num_rows($sql1) == 0) and (mysql_num_rows($sql2) == 0)){
		echo "<script>alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.html'>";
	}else{
		$row = mysql_fetch_assoc($sql);
		$row1 = mysql_fetch_assoc($sql1);
		$row2 = mysql_fetch_assoc($sql2);
	
		if($row['level'] == 1){
			$_SESSION['admin'] = $username;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai Admin!"); document.location="index_admin.php";</script>';
		}else if($row1['level'] == 2) {
			$_SESSION['mahasiswa'] = $username;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai Mahasiswa!"); document.location="index_mhs.php";</script>';
		}else if($row2['level'] == 3){
			$_SESSION['dosen'] = $username;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai Dosen!"); document.location="index_dsn.php";</script>';
		}
	}
?>