<?php 
  include ('../part/akses.php');
  include ('../../config/koneksi.php');
  include ('../part/header.php');

  $nik = $_GET['nik'];
  $qCek = mysqli_query($connect,"SELECT * FROM penduduk WHERE nik='$nik'");
  while($row = mysqli_fetch_array($qCek)){
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
      <li>
        <a href="../dashboard/">
          <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="#">
          <i class="fa fa-users"></i><span>&nbsp;Data Penduduk</span>
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
            <a href="../surat/permintaan_surat/">
              <i class="fa fa-circle-notch"></i> Permintaan Surat
            </a>
          </li>
          <li>
            <a href="../surat/surat_selesai/"><i class="fa fa-circle-notch"></i> Surat Selesai
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="../laporan/">
          <i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb">
      <li><a href="../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="active">Data Penduduk</li>
    </ol>
  </section>
  <section class="content">      
    <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fas fa-edit"></i> Edit Data Penduduk</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
          <div class="box-body">
            <div class="row">
              <form class="form-horizontal" method="post" action="update-penduduk.php">
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnik" class="form-control" value="<?php echo $row['nik']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="ftempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" name="ftgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select name="fjenis_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']; ?>" required>
                          <option value="">--Jenis Kelamin--</option>
                          <option <?php if($row['jenis_kelamin'] == 'Laki-laki'){ echo 'selected'; } ?> value="Laki-laki">Laki-laki</option>
                          <option <?php if($row['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?> value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Agama</label>
                      <div class="col-sm-8">
                        <input type="text" name="fagama" class="form-control" placeholder="Agama" value="<?php echo $row['agama']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dusun</label>
                      <div class="col-sm-8">
                        <select name="fdusun" class="form-control" value="<?php echo $row['dusun']; ?>" required>
                          <option value="">-- Dusun --</option>
                          <option <?php if($row['dusun'] == 'Dusun A'){ echo 'selected'; } ?> value="Dusun A">Dusun A</option>
                          <option <?php if($row['dusun'] == 'Dusun B'){ echo 'selected'; } ?> value="Dusun B">Dusun B</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RW</label>
                      <div class="col-sm-8">
                        <select name="frw" class="form-control" value="<?php echo $row['rw']; ?>" required>
                          <option value="">-- RW --</option>
                          <option <?php if($row['rw'] == '001'){ echo 'selected'; } ?> value="001">001</option>
                          <option <?php if($row['rw'] == '002'){ echo 'selected'; } ?> value="002">002</option>
                          <option <?php if($row['rw'] == '003'){ echo 'selected'; } ?> value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RT</label>
                      <div class="col-sm-8">
                        <select name="frt" class="form-control" value="<?php echo $row['rt']; ?>" required>
                          <option value="">-- RT --</option>
                          <option <?php if($row['rt'] == '001'){ echo 'selected'; } ?> value="001">001</option>
                          <option <?php if($row['rt'] == '002'){ echo 'selected'; } ?> value="002">002</option>
                          <option <?php if($row['rt'] == '003'){ echo 'selected'; } ?> value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nomor KK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fno_kk" class="form-control" placeholder="Nomor KK" value="<?php echo $row['no_kk']; ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan di KK</label>
                      <div class="col-sm-8">
                        <select name="fpend_kk" class="form-control" value="<?php echo $row['pend_kk']; ?>" required>
                          <option value="">-- Pendidikan di KK --</option>
                          <option <?php if($row['pend_kk'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'SMP/SEDERAJAT'){ echo 'selected'; } ?> value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <select name="fpend_terakhr" class="form-control" value="<?php echo $row['pend_terakhir']; ?>" required>
                          <option value="">-- Pendidikan Terakhir --</option>
                          <option <?php if($row['pend_terakhir'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'SMP/SEDERAJAT'){ echo 'selected'; } ?> value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Ditempuh</label>
                      <div class="col-sm-8">
                        <select name="fpend_ditempuh" class="form-control" value="<?php echo $row['pend_ditempuh']; ?>" required>
                          <option value="">-- Pendidikan Ditempuh --</option>
                          <option <?php if($row['pend_ditempuh'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'SMP/SEDERAJAT'){ echo 'selected'; } ?> value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pekerjaan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fpekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $row['pekerjaan']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Perkawinan</label>
                      <div class="col-sm-8">
                        <select name="fstatus_perkawinan" class="form-control" value="<?php echo $row['status_perkawinan']; ?>" required>
                          <option value="">-- Status Perkawinan --</option>
                          <option <?php if($row['status_perkawinan'] == 'Belum Menikah'){ echo 'selected'; } ?> value="Belum Menikah">Belum Menikah</option>
                          <option <?php if($row['status_perkawinan'] == 'Menikah'){ echo 'selected'; } ?> value="Menikah">Menikah</option>
                          <option <?php if($row['status_perkawinan'] == 'Cerai'){ echo 'selected'; } ?> value="Cerai">Cerai</option>
                          <option <?php if($row['status_perkawinan'] == 'Cerai Mati'){ echo 'selected'; } ?> value="Cerai Mati">Cerai Mati</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Dlm Keluarga</label>
                      <div class="col-sm-8">
                        <select name="fstatus_dlm_keluarga" class="form-control" value="<?php echo $row['status_dlm_keluarga']; ?>" required>
                          <option value="">-- Status Dlm Keluarga --</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Ayah'){ echo 'selected'; } ?> value="Ayah">Ayah</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Ibu'){ echo 'selected'; } ?> value="Ibu">Ibu</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Anak'){ echo 'selected'; } ?> value="Anak">Anak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kewarganegaraan</label>
                      <div class="col-sm-8">
                        <select name="fkewarganegaraan" class="form-control" value="<?php echo $row['kewarganegaraan']; ?>" required>
                          <option value="">-- Kewarganegaraan --</option>
                          <option <?php if($row['kewarganegaraan'] == 'WNI'){ echo 'selected'; } ?> value="WNI">WNI</option>
                          <option <?php if($row['kewarganegaraan'] == 'WNA'){ echo 'selected'; } ?> value="WNA">WNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ayah" class="form-control" value="<?php echo $row['nama_ayah']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ibu" class="form-control" value="<?php echo $row['nama_ibu']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Golongan Darah</label>
                      <div class="col-sm-8">
                        <input type="text" name="fgol_darah" class="form-control" value="<?php echo $row['gol_darah']; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer pull-right">
                    <input type="reset" class="btn btn-default" value="Batal">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit">
                  </div>
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
  }

  include ('../part/footer.php');
?>