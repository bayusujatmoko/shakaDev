/* Confirm */
function klikHapus(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Menghapus Data ?");
	return konfirmasi;
}

function klikTambah(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Menambah Data ?");
	return konfirmasi;
}

function klikUbah(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Mengubah Data ?");
	return konfirmasi;
}



/* AJAX Home */
$(document).ready(function(){
	$("load a").click(function(){
		var url = $(this).prop("href");
		$("middle").load(url);
		return false;
	});
});



