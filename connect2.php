<?php
//untuk menghilangkan error
error_reporting(0);
// nama server = locallhost
// username = root 
// password = 
$koneksi =mysql_connect("localhost", "u411308843_admin", "Shield123") or die ("GAGAL CONNECT");
//isi database kita
mysql_select_db("u411308843_shaka") or die ("gagal masuk db");
?>