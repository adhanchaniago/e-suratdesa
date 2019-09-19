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
      <li>
        <a href="../dashboard/">
          <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="../penduduk/">
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
        <form method="post" enctype="multipart/form-data" action="import-penduduk.php">
          <div class="col-md-3">
            <input name="datapenduduk" type="file" required="required">
          </div>
          <div>
            <input name="upload" type="submit" class="btn btn-primary" value="Import .XLS">
          </div>
        </form><br>
      </div>
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fas fa-user-plus"></i> Tambah Data Penduduk</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
          <div class="box-body">
            <div class="row">
              <form class="form-horizontal" method="post" action="#">
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">NIK</label>
                      <div class="col-sm-9">
                        <input type="text" name="fnik" class="form-control" placeholder="NIK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" name="fnama" class="form-control" placeholder="Nama" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Tempat Lahir</label>
                      <div class="col-sm-9">
                        <input type="text" name="ft_lahir" class="form-control" placeholder="Tempat Lahir" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Tanggal Lahir</label>
                      <div class="col-sm-9">
                        <input type="text" name="ftgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <select name="fj_kelamin" class="form-control" required>
                          <option value="">-- Jenis Kelamin --</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Agama</label>
                      <div class="col-sm-9">
                        <input type="text" name="fagama" class="form-control" placeholder="Agama" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Dusun</label>
                      <div class="col-sm-9">
                        <select name="fdusun" class="form-control" required>
                          <option value="">-- Dusun --</option>
                          <option value="Dusun A">Dusun A</option>
                          <option value="Dusun B">Dusun B</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">RW</label>
                      <div class="col-sm-9">
                        <select name="frw" class="form-control" required>
                          <option value="">-- RW --</option>
                          <option value="001">001</option>
                          <option value="002">002</option>
                          <option value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">RT</label>
                      <div class="col-sm-9">
                        <select name="frw" class="form-control" required>
                          <option value="">-- RT --</option>
                          <option value="001">001</option>
                          <option value="002">002</option>
                          <option value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nomor KK</label>
                      <div class="col-sm-9">
                        <input type="text" name="fno_kk" class="form-control" placeholder="Nomor KK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Pendidikan di KK</label>
                      <div class="col-sm-9">
                        <select name="fpend_kk" class="form-control" required>
                          <option value="">-- Pendidikan di KK --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Pendidikan Terakhir</label>
                      <div class="col-sm-9">
                        <select name="fpend_terakhir" class="form-control" required>
                          <option value="">-- Pendidikan Terakhir --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Pendidikan Ditempuh</label>
                      <div class="col-sm-9">
                        <select name="fpend_ditempuh" class="form-control" required>
                          <option value="">-- Pendidikan Ditempuh --</option>
                          <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Pekerjaan</label>
                      <div class="col-sm-9">
                        <input type="text" name="fpekerjaan" class="form-control" placeholder="Pekerjaan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status Perkawinan</label>
                      <div class="col-sm-9">
                        <select name="fstatus_perkawinan" class="form-control" required>
                          <option value="">-- Status Perkawinan --</option>
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Cerai">Cerai</option>
                          <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status Dlm Keluarga</label>
                      <div class="col-sm-9">
                        <select name="fstatus_dlm_keluarga" class="form-control" required>
                          <option value="">-- Status Dlm Keluarga --</option>
                          <option value="Ayah">Ayah</option>
                          <option value="Ibu">Ibu</option>
                          <option value="Anak">Anak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Kewarganegaraan</label>
                      <div class="col-sm-9">
                        <select name="fkewarganegaraan" class="form-control" required>
                          <option value="">-- Kewarganegaraan --</option>
                          <option value="WNI">WNI</option>
                          <option value="WNA">WNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Ayah</label>
                      <div class="col-sm-9">
                        <input type="text" name="fnama_ayah" class="form-control" placeholder="Nama Ayah" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Ibu</label>
                      <div class="col-sm-9">
                        <input type="text" name="fnama_ibu" class="form-control" placeholder="Nama Ibu" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Golongan Darah</label>
                      <div class="col-sm-9">
                        <select name="fgol_darah" class="form-control" required>
                          <option value="">-- Golongan Darah --</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="AB">AB</option>
                          <option value="O">O</option>
                        </select>
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
  include ('../part/footer.php');
?>