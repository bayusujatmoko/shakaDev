<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "connect.php";
include "akses_admin.php";
$topic = $_POST['topic'];
$sql="SELECT * FROM forum_question where topic like '%$topic%'";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum</title>
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
        	<div class="mdl-layout__header-row">
            	<span class="mdl-layout-title">Hasil Pencarian Forum Diskusi</span>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>
        <div class="mdl-layout__drawer" style="height:wrap;">
            <span class="mdl-layout-title">Forum</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap;">
            	<div class="page-content" style="min-height: 75vh;">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div style="padding-top:30px">
			             <center><label>* Klik topik diskusi untuk masuk kedalam forum.</label></center><br>
                        <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                        <tr>
                        <th width="6%" align="center" bgcolor="#E6E6E6">ID</th>
                        <th width="53%" align="center" bgcolor="#E6E6E6">Topik Diskusi</th>
                        <th width="15%" align="center" bgcolor="#E6E6E6">Views</th>
                        <th width="13%" align="center" bgcolor="#E6E6E6">Replies</th>
                        <th width="13%" align="center" bgcolor="#E6E6E6">Date/Time</th>
                        </tr>

                        <?php

                         
                        // Start looping table row
                        while($rows=mysql_fetch_array($result)){
                        ?>
                        <tr>
                        <td align="center"><center><?= $rows['id']; ?></center></td>
                        <td align="center">
                        <a class="mdl-navigation__link" href="view_topic_admin.php?id=<?php echo $rows['id']; ?>" >
                        <div id="btn-submit">
                        <?=$rows['topic']; ?>
                        </div>
                        </a>
                        </td>
                        <td align="center"><center><?= $rows['view']; ?></center></td>
                        <td align="center"><center><?= $rows['reply']; ?></center></td>
                        <td align="center"><center><?= $rows['datetime']; ?></center></td>
                        </tr>
                        <?php
                        // Exit looping and close connection
                        }
                        mysql_close();
                        ?>

                        <tr>
                        </tr>
                        </table>
                                              
                        </div>	
						 <div class="mdl-cell mdl-cell--8-col"></div>					
                        </div>
                        </div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        </div>
                    </div>
                </div>
            
            <div style="height: wrap">
          <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer--center-section">
              <div align="center" class="mdl-logo">Logo</div>
                <ul class="mdl-mini-footer--link-list">
                  <li><a href="#">Help</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
          </footer>
          </div>
          </main>
    </div>
</body>
</html>
