<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggaran
        <small>Berdasarkan Aksi Pelanggaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li class="active">Aksi Pelanggaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPaksi"><i class="fa fa-plus"></i>&nbsp;Tambah</i></button>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Aksi Pelanggaran</th>
                    <th>Jumlah Pelanggaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPaksi = tampilPaksi();
                    
                    $no = 1;
                  if (is_array($dataPaksi) || is_object($dataPaksi)){
                    foreach($dataPaksi as $row){

                   ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href="?page=paksidetail&id=<?php echo $row['id_paksi']; ?> "><?php echo $row['nama_aksi']; ?></a></td>
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

      <!-- Modal Tambah Aksi Pelanggaran -->
      <div class="modal fade" id="tambahPaksi" role="dialog">
            <div class="modal-dialog" role="document">
              <form class="form-horizontal" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-universal-access" aria-hidden="true"></i>&nbsp; <b>Tambah Data Master Aksi Pelanggaran Mahasiswa</b></h4>
                    </div>
                    <div class="modal-body">      
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="paksi">Aksi Pelanggaran:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="paksi" placeholder="Masukan Aksi Bentuk Pelanggaran" name="nama_aksi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4" for="paksi">Bentuk Pelanggaran:</label>
                          <div class="col-sm-8">
                            <select id="kota" name="kota" class="form-control">
                                <option value="">Pilih</option>
                                <?php
                                  $query = mysql_query("SELECT id_pbentuk, nama_bentuk FROM pbentuk");
                                  while ($row = mysql_fetch_array($query)) {
                                ?>
                                    <option id="kota" class="<?php echo $row['id_pbentuk']; ?>" value="<?php echo $row['id_pbentuk']; ?>">
                                        <?php echo $row['nama_bentuk']; ?>
                                    </option>
                                <?php
                                  }
                                ?>
                            </select>  
                          </div>
                        </div>
                    </div>                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                      <button type="submit" class="btn btn-primary" name="tambahPaksi"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>    
              </div>
        </div>
        <!-- /Modal Tambah Aksi Pelanggaran -->

    </section>
    <!-- /.content -->