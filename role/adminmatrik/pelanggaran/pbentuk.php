<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggaran
        <small>Bentuk Pelanggaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pelanggaran</li>
        <li class="active">Berdasarkan Bentuk Pelanggaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <a href="index.php?page=tambahpbentuk" class="btn btn-primary"><i class="fa fa-chevron-circle-down"></i>&nbsp;Tambah Bentuk Pelanggaran</a>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Bentuk Pelanggaran</th>
                    <th>Jumlah Pelanggaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    /*$dataMahasiswa = tampilMahasiswa();
                    
                    $no = 1;
                  if (is_array($dataMahasiswa) || is_object($dataMahasiswa)){
                    foreach($dataMahasiswa as $row){*/

                   ?>
                <tr>
                  
                </tr>
                 <?php 
                   // $no++; }
                  // }
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