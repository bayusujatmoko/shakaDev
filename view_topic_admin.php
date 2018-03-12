<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "connect.php";
include "akses_admin.php";

// get value of id that sent from address bar
$id=$_GET['id'];

$query="SELECT * FROM forum_question WHERE id='$id'";
$result=mysql_query($query);


while($record=mysql_fetch_array($result)){
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Answer</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script type="text/javascript" src="material.min.js"></script>
<link rel="stylesheet" type="text/css" href="material.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/slide.css">
  <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="js/slide.js"></script>
  <script type="text/javascript" src="js/konten.js"></script>
</head>

<body bgcolor="#D4DFFF">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    	<header class="mdl-layout__header" style="background-color:#0680F9">
        	<div class="mdl-layout__header-row" style="width: wrap">
                <span class="mdl-layout-title">Forum | <?=$record['topic']; ?></span>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>
        <div class="mdl-layout__drawer" style="height:wrap;">
            <span class="mdl-layout-title">Discussion</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
                <a class="mdl-navigation__link" href="main_forum_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Topic</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh;">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div style="margin:30px; padding-top:10px">
                        <table style="width: 800px" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                        <tr>
                        <td><table style="width: 100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
                        <tr>Topik Diskusi</tr><br><br>
                        <tr>
                        <td bgcolor="#F8F7F1"><strong><?= $record['topic']; ?></strong></td>
                        </tr>

                        <tr>
                        <td bgcolor="#F8F7F1"><?= $record['detail']; ?></td>
                        </tr>

                        <tr>
                        <td bgcolor="#F8F7F1"><strong>By :</strong> <?= $record['name']; ?> <strong>Email : </strong><?= $record['email'];?></td>
                        </tr>

                        <tr>
                        <td bgcolor="#F8F7F1"><strong>Tanggal/Waktu : </strong><?= $record['datetime']; ?></td>
                        </tr>
                        </table></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <BR>

                    <?php

                    $sql2="SELECT * FROM forum_answer WHERE question_id='$id' ORDER BY a_id ASC";
                    $result2=mysql_query($sql2);

                    while($record=mysql_fetch_array($result2)){
                    ?>

                    <table style="margin-top: 20px; width: 800px;" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                        <tr>
                        <td><table style="width: 100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                        <td width="18%" bgcolor="#F8F7F1"><strong>Nama</strong></td>
                        <td width="5%" bgcolor="#F8F7F1">:</td>
                        <td width="77%" bgcolor="#F8F7F1"><?= $record['a_name']; ?></td>
                        </tr>
                        <tr>
                        <td bgcolor="#F8F7F1"><strong>Email</strong></td>
                        <td bgcolor="#F8F7F1">:</td>
                        <td bgcolor="#F8F7F1"><?= $record['a_email']; ?></td>
                        </tr>
                        <tr>
                        <td bgcolor="#F8F7F1"><strong>Tanggal/Waktu</strong></td>
                        <td bgcolor="#F8F7F1">:</td>
                        <td bgcolor="#F8F7F1"><?= $record['a_datetime']; ?></td>
                        </tr>
                        <tr>
                        <td bgcolor="#F8F7F1"><strong>Jawaban</strong></td>
                        <td bgcolor="#F8F7F1">:</td>
                        <td bgcolor="#F8F7F1"><?= $record['a_answer']; ?></td>
                        </tr>
                        </table></td>
                        </tr>
                        <?php } ?>
                    </table><br>

                     

                    <?php

                    $sql3="SELECT view FROM forum_question WHERE id='$id'";
                    $result3=mysql_query($sql3);

                    while($record=mysql_fetch_array($result3)){
                        $view=$record['view'];

                         

                        // if have no counter value set counter = 1
                        if(empty($view)){
                        $view=0;
                        $sql4="INSERT INTO forum_question(view) VALUES('$view') WHERE id='$id'";
                        $result4=mysql_query($sql4);
                        }

                         

                        // count more value
                        $addview=$view+1;
                        $sql5="update forum_question set view='$addview' WHERE id='$id'";
                        $result5=mysql_query($sql5);
                    }
                   
                    ?>

                    
                                              
                        </div>	
						 <div class="mdl-cell mdl-cell--8-col"></div>					
                        </div>
                        </div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        </div>
                    </div>
                </div>
                </main>
          <div style="height: wrap">
          <footer style="background: #212a38">
              <center>
              <div style="padding: 5px;">
                  <?php
                        $username=$_SESSION['admin'];
                        $q=mysql_query("SELECT * FROM admin WHERE username='$username'");
                        while($res=mysql_fetch_array($q)){ 
                    ?>
                    <table style="width: 800px" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                        <label>
                            <strong>Nama Anda : <?= $res['nama']; ?> | Email Anda : <?= $res['email'];?></strong>
                        </label>
                        <tr>
                        <form name="form1" method="post" action="add_answer_admin.php">
                        <td>
                        <table style="width: 100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <input value="<?=$res['nama'];?>" name="a_name" type="hidden" id="a_name" size="45" readonly>
                        <input value="<?=$res['email'];?>" name="a_email" type="hidden" id="a_email" size="45" readonly>
                        <tr>
                        <td style="color: black" valign="top"><strong>Jawaban</strong></td>
                        <td style="color: black" valign="top">:</td>
                        <td><textarea name="a_answer" cols="45" rows="3" id="a_answer" style="height: 60px; color: black"></textarea></td>
                        </tr>
                        <tr>
                        <td>&nbsp;</td>
                        <td><input name="id" type="hidden" value="<?= $id; ?>"></td>
                        <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
                        </tr>
                        </table>
                        </td>
                        </form>
                        </tr>
                    </table>
                    <?php
                        }
                    ?>
              </div>
          </footer>
          </div>
    </div>
</body>
</html>
