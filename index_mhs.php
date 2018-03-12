<?php
include "connect.php";
include "akses_mhs.php";
$username=$_SESSION['mahasiswa'];
$query=mysql_query("SELECT * FROM mahasiswa WHERE username='$username'");
?>
<!--Berhasil Login, <a href="logout_mhs.php">Logout</a>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
            	<span class="mdl-layout-title">Anda Login Sebagai Mahasiswa, Selamat Datang <?php echo $_SESSION['mahasiswa']; ?></span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">			 					
                	<a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
        	<span class="mdl-layout-title"><?php echo $_SESSION['mahasiswa']; ?></span>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="tampil_profil_mhs.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">person</i>Lihat Profil</a>
                <a class="mdl-navigation__link" href="form_ubah_pass_mhs.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">settings</i>Ubah Password</a>
                <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">language</i>Bahasa</a>
                <a class="mdl-navigation__link" href="logout_mhs.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Logout</a>
            </nav>
            <span class="mdl-layout-title">Bimbingan Dosen</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="daftar_bimbingan.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">person</i>Daftar Bimbingan</a>
                <a class="mdl-navigation__link" href="tampil_bimbingan_mhs.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">person</i>Tampil Bimbingan</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap;">
            	<div class="page-content">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--8-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                          <div style="padding: 20px;" align="center">
                          <label style="margin: 20px">Anda dapat langsung
                          melihat topik diskusi yang telah dibuat oleh pengguna lain serta berpartisipasi di forum atau membuat topik diskusi baru sesuai dengan hal yang ingin anda diskusikan.</label><br><br>
                          <form method="post" action="akses_forum.php">
                              <input id="btn-submit"" style="margin-left: 20px;" type="submit" name="submit" value="Lihat Topik Diskusi dan berpartisipasi di forum">
                          </form><br><br>
                          <?php
                              while($result=mysql_fetch_array($query)){
                          ?>
		                        <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		                        <tr>
		                        <form id="form1" name="form1" method="post" action="create_topic_mhs.php">
		                        <td>
		                        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		                        <tr>
		                        <td colspan="3" bgcolor="#E6E6E6"><strong>Buat Topik Diskusi Baru</strong> </td>
		                        </tr>
                            <tr>
                            <td><strong>Nama</strong></td>
                            <td>:</td>
                            <td><input name="name" type="text" id="name" size="50" value="<?=$result['nama']?>" readonly/></td>
                            </tr>
                            <tr>
                            <td><strong>Email</strong></td>
                            <td>:</td>
                            <td><input name="email" type="text" id="email" size="50" value="<?=$result['email']?>" readonly/></td>
                            </tr>
		                        <tr>
		                        <td width="14%"><strong>Topik</strong></td>
		                        <td width="2%">:</td>
		                        <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
		                        </tr>
		                        <tr>
		                        <td valign="top"><strong>Detail</strong></td>
		                        <td valign="top">:</td>
		                        <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
		                        </tr>
		                        <tr>
		                        <td>&nbsp;</td>
		                        <td>&nbsp;</td>
		                        <td><input type="submit" name="Submit" value="Submit"  /> <input type="reset" name="Submit2" value="Reset" /></td>
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
								<div class="mdl-cell mdl-cell--8-col"></div>					
		                        </div>
		                        </div>
		                       	<div class="mdl-cell mdl-cell--4-col">
                        	   <div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__media" style="background-color:#00CCFF"><img src="Images/shaka.png" width="100%" height="250" border="0"
                             alt="" style="padding:10px;"> 

  </div>
  <div class="mdl-card__supporting-text" align="justify">
   	Fitur - fitur Sharing Knowledge Application (Mahasiswa)
  </div>
  <div class="mdl-card__supporting-text" align="justify">
	   <ol>
	   		<li>Mahasiswa dapat membuat topik diskusi baru dan memberikan tanggapan/jawaban
	   		dari topik diskusi yang sudah ada</li>
	   		<li>Mahasiswa dapat mendaftarkan bimbingan ke dosen dengan syarat dosen tersebut
	   		sudah mendaftar juga di sistem ini. Selanjutnya Mahasiswa menunggu konfirmasi
	   		persetujuan atau tanggapan dosen tersebut terhadap tema/judul bimbingan yang 
	   		diajukan mahasiswa</li>
	   		<li>Mahasiswa dapat melihat daftar kepada dosen siapa saja mahasiswa tersebut melakukan
	   		bimbingan</li>
	   		<li>Mahasiswa dapat melakukan edit profil dan mengubah password</li>
	   </ol>
	   <div class="mdl-card__supporting-text">
    <label>Kontak Admin :</label><br><br>
    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">email</i>bayusujatmoko@yahoo.com<br>
    <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">phone</i>081275191997<br>
  </div>
  </div>
                            </div>
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



