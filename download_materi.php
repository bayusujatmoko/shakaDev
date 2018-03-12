<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "connect.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>File Materi</title>
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
             <span class="mdl-layout-title">Download File Materi</span>
         </div>
     </header>
     <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">File Materi</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
        </nav>
    </div>
    <main class="mdl-layout__content" style="height:wrap">
     <div class="page-content" style="min-height: 75vh">
         <div class="mdl-grid">
             <div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div style="margin:10px">
                    <center>
                     <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
                 </center>

                 <p>
                    <table class="table" width="100%" cellpadding="3" cellspacing="0">
                        <tr>
                            <th width="10">No.</th>
                            <th width="20">Tgl. Upload</th>
                            <th width="30">Nama File</th>
                            <th width="20">Tipe</th>
                            <th width="20">Ukuran</th>
                        </tr>
                        <?php
                        include('config.php');
                        $sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
                        if(mysql_num_rows($sql) > 0){
                            $no = 1;
                            while($data = mysql_fetch_assoc($sql)){
                                echo '
                                <tr bgcolor="#fff">
                                <td align="center">'.$no.'</td>
                                <td align="center">'.$data['tanggal_upload'].'</td>
                                <td><a class="mdl-navigation__link" href="'.$data['file'].'"><div id="btn-submit">'.$data['nama_file'].'</div></a></td>
                                <td align="center">'.$data['tipe_file'].'</td>
                                <td align="center">'.formatBytes($data['ukuran_file']).'</td>
                                </tr>
                                ';
                                $no++;
                            }
                        }else{
                            echo '
                            <tr bgcolor="#fff">
                            <td colspan="5"><p align="center">Tidak ada data!</p></td>
                            </tr>
                            ';
                        }
                        ?>
                    </table>
                </p>
                
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
