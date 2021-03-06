<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembinaan
        <small>Shalat Wajib Berjamaah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pembinaan</li>
        <li class="active">Shalat Wajib</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <button class="btn btn-primary" data-toggle="modal" data-target="#importMhsModal"><i class="fa fa-chevron-circle-down"></i>&nbsp;Import Data Presensi Shalat Mahasiswa</button>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>ID Mahasiswa</th>
		 			<th>NIM</th>
		 			<th>Nama</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    /*$all = AllMahasiswaMDB();
                    foreach($all as $row){*/
                   ?>
                <tr>
                  	<td><?php //echo $row['userid'];; ?></td>
 					<td><?php //echo $row['Badgenumber']; ?></td>
 					<td><?php //echo $row['Name']; ?></td>
                </tr>
                <?php //} ?>
                </tbody>          
              </table>
              <!-- /Table Daftar Pembina -->
            </div>
            <!-- /.box-body -->            
           
          </div>
          <!-- /.box -->
        </div>
      </div>      

      <!-- Modal Import Mahasiswa -->
      <div class="modal fade" id="importMhsModal" role="dialog">
            <div class="modal-dialog" role="document">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>&nbsp; <b>Import Data Presensi Shalat</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Pilih Tahun Angkatan</label>
                          <select class="form-control" name="angkatan" value="17">
                            <option>Angkatan</option>
                            <option>15</option>
                            <option>16</option>
                            <option selected='selected'>17</option>
                          </select>
                        </div>
                    <!-- Date range -->
                    <div class="form-group">
                      <label>Periode :</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reportrange" name="daterangeShalat">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->    
                    <!-- time Picker -->
                    
                    <div class="bootstrap-timepicker">
                      <div class="row">
                        <div class="col-md-3 nopadding">
                          <div class="form-group">
                            <label>Shubuh :</label>
                              <input type="text" name="shubuhFrom" id="shubuh_dari" class="form-control" placeholder="Dari" value="04:00">
                              <input type="text" name="shubuhTo" id="shubuh_sampai" class="form-control" placeholder="Sampai" value="06:00">
                          </div>
                        </div>
                        <div class="col-lg-3 nopadding">
                          <div class="form-group">
                            <label>Dzuhur :</label>
                              <input type="text" name="dzuhurFrom" id="dzuhur_dari" class="form-control" placeholder="Dari" value="12:00">
                              <input type="text" name="dzuhurTo" id="dzuhur_sampai" class="form-control" placeholder="Sampai" value="13:00">
                          </div>
                        </div>
                        <div class="col-lg-3 nopadding">
                          <div class="form-group">
                            <label>Ashar :</label>
                              <input type="text" name="asharFrom" id="ashar_dari" class="form-control" placeholder="Dari" value="15:00">
                              <input type="text" name="asharTo" id="ashar_sampai" class="form-control" placeholder="Sampai" value="16:00">
                          </div>
                        </div>
                        <div class="col-lg-3 nopadding">
                          <div class="form-group">
                            <label>Maghrib :</label>
                              <input type="text" name="maghribFrom" id="maghrib_dari" class="form-control" placeholder="Dari" value="18:00">
                              <input type="text" name="maghribTo" id="maghrib_sampai" class="form-control" placeholder="Sampai" value="18:35">
                          </div>
                        </div>
                        <div class="col-lg-3 nopadding">
                          <div class="form-group">
                            <label>Isya :</label>
                              <input type="text" name="isyaFrom" id="isya_dari" class="form-control" placeholder="Dari" value="19:00">
                              <input type="text" name="isyaTo" id="isya_sampai" class="form-control" placeholder="Sampai" value="20:00">
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                      <button type="submit" class="btn btn-primary" name="importPresensiShalat"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>
              </div>
        </div>
        <!-- /Modal Import Mahasiswa -->      

        <!-- Modal Hapus Mahasiswa -->
        <div class="modal fade" id="ModalHapusMahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4><b><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus Akun Mahasiswa ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a class="btn btn-danger btn-ok"><i class="fa fa-remove"></i>&nbsp;Hapus</a>                    
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Hapus Pembina -->        

    <?php 

      if(isset($_POST['importPresensiShalat'])) {
        $tgl = explode('-', $_POST['daterangeShalat']);
        $from = $tgl[0];
        $to = $tgl[1];

        $datefrom = date('Y-m-d', strtotime($from));
        $dateto = date('Y-m-d',strtotime($to));

        $shubuhFrom = $_POST['shubuhFrom'];
        $shubuhTo = $_POST['shubuhTo'];

        $dzuhurFrom = $_POST['dzuhurFrom'];
        $dzuhurTo = $_POST['dzuhurTo'];

        $asharFrom = $_POST['asharFrom'];
        $asharTo = $_POST['asharTo'];

        $maghribFrom = $_POST['maghribFrom'];
        $maghribTo = $_POST['maghribTo'];

        $isyaFrom = $_POST['isyaFrom'];
        $isyaTo = $_POST['isyaTo'];

        updateTimeSetup($from, $to, $shubuhFrom, $shubuhTo, $dzuhurFrom, $dzuhurTo, $asharFrom, $asharTo, $maghribFrom, $maghribTo, $isyaFrom, $isyaTo);
        importShalat($_POST['angkatan'], $datefrom, $dateto);

        echo "<script>document.location='/simon/index.php?page=shalat'</script>";
      }
    ?>

</section>