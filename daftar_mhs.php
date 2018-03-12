
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Mahasiswa</title>
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
            	<span class="mdl-layout-title">Shaka - Daftar Mahasiswa</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">			 					
                  <a class="mdl-navigation__link" href="#">Testimoni</a>
                	<a class="mdl-navigation__link" href="#">Bantuan</a>
                    <a class="mdl-navigation__link" href="#">Tentang Kami</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Daftar MHS</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
               <a class="mdl-navigation__link" href="register.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Register</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--4-col"></div>
                        <div class="mdl-cell mdl-cell--4-col"></div>
                       	<div class="mdl-cell mdl-cell--4-col">
                        	<div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
            <form method="post" name="daftar" action="insert_mhs.php">
         			 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          			 <input name="nim" class="mdl-textfield__input" type="text" style="margin-left:30px">
               <label name="nim" class="mdl-textfield__label" for="user" style="margin-left:30px">NIM</label>
              </div><br/>
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
                <input name="username" class="mdl-textfield__input" type="text" style="margin-left:30px">
                <label name="username" class="mdl-textfield__label" for="text" style="margin-left:30px">Username</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="password" class="mdl-textfield__input" type="password" style="margin-left:30px">
                <label name="password" class="mdl-textfield__label" for="text" style="margin-left:30px">Password</label>
              </div><br />
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="ulangPassword" class="mdl-textfield__input" type="password" style="margin-left:30px">
                <label name="ulangPassword" class="mdl-textfield__label" for="text" style="margin-left:30px">Ulangi Password</label>
              </div><br />
		  <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px" onclick="return klikTambah();">DAFTAR</button>
      <a href="login.html" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">Login Sekarang</a>
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

