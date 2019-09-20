<?php 
	include ('../../permintaan_surat/konfirmasi/part/akses.php');
  	include ('../../../../config/koneksi.php');

  	$id = $_GET['id'];
  	$qCek = mysqli_query($connect,"SELECT * FROM surat_keterangan_domisili WHERE id_skd='$id'");
  	while($row = mysqli_fetch_array($qCek)){
?>

<html>
<head>
	<title>CETAK SURAT</title>
	<link href="../../../../assets/formsuratCSS/formsurat.css" rel="stylesheet" type="text/css"/>
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { margin: 1cm; }
	</style>
</head>
<body>
<div>
	<table width="100%">
		<tr><img src="../../../../assets/img/logo-jombang-90x90.png" alt="" class="logo"></tr>
		<div class="header">
			<h4 class="kop" style="text-transform: uppercase">PEMERINTAH KABUPATEN JOMBANG </h4>
			<h4 class="kop" style="text-transform: uppercase">KECAMATAN DIWEK</h4>
			<h4 class="kop" style="text-transform: uppercase">DESA KEDAWONG</h4>
			<h5 class="kop2">Jl. Gajahmada No. 49 Ds. Kedawong, Kec. Diwek, Kab. Jombang 61471</h5>
			<div style="text-align: center;">
				<hr>
			</div>
		</div>
		<br><br>
		<div align="center"><u><h4 class="kop">SURAT KETERANGAN DOMISILI</h4></u></div>
		<div align="center"><h4 class="kop3">Nomor :&nbsp;&nbsp;&nbsp;<?php echo $row['no_surat']; ?></h4></div>
	</table>
	<br>
	<div class="clear"></div>
	<div id="isi3">
		<table width="100%">
			<tr>
				<td class="indentasi">Yang bertanda tangan di bawah ini Penjabat Kepala Desa Kedawong, Kecamatan Diwek, Kabupaten Jombang, Provinsi Jawa Timur, menerangkan dengan sebenarnya bahwa :
				</td>
			</tr>
		</table>
		<br><br>
		<table width="100%" class="indentasi">
			<tr>
				<td width="25%">NIK</td>
				<td width="75%">:&nbsp;&nbsp;&nbsp;<?php echo $row['nik']; ?></td>
			</tr>
			<tr>
				<td>N&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;A</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['nama']; ?></td>
			</tr>
			<tr>
				<td>Tempat/Tgl. Lahir</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['tempat_tgl_lahir']; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['alamat']; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['agama']; ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['kewarganegaraan']; ?></td>
			</tr>
		</table>
		<br><br>
		<table width="100%">
			<tr>
				<td class="indentasi">Bahwa benar-benar penduduk kami Dusun Kedawong, Desa Kedawong, Kecamatan Diwek, Kabupaten Jombang. Bahwa nama yang bersangkutan berdomisili di Dusun <?php echo $row['alamat']; ?>.
				</td>
			</tr>
		</table>
		<br>
		<table width="100%">
			<tr>
				<td>
				<td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan digunakan sebagaimana mestinya.
				</td>
		</table>
	</div>
	<br><br>
	<table width="100%">
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td width="23%"></td>
			<td width="30%"></td>
			<td align="center">
				Jombang, 
				<?php
					$tanggal = date('d F Y');
					$bulan = date('F', strtotime($tanggal));
					$bulanIndo = array(
					    'January' => 'Januari',
					    'February' => 'Februari',
					    'March' => 'Maret',
					    'April' => 'April',
					    'May' => 'Mei',
					    'June' => 'Juni',
					    'July' => 'Juli',
					    'August' => 'Agustus',
					    'September' => 'September',
					    'October' => 'Oktober',
					    'November' => 'November',
					    'December' => 'Desember'
					);
					echo date('d ') . $bulanIndo[$bulan] . date(' Y');
				?>
			</td>
		</tr>
		<tr>
			<td width="23%"></td>
			<td width="30%"></td>
			<td align="center">Kepala Desa Kedawong</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>
			<td></td>
			<td align="center">(ABU LAHAB, S.Ag., S.PG., S.PP.)</td>
		</tr>
	</table>
</div>
<script>
	window.print();
</script>
</body>
</html>

<?php
  	}
?>