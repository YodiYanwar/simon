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
             <a href="index.php?page=tambahpaksi" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</a>
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
    </section>
    <!-- /.content -->