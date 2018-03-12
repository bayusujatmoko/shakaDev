<?php
//untuk menghilangkan error
error_reporting(0);
// nama server = locallhost
// username = root 
// password = 
$koneksi =mysql_connect("localhost", "root", "") or die ("GAGAL CONNECT");
//isi database kita
mysql_select_db("shaka") or die ("gagal masuk db");
?>