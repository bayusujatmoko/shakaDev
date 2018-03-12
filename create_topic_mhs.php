<?php
include "connect.php";
// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
date_default_timezone_set("Asia/Jakarta");
$datetime=date("d/m/y H:i:s"); //create date time

if (empty($topic)){
	echo "<script>alert('Topic belum diisi'); history.go(-1)</script>";
}else if(empty($detail)){
	echo "<script>alert('Detail belum diisi'); history.go(-1)</script>";
}else if(empty($name)){
	echo "<script>alert('Nama belum diisi'); history.go(-1)</script>";
}else if(empty($email)){
	echo "<script>alert('Email belum diisi'); history.go(-1)</script>";
}else{
	$sql="INSERT INTO forum_question(topic, detail, name, email, datetime, id_admin)VALUES('$topic', '$detail', '$name', '$email', '$datetime',10000001)";
	$result=mysql_query($sql);
	if($result){
		echo "<script>alert('Berhasil Menambahkan Topic')</script>";
		echo "<meta http-equiv='refresh' content='1 url=main_forum_mhs.php'>";
	}else {
		echo "ERROR";
	}
}
mysql_close();
?>