<?php
  include("connect.php");
  $query=mysql_query("SELECT * FROM berita");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sharing Knowledge Application</title>
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
    	<header class="mdl-layout__header" style="background-color:#3e9ef2">
        	<div class="mdl-layout__header-row">
              <img src="Images/shaka.png" style="height: 50px; width: 50px; margin-right: 20px">
            	<span class="mdl-layout-title">Sharing Knowledge Application "SHAKA" | Dev Version</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">			 					
                	<a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
        	<span class="mdl-layout-title">Register Now</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="register.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_forward</i>Halaman Register</a>
                <a class="mdl-navigation__link" href="login.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_forward</i>Halaman Login</a>
                <a class="mdl-navigation__link" href="reset_pass.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">settings</i>Lupa Password ?</a>
            </nav>
            <span class="mdl-layout-title">Informasi</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="download_materi.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_forward</i>Download Materi</a>
                <a class="mdl-navigation__link" href="/misc/NWC/index.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_forward</i>Metode NWC</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="middle" style="margin-bottom:20px; padding-top:10px">
                           <h1 class="font" align="center">Selamat Datang di Sistem Sharing Knowledge Application</h1>
                			    <div class="slideshow-container">
                          <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                           <img class="radius2" src="Images/wall1.jpg" style="width: 100%; height: 500px">
                            <div class="text">Material Design</div>
                          </div>

                          <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img class="radius2" src="Images/wall2.jpg" style="width: 100%; height: 500px">
                            <div class="text">Material Design</div>
                          </div>

                          <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img class="radius2" src="Images/wall3.jpg" style="width: 100%; height: 500px">
                            <div class="text">Material Design</div>
                          </div>

                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                          <a class="next" onclick="plusSlides(1)">&#10095;</a>
                      </div>
                      <br>

                      <div style="text-align:center" class="slide">
                        <script type="text/javascript">
                          $(document).ready(function(){
                            $("div.slide").show(currentSlide(3));
                            $("div.slide").show(currentSlide(2));
                            $("div.slide").show(currentSlide(1));
                          });
                        </script>
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                      </div>
                        <h1 class="font" align="center">Berita Terbaru</h1>
                        <center>
                        <div>
                          <?php
                            $i = 1;
                            while($result=mysql_fetch_array($query))
                            { ?>
                            <div id="td1" style="border:1px; border-radius: 0px; width: 400px; height: wrap; display: inline-block;">
                                <center><img class="box" src="Images/<?php echo $result['img'];?>"></center>
                                  <center><h5><?php echo $result['judul'];?></h5></center>
                                  <center><h5><?php echo $result['tanggal'];?></h5></center>
                                  <center><a class="mdl-navigation__link" id="btn-submit" href="berita.php?id=<?php echo $result['id']; ?>">Baca Berita</a></center>
                            </div>
                            
                              <?php $i++; 
                            }         
                          ?>
                          </div>
                          </center>
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
