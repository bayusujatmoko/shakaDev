<?php
  include "connect.php";
  include "akses_mhs.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Bimbingan</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script type="text/javascript" src="material.min.js"></script>
<link rel="stylesheet" type="text/css" href="material.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="main.js"></script>

</head>

<body bgcolor="#D4DFFF">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    	<header class="mdl-layout__header" style="background-color:#0680F9">
        	<div class="mdl-layout__header-row">
            	<span class="mdl-layout-title">Shaka - Daftar Bimbingan</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">			 					
                  <a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--4-col"></div>
                        <div class="mdl-cell mdl-cell--4-col"></div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
            <form method="post" name="daftar" action="insert_bimbingan.php">
         			 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          			 <input name="nim" class="mdl-textfield__input" type="text" style="margin-left:30px">
               <label name="nim" class="mdl-textfield__label" for="user" style="margin-left:30px">NIM</label>
              </div><br/>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label name="nidn" class="mdl-textfield__label" for="text" style="margin-left:30px">* Masukkan NIDN Dosen Anda</label>
                <input name="nidn" class="mdl-textfield__input" type="text" style="margin-left:30px">
              </div><br />
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label name="dosen" class="mdl-textfield__label" for="text" style="margin-left:30px">* Masukkan Nama Dosen Anda</label>
                <input name="dosen" class="mdl-textfield__input" type="text" style="margin-left:30px">
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="nama" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="nama" class="mdl-textfield__label" for="text" style="margin-left:30px">Nama</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="jurusan" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="jurusan" class="mdl-textfield__label" for="text" style="margin-left:30px">Jurusan</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="fakultas" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="fakultas" class="mdl-textfield__label" for="text" style="margin-left:30px">Fakultas</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="email" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="email" class="mdl-textfield__label" for="text" style="margin-left:30px">E-Mail</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="telepon" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="telepon" class="mdl-textfield__label" for="text" style="margin-left:30px">No Telepon</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="judul" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="judul" class="mdl-textfield__label" for="text" style="margin-left:30px">Judul Makalah / Bahasan</label>
              </div><br />
              <div style="padding: 30px" align="justify"><p>* Pastikan NIDN dan Nama Dosen yang anda masukkan sudah benar agar Dosen dapat melihat data anda</p></div>
        		  <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px" onclick="return klikTambah();">DAFTAR</button>
              <a href="index_mhs.php" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">Back to Home</a>
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

