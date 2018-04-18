<?php 
  include 'functions.php';
  $idP = $_GET['id']; 
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><a class="btn btn-primary" href="index.php?page=pikhtisar"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Pelanggaran
        <small>Detil</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li><a href="?page=pikhtisar">Ikhtisar</a></li>
        <li class="active">Detil Pelanggaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Detil Pelanggaran</h3>
              <!-- <a href="index.php?page=tambahp" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</a> -->
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePelanggaran" class="table table-condensed">
              <col width="170">
              <col width="20">
              <col width="750">
              <?php 
                $dataPelanggaran = pDetailById('ikhtisar', $idP);
                foreach($dataPelanggaran as $row){ 
               ?>
                  <tr> 
                    <th>ID Pelanggaran</th>
                    <td>:</td>
                    <td><?php echo $row['id_pelanggaran']; ?></td>
                  </tr>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <td>:</td>
                    <td><a href="?page=mahasiswadetails&id=<?php echo $row['uid_mhs']; ?>"><?php echo $row['namamhs']; ?></a></td>
                  </tr>
                  <tr>
                    <th>Nama Pembina</th>
                    <td>:</td>
                    <td><a href="?page=pembinadetails&id=<?php echo $row['uid_pembina']; ?>"><?php echo $row['namap']; ?></a></td>
                  </tr>
                  <tr>
                    <th>Bentuk Pelanggaran</th>
                    <td>:</td>
                    <td><?php echo $row['nama_bentuk']; ?></td>
                  </tr>
                  <tr>
                    <th>Aksi Pelanggaran</th>
                    <td>:</td>
                    <td><?php echo $row['nama_aksi']; ?></td>
                  </tr>
                  <tr>
                    <th>Sanksi</th>
                    <td>:</td>
                    <td><?php echo $row['nama_sanksi']; ?></td>
                  </tr>
                  <tr>
                    <th>Tindak Lanjut</th>
                    <td>:</td>
                    <td><?php echo $row['nama_tindaklanjut']; ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal</th>
                    <td>:</td>
                    <td><?php echo date('d F Y', strtotime($row['tanggal'])); ?></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td height="100">:</td>
                    <td><?php echo $row['deskripsi']; ?></td>
                  </tr>
                  <?php } ?>
                </table>
              
              
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

    