<?php
session_start();
if(isset($_POST['submit'])){
	if(isset($_SESSION['dosen'])){
		echo '<script language="javascript">document.location="main_forum_dsn.php";</script>';
	} else if (isset($_SESSION['mahasiswa'])){
		echo '<script language="javascript">document.location="main_forum_mhs.php";</script>';
	} else if (isset($_SESSION['admin'])){
		echo '<script language="javascript">document.location="main_forum_admin.php";</script>';
	} else {
		echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.html";</script>';
	}
}
?>