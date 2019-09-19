<?php
    include ('../part/akses.php');
  	include ('../part/header.php');
?>

<aside class="main-sidebar">
   	<section class="sidebar">
   		<div class="user-panel">
       		<div class="pull-left image">
       			<img src="../../assets/img/user.jpg" class="img-circle" alt="User Image">
       		</div>
       		<div class="pull-left info">
       			<p>Administrator</p>
       			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       		</div>
   		</div>
   		<ul class="sidebar-menu" data-widget="tree">
      		<li class="header">MAIN NAVIGATION</li>
       			<li class="active">
       				<a href="#">
          				<i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
       				</a>
      			</li>
       		<li>
       			<a href="../penduduk/">
           			<i class="fa fa-users"></i> <span>Data Penduduk</span>
       			</a>
       		</li>
       		<li class="treeview">
       			<a href="#">
           			<i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
           			<span class="pull-right-container">
           				<i class="fa fa-angle-left pull-right"></i>
           			</span>
       			</a>
       			<ul class="treeview-menu">
          			<li>
           				<a href="../surat/permintaan_surat/"><i class="fa fa-circle-notch"></i> Permintaan Surat</a>
           			</li>
           			<li>
           				<a href="../surat/surat_selesai/"><i class="fa fa-circle-notch"></i> Surat Selesai</a>
           			</li>
       			</ul>
       		</li>
       		<li>
       			<a href="../laporan/"><i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span></a>
       		</li>
   		</ul>
   	</section>
</aside>
<div class="content-wrapper">
    <section class="content-header">
    	<h1>Dashboard</h1>
      	<ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
      	</ol>
    </section>
    <section class="content">
      	<div class="row">
        	<div class="col-lg-4 col-xs-6">
          		<div class="small-box bg-aqua">
            		<div class="inner">
              			<h3>
                      <?php
                        include ('../../config/koneksi.php');

                        $qTampil = mysqli_query($connect, "SELECT * FROM penduduk");
                        $jumlahPenduduk = mysqli_num_rows($qTampil);
                        echo $jumlahPenduduk;
                      ?>
                    </h3>
              			<p>Data Penduduk</p>
            		</div>
            		<div class="icon">
              			<i class="fas fa-users" style="font-size:70px"></i>
            		</div>
            		<a href="../penduduk/" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>
	        <div class="col-lg-4 col-xs-6">
	          	<div class="small-box bg-green">
	            	<div class="inner">
	              		<h3>53</h3>
	              		<p>Permintaan Surat</p>
	            	</div>
	            	<div class="icon">
	              		<i class="fas fa-envelope-open-text" style="font-size:70px"></i>
	            	</div>
	            	<a href="../surat/permintaan_surat/" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
	          	</div>
	        </div>
	        <div class="col-lg-4 col-xs-6">
	          	<div class="small-box bg-yellow">
	            	<div class="inner">
	              		<h3>44</h3>
	              		<p>Surat Selesai</p>
	            	</div>
	            	<div class="icon">
	              		<i class="fas fa-envelope" style="font-size:70px"></i>
	            	</div>
	            	<a href="../surat/surat_selesai/" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
	          	</div>
	        </div>
    	</div>
      	<div class="container-fluid">
      		<div class="row">
      			<div class="box box-default">
        			<div class="box-header with-border">
          				<h3 class="box-title">Welcome Home!</h3>
          				<div class="box-tools pull-right">
            				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          				</div>
        			</div>
        			<div class="box-body">
          				<div class="row">
            				<form class="form-horizontal" method="post" action="simpan-penduduk.php">
            					<div class="col-md-12">
                        <div class="col-md-4">
                          <img src="../../assets/img/logo-jombang.png"><br>
                          <p style="font-size: 20pt; font-weight: 500; text-align: center;"><strong>DESA KEDAWONG</strong>
                        </div>
                        <div class="col-md-8">
                          <div style="font-size: 35pt; font-weight: 500;"><p>Hai, <strong><?php echo $_SESSION['admin']; ?></strong></div>
                          <div style="font-size: 15pt; font-weight: 500;"><p>Selamat datang di <a href="#"><strong>Web Aplikasi Pelayanan Surat Administrasi Desa Online.</strong></a></p></div><br><br><br>
                          <div style="font-size: 10pt; font-weight: 500;">© e-<b>SuratDesa</b> 2019. Hak Cipta Dilindungi.</div>
                        </div>
            				</form>
          				</div>
        			</div>
        			<div class="box-footer">
        			</div>
      			</div>
      		</div>
      	</div>
    </section>
</div>

<?php 
  	include ('../part/footer.php');
?>