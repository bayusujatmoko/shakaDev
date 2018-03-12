<?php
  include("connect.php");
  include("akses_admin.php");
  $id = $_GET['id'];
  $query = mysql_query("SELECT * FROM admin WHERE id = '$id'");
  $result = mysql_fetch_array($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script type="text/javascript" src="material.min.js"></script>
<link rel="stylesheet" type="text/css" href="material.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="js/konten.js"></script>
</head>

<body bgcolor="#D4DFFF">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    	<header class="mdl-layout__header" style="background-color:#0680F9">
        	<div class="mdl-layout__header-row">
            	<span class="mdl-layout-title">Shaka - Edit Profil Admin</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">			 					
                  <a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Edit Profil Admin</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--4-col"></div>
                        <div class="mdl-cell mdl-cell--4-col"></div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
            <form method="post" action="edit_profil_admin.php" enctype="multipart/form-data">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input name="id" class="mdl-textfield__input" type="number" value="<?= $result['id'];?>" style="margin-left:30px" readonly>
               <label name="id" class="mdl-textfield__label" for="user" style="margin-left:30px">ID Admin</label>
              </div><br/>
         			 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          			 <input name="nama" class="mdl-textfield__input" type="text" value="<?= $result['nama'];?>" style="margin-left:30px" required>
               <label name="nama" class="mdl-textfield__label" for="user" style="margin-left:30px">Nama</label>
              </div><br/>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input name="telepon" class="mdl-textfield__input" type="text" value="<?= $result['telepon'];?>" style="margin-left:30px" required>
               <label name="telepon" class="mdl-textfield__label" for="user" style="margin-left:30px">Telepon</label>
              </div><br/>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input name="email" class="mdl-textfield__input" type="text" value="<?= $result['email'];?>" style="margin-left:30px" required>
               <label name="email" class="mdl-textfield__label" for="user" style="margin-left:30px">Email</label>
              </div><br/>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea name="alamat" class="mdl-textfield__input" type="text" style="margin-left:30px" required><?=$result['alamat'];?></textarea>
                <label name="alamat" class="mdl-textfield__label" for="text" style="margin-left:30px">Alamat</label>
              </div><br />
              <center><img style="width: 200px; height:200px;" src="Images/profilimg/<?php echo $result['img'];?> "></center><br>
              <label style="padding: 30px;">Upload gambar profil</label>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="img" class="mdl-textfield__input" type="file" style="margin-left:30px" required>
                <label name="img" class="mdl-textfield__label" for="text" style="margin-left:30px"></label>
              </div><br />
		  <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px" onclick="return klikUbah();">Submit</button>
      <button type="reset" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">Reset</button>
		</form></div>
                        </div>
                    </div>
                </div>
            
          <div style="height: wrap">
          <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer--left-section">
              <div class="mdl-logo">Logo</div>
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

