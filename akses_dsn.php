<?php
session_start();
 
if(!isset($_SESSION['dosen'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.html";</script>';
}
?>