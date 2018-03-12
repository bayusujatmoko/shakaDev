<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <?php
    include "connect.php";
    include "akses_admin.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Dosen</title>
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
            	<span class="mdl-layout-title">Tampil Data Dosen</span>
                <div class="mdl-layout-spacer"></div>
                <form action="cari_dsn.php" method="post">
                    <label>Cari Dosen : </label>
                    <input style="width: 300px" type="text" name="nama" placeholder="Masukkan Nama Dosen">
                    <input id="btn-submit" type="submit" name="submit" value="Cari">
                </form>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Data Dosen</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
            </nav>
        </div>
        	<main class="mdl-layout__content" style="height:wrap">
            	<div class="page-content" style="min-height: 75vh">
                	<div class="mdl-grid">
                    	<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div style="margin:10px">
		
                        <table>
                        <tr>
                        <th width="10%">NIDN</th>
                        <th width="20%">NAMA</th>
                        <th width="20%">JURUSAN</th>
                        <th width="20%">FAKULTAS</th>
                        <th width="20%">EMAIL</th>
                        <th width="10%">AKSI</th>
                        </tr>
                            <?php
                                include 'connect.php';
                                $query = mysql_query("SELECT * from dosen");
                                
                                while($record = mysql_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $record['nidn'];?></td>
                                <td><?php echo $record['nama'];?></td>
                                <td><?php echo $record['jurusan'];?></td>
                                <td><?php echo $record['fakultas'];?></td>
                                <td><?php echo $record['email'];?></td>
                                <td>
                                    <a id="btn-submit" href="edit_dsn.php?nidn=<?php echo $record['nidn']; ?>">Edit</a><br><br>
                                    <a id="btn-submit" href="delete_dsn.php?nidn=<?php echo $record['nidn']; ?> " onclick="return klikHapus();">Hapus</a>
                                </td>   
                            </tr>
                        <?php } ?>
                        </table>
                        
                        <br>
                         <a href="index_admin.php"><button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin-left:30px; margin-bottom:10px">Back to Home</button></a>
                                              
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
