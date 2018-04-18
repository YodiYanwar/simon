<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggaran
        <small>Berdasarkan Sanksi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li class="active">Sanksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPsanksi"><i class="fa fa-plus"></i>&nbsp;Tambah</i></button> -->
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Sanksi</th>
                    <th>Bobot Sanksi</th>
                    <th>Jumlah Pelanggaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPsanksi = tampilPsanksi();
                    
                    $no = 1;
                  if (is_array($dataPsanksi) || is_object($dataPsanksi)){
                    foreach($dataPsanksi as $row){

                   ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href="?page=psanksidetail&id=<?php echo $row['id_psanksi']; ?> "><?php echo $row['nama_sanksi']; ?></a></td>
                  <td><?php echo $row['bobot']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                </tr>
                 <?php 
                   $no++; }
                  }
                ?>      
                </tbody>          
              </table>
              <!-- /Table Daftar Pembina -->
            </div>
            <!-- /.box-body -->            
            <div class="box-body table-responsive no-padding">

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>      

      <!-- Modal Tambah Sanksi -->
      <div class="modal fade" id="tambahPsanksi" role="dialog">
            <div class="modal-dialog" role="document">
              <form class="form-horizontal" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-bookmark-o" aria-hidden="true"></i>&nbsp; <b>Tambah Data Master Sanksi Pelanggaran Mahasiswa</b></h4>
                    </div>
                    <div class="modal-body">      
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="psanksi">Sanksi :</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="sanksi" placeholder="Masukan Sanksi Pelanggaran" name="nama_sanksi">
                          </div>
                        </div>
                    </div>                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                      <button type="submit" class="btn btn-primary" name="tambahPsanksi"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>    
              </div>
        </div>
        <!-- /Modal Tambah Sanksi -->

    </section>
    <!-- /.content -->