<?php
  include("connect.php");
  include("akses_admin.php");
  $judul = $_POST['judul']; 
  $query=mysql_query("SELECT * FROM berita where judul like '%$judul%'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pencarian Berita</title>
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
            	<span class="mdl-layout-title">Hasil Pencarian Berita</span>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Data Berita</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Tampil Berita</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="tampil_berita.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Berita</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap;">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="middle" style="margin:20px; padding-top:10px">
                            <table id="table">
                            <thead>
                              <tr>
                                <th width="10%">Kode</th>
                                <th width="10%">Judul</th>
                                <th width="10%">Tanggal</th>
                                <th width="50%">Informasi Berita</th>
                                <th width="20%">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                while($result = mysql_fetch_array($query))
                                { ?>
                                  <tr>
                                    <td><?= $result['id']?></td>
                                    <td><?= $result['judul']?></td>
                                    <td><?= $result['tanggal']?></td>
                                    <td><?= $result['informasi']?></td>
                                    <td>
                                    <a id="btn-submit" href="form_edit_berita.php?id=<?php echo $result['id']; ?>">Edit</a><br><br>
                                    <a id="btn-submit" href="hapus_berita.php?id=<?php echo $result['id']; ?> " onclick="return klikHapus();">Hapus</a>
                                    </td>
                                  </tr>
                                  <?php
                                }
                              ?>
                            </tbody>
                          </table>
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
