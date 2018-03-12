<?php
include "connect.php";

// Get value of id that sent from hidden field
$id=$_POST['id'];

	$a_name=$_POST['a_name'];
	$a_email=$_POST['a_email'];
	$a_answer=$_POST['a_answer'];
	date_default_timezone_set("Asia/Jakarta");
	$datetime=date("l d/m/y H:i:s"); // create date and time

	if (empty($a_name)){
	echo "<script>alert('Nama wajib diisi'); history.go(-1)</script>";
	} else if (empty($a_email)){
	echo "<script>alert('Email wajib diisi'); history.go(-1)</script>";
	} else if (empty($a_answer)){
	echo "<script>alert('Jawaban wajib diisi'); history.go(-1)</script>";
	} else {
		$sql = mysql_query("SELECT * FROM forum_answer WHERE question_id = '$id'");
		$Max_id = mysql_num_rows($sql);
		$reply = $Max_id+1;

		// If added new answer, add value +1 in reply column
		$sql1="UPDATE forum_question SET reply='$reply' WHERE id='$id'";
		$result1=mysql_query($sql1);
		
		// Insert answer
		$sql2 = "INSERT INTO forum_answer(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '', '$a_name', '$a_email', '$a_answer', '$datetime')";
			$result2=mysql_query($sql2);

		if($result1 and $result2){
			echo "<script>alert('Jawaban Berhasil Ditambahkan')</script>";
			echo "<meta http-equiv='refresh' content='1 url=view_topic_dsn.php?id=".$id."'>";
		}else{
			echo "ERROR";
		}
	}
// Close connection

mysql_close();
?>