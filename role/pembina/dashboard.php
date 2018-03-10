<?php 

  include 'functions.php';
  $idPembina = $_SESSION['id_pembina'];
  $tb = totalBinaanByPembina($idPembina);
   
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Ringkasan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php foreach($tb as $totalMhsBinaan){ echo $totalMhsBinaan; }?></h3>
              <p>Jumlah Mahasiswa Binaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="index.php?page=mahasiswabinaan" class="small-box-footer">Lebih Detil &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->   
      

    </section>
    <!-- /.content -->