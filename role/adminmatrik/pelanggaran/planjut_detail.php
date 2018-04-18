<?php 
  include 'functions.php';
  $idPlanjut = $_GET['id']; 

  $nlP = tampilSesuatu('planjut', 'nama_tindaklanjut', 'id_planjut', $idPlanjut);
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=planjut"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Pelanggaran
        <small>Berdasarkan Tindak Lanjut</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li><a href="?page=planjut">Tindak Lanjut</a></li>
        <li class="active"><?php foreach($nlP as $namaPlanjut){ echo $namaPlanjut; }?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php foreach($nlP as $namaPlanjut){ echo $namaPlanjut; }?></h3>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>ID Pelanggaran</th>
                    <th>Nama Mahasiswa</th>
                    <th>Aksi Pelanggaran</th>
                    <th>Tanggal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPLanjut = pDetailById('planjut', $idPlanjut);
                    
                    $no = 1;
                  if (is_array($dataPLanjut) || is_object($dataPLanjut)){
                    foreach($dataPLanjut as $row){

                   ?>
                <tr>
                  <td><?php echo $row['id_pelanggaran']; ?></td>
                  <td><?php echo $row['namamhs']; ?></td>
                  <td><?php echo $row['nama_aksi']; ?></td>
                  <td><?php echo date('d M Y', strtotime($row['tanggal'])); ?></td>
                  <td><a class="btn btn-info btn-sm" href="index.php?page=pmaindetail&id=<?php echo $row['id_pelanggaran']; ?>"><i class="fa fa-plus"></i>&nbsp;Detil</a></td>
                </tr>
                 <?php 
                    }
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