<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "connect.php";
include "akses_dsn.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Bimbingan</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script type="text/javascript" src="material.min.js"></script>
<link rel="stylesheet" type="text/css" href="material.min.css"/>
</head>

<body bgcolor="#D4DFFF">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    	<header class="mdl-layout__header" style="background-color:#0680F9">
        	<div class="mdl-layout__header-row">
            	<span class="mdl-layout-title">Edit Data Bimbingan</span>
                <div class="mdl-layout-spacer"></div>
               
            </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Edit Bimbingan</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="tampil_bimbingan.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Data</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--4-col"></div>
                        <div class="mdl-cell mdl-cell--4-col"></div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                             <?php
                              include 'connect.php';
                              $id = $_GET['id'];
                              $q = mysql_query("select * from bimbingan where id='$id'");
                              $record = mysql_fetch_array($q);
                              ?>
                              <form action="update_bimbingan_dsn.php" method="POST">
                                <br>
                                <input name= "id" value="<?=$record['id'];?>" type="hidden" id="user" style="margin-left:30px" readonly >
                               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input name= "nim" value="<?=$record['nim'];?>" class="mdl-textfield__input" type="text" id="user" style="margin-left:30px" readonly >
                                <label class="mdl-textfield__label" for="user" style="margin-left:30px">NIM</label>
                                </div><br/>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "nama" value="<?=$record['nama'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">Nama</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "jurusan" value="<?=$record['jurusan'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">Jurusan</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "fakultas" value="<?=$record['fakultas'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">Fakultas</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "email" value="<?=$record['email'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">E-Mail</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "telepon" value="<?=$record['telepon'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">No Telepon</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "judul" value="<?=$record['judul'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px" readonly>
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">Judul Makalah / Bahasan</label>
                                </div><br />
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input name= "tanggapan" value="<?=$record['tanggapan'];?>" class="mdl-textfield__input" type="text" id="pass" style="margin-left:30px">
                                <label class="mdl-textfield__label" for="text" style="margin-left:30px">Tanggapan Dosen</label>
                                </div><br />
                              </select><br>
                              <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">SUBMIT</button>
                              <a href="index_dsn.php" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">Back to Home</a>
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
