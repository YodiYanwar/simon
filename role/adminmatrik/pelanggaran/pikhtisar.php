<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggaran
        <small>Ikhtisar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li class="active">Ikhtisar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <a href="index.php?page=tambahp" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</a>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Mahasiswa</th>
                    <th>Aksi Pelanggaran</th>
                    <th>Sanksi</th>
                    <th>Tindak Lanjut</th>
                    <th>Tanggal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPikhtisar = tampilPikhtisar();
                    
                    $no = 1;
                  if (is_array($dataPikhtisar) || is_object($dataPikhtisar)){
                    foreach($dataPikhtisar as $row){

                   ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['namamhs']; ?></td>
                  <td><?php echo $row['nama_aksi']; ?></td>
                  <td><?php echo $row['nama_sanksi']; ?></td>
                  <td><?php echo $row['nama_tindaklanjut']; ?></td>
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><a class="btn btn-info btn-sm" href="index.php?page=pdetail&id=<?php echo $row['id_pelanggaran']; ?>"><i class="fa fa-plus"></i>&nbsp;Detil</a></td>
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