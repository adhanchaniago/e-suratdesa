<?php
	include ('../../config/koneksi.php');

	$nik = $_POST['fnik'];
	$nama = $_POST['fnama'];
	// $tempat_lahir = $_POST['ftempat_lahir'];
	// $tgl_lahir = $_POST['ftgl_lahir'];
	$jenis_kelamin = $_POST['fjenis_kelamin'];
	$agama = $_POST['fagama'];
	$dusun = $_POST['fdusun'];
	$rw = $_POST['frw'];
	$rt = $_POST['frt'];
	$no_kk = $_POST['fno_kk'];
	$pend_kk = $_POST['fpend_kk'];
	$pend_terakhir = $_POST['fpend_terakhir'];
	$pend_ditempuh = $_POST['fpend_ditempuh'];
	$pekerjaan = $_POST['fpekerjaan'];
	$status_perkawinan = $_POST['fstatus_perkawinan'];
	$status_dlm_keluarga = $_POST['fstatus_dlm_keluarga'];
	$kewarganegaraan = $_POST['fkewarganegaraan'];
	// $nama_ayah = $_POST['fnama_ayah'];
	// $nama_ibu = $_POST['fnama_ibu'];
	// $gol_darah = $_POST['fgol_darah'];

	$qUpdate 	= "UPDATE penduduk SET nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', dusun='$dusun', rw='$rw', rt='$rt', no_kk='$no_kk', pend_kk='$pend_kk', pend_terakhir='$pend_terakhir', pend_ditempuh='$pend_ditempuh', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan', status_dlm_keluarga='$status_dlm_keluarga', kewarganegaraan='$kewarganegaraan' WHERE nik='$nik'";
	$update 	= mysqli_query($connect, $qUpdate);

	if($update){
		header('location:../penduduk/');
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengubah data penduduk'); window.location.href='../penduduk/'</script>");
	}
?>