<?php
  include("connect.php");
  include("akses_admin.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Berita</title>
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
            	<span class="mdl-layout-title">Shaka - Tambah Berita</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">			 					
                  <a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Tambah Berita</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap;">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--4-col"></div>
                        <div class="mdl-cell mdl-cell--4-col"></div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
            <form method="post" action="tambah_berita.php" enctype="multipart/form-data">
         			 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          			 <input name="judul" class="mdl-textfield__input" type="text" style="margin-left:30px">
               <label name="judul" class="mdl-textfield__label" for="user" style="margin-left:30px">Judul Berita</label>
              </div><br/>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea name="informasi" class="mdl-textfield__input" type="text" style="margin-left:30px"></textarea>
                <label name="informasi" class="mdl-textfield__label" for="text" style="margin-left:30px">Informasi Berita</label>
              </div><br />
              <label style="padding: 30px;">Tanggal Berita</label><br>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="tanggal" class="mdl-textfield__input" type="date" style="margin-left:30px">
                <label name="tanggal" class="mdl-textfield__label" for="text" style="margin-left:30px"></label>
              </div><br />
              <label style="padding: 30px;">Upload Gambar Berita</label>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="img" class="mdl-textfield__input" type="file" style="margin-left:30px">
                <label name="img" class="mdl-textfield__label" for="text" style="margin-left:30px"></label>
              </div><br />
		  <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px" onclick="return klikTambah();">Submit</button>
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

