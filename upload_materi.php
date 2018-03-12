<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "connect.php";
include "akses_admin.php";
include('config.php');
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
				<span class="mdl-layout-title">Upload File Materi</span>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">File Materi</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index_admin.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" style="margin-right:20px">arrow_back</i>Back to Home</a>
			</nav>
		</div>
		<main class="mdl-layout__content" style="height:wrap">
			<div class="page-content" style="min-height: 75vh">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col"><div class="demo-updates mdl-card mdl-shadow--6dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
						<div style="margin:10px">
							<center>
								<p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file maksimal hanya 5 MB.</p>
							</center>

							<?php
							if($_POST['upload']){
								$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
								$file_name      = $_FILES['file']['name'];
								$file_ext       = strtolower(end(explode('.', $file_name)));
								$file_size      = $_FILES['file']['size'];
								$file_tmp       = $_FILES['file']['tmp_name'];

								$nama           = $_POST['nama'];
								$tgl            = date("Y-m-d");

								if(in_array($file_ext, $allowed_ext) === true){
									if($file_size < 5000000){
										$lokasi = 'files/'.$nama.'.'.$file_ext;
										move_uploaded_file($file_tmp, $lokasi);
										$in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
										if($in){
											echo '<div class="ok" align="center">SUCCESS: File berhasil di Upload!</div>';
										}else{
											echo '<div class="error" align="center">ERROR: Gagal upload file!</div>';
										}
									}else{
										echo '<div class="error" align="center">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
									}
								}else{
									echo '<div class="error" align="center">ERROR: Ekstensi file tidak di izinkan!</div>';
								}
							}
							?>

							<p>

								<form action="" method="post" enctype="multipart/form-data">
									<table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
										<tr>
											<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
										</tr>
										<tr>
											<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
										</tr>
										<tr>
											<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
										</tr>
									</table>
								</form>
							</p>
							<h4 align="center">Daftar File Materi</h4>
							<p>
								<table class="table" width="100%" cellpadding="3" cellspacing="0">
									<tr>
										<th width="5">No.</th>
										<th width="20">Tgl. Upload</th>
										<th width="30">Nama File</th>
										<th width="20">Tipe</th>
										<th width="20">Ukuran</th>
										<th width="10">Aksi</th>
									</tr>
									<?php
									$sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
									if(mysql_num_rows($sql) > 0){
										$no = 1;
										while($data = mysql_fetch_assoc($sql)){
											?>
											<tr>
												<td><?php echo $no;?></td>
												<td><?php echo $data['tanggal_upload'];?></td>
												<td><a class="mdl-navigation__link" href="<?php echo $data['file'];?>"><div id="btn-submit"><?php echo $data['nama_file'];?></div></a></td>
												<td><?php echo $data['tipe_file'];?></td>
												<td><?php echo formatBytes($data['ukuran_file']);?></td>
												<td>
													<a id="btn-submit" href="delete_file.php?id=<?php echo $data['id']; ?>&nama_file=<?php echo $data['nama_file']; ?>&tipe_file=<?php echo $data['tipe_file']; ?> " onclick="return klikHapus();">Hapus</a>
												</td>
											</tr>
											<?php $no++; } ?>
											<?php } else { ?>
											<tr bgcolor="#fff">
												<td colspan="6"><p align="center">Tidak ada data!</p></td>
											</tr>
											<?php } ?>
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
