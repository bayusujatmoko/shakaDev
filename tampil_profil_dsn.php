<?php
  include("connect.php");
  include("akses_dsn.php");
  $username=$_SESSION['dosen'];
  $query1=mysql_query("SELECT * FROM dosen WHERE username='$username'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shaka Home</title>
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
            	<span class="mdl-layout-title">Shaka - Profil Dosen</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">			 					
                	<a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
        	<span class="mdl-layout-title">Profil Dosen</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index_dsn.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--8-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div style="margin-left:60px; padding-top:10px">
			                     <h1 class="font" align="center">Profil Dosen</h1>
                          <table class="font1" style="border:0px; text-align: left;" align="left">
                            <tbody>
                              <?php
                                while($result1=mysql_fetch_array($query1))
                                { ?>
                                  <tr>
                                    <center><img class="radius"  src="Images/profilimg/<?php echo $result1['img'];?>"></center>
                                    <center>Foto Profil</center>
                                    <br>
                                  </tr>
                                  <tr>
                                    <td style="border: 0px">NIDN</td>
                                    <td style="border: 0px">:</td>
                                    <td style="border: 0px"><?=$result1['nidn']?></td>
                                  </tr>
                                  <tr>
                                    <td style="border: 0px">Nama</td>
                                    <td style="border: 0px">:</td>
                                    <td style="border: 0px"><?=$result1['nama']?></td>
                                  </tr>       
                                  <tr>
                                    <td style="border: 0px">Jurusan</td>
                                    <td style="border: 0px">:</td>
                                    <td style="border: 0px"><?=$result1['jurusan']?></td>
                                  </tr>
                                   <tr>
                                    <td style="border: 0px">Fakultas</td>
                                    <td style="border: 0px">:</td>
                                    <td style="border: 0px"><?=$result1['fakultas']?></td>
                                  </tr>
                                  <tr>
                                    <td style="border: 0px">Email</td>
                                    <td style="border: 0px">:</td>
                                    <td style="border: 0px"><?=$result1['email']?></td>
                                  </tr>
                                  <tr>
                                    <td style="border: 0px;"><input type="button" value="Edit Profil" id="btn-submit" onclick="window.location = 'form_edit_profil_dsn.php?nidn=<?php echo $result1['nidn'];?>';"/></td>
                                  </tr>
                                  
                                  <?php
                                }

                                
                              ?>
                            </tbody>
                          </table>
                        </div>	
						            <div class="mdl-cell mdl-cell--8-col"></div>					
                        </div>
                        </div>
                       	<div class="mdl-cell mdl-cell--4-col">
                       	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__media" style="background-color:#00CCFF"><img src="Images/shaka.png" width="250" height="150" border="0"
   						alt="" style="padding:10px;"> 
  </div>
  <div class="mdl-card__supporting-text">
   	Sharing Knowledge Application
  </div>
  <div class="mdl-card__supporting-text" align="justify">
	 Sharing Knowledge adalah sebuah aplikasi yang memudahkan mahasiswa untuk saling berbagi pengetahuan terkait bidang akademis di kampus sehingga antar sesama
   mahasiswa dapat melakukan kolaborasi dalam pemecahan suatu masalah akademis.
	 Selain itu aplikasi ini diharapkan bisa mempermudah mahasiswa untuk melakukan bimbingan ke dosen untuk sekedar melakukan konsultasi terkait tugas, penelitian, maupun tugas akhir yang sedang dikerjakan.

  </div>
                            </div>
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
