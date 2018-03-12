<?php
session_start();
 
if(!isset($_SESSION['mahasiswa'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.html";</script>';
}
?>