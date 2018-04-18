<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggaran
        <small>Berdasarkan Hukuman / Tindak Lanjut</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li class="active">Tindak Lanjut</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Level</th>
                    <th>Tindak Lanjut</th>
                    <th>Sanksi</th>
                    <th>Jumlah Pelanggaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPlanjut = tampilPlanjut();
                    
                    $no = 1;
                  if (is_array($dataPlanjut) || is_object($dataPlanjut)){
                    foreach($dataPlanjut as $row){

                   ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href="?page=planjutdetail&id=<?php echo $row['id_planjut']; ?> "><?php echo $row['nama_tindaklanjut']; ?></a></td>
                  <td><?php echo $row['nama_sanksi']; ?></td>
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