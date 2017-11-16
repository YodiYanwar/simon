<?php 

  include 'functions.php';
  
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=pembina"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Profil Pembina Mahasiswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li><a href="index.php?page=pembina">Pembina Mahasiswa</a></li>
        <li class="active">Profil</li>
      </ol>
    </section> 

    <?php 
      $dataPembina = pembinaDetails($_GET['id']);
      foreach($dataPembina as $row){

     ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="col-md-3"></div>
              <div class="col-md-5">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row['nama'].' '.$row['gelar']; ?></h3>

              <p class="text-muted text-center">Pembina Mahasiswa</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>ID Pembina</b> <div class="pull-right"><?php echo $row['id_pembina']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-user fa-lg"></i></span></div>
                </li>                             
                <li class="list-group-item">
                  <b>Email</b> <div class="pull-right"><?php echo $row['email']; ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href=""><i class="fa fa-envelope-o fa-lg"></i></a></div>
                <li class="list-group-item">
                  <b>No Telp</b> <div class="pull-right"><?php echo $row['telp']; ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href=""><i class="fa fa-whatsapp fa-lg"></i></a></div>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <div class="pull-right"><?php echo $row['j_kelamin']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-venus-mars fa-lg"></i></span></div>
                </li>                  
                <li class="list-group-item">
                  <b>Kota Asal</b> <div class="pull-right"><?php echo $row['asalkota']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-flag-o fa-lg"></i></span></div>
                </li> 
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <div class="pull-right"><?php echo $row['tgl_lahir']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-calendar-o fa-lg"></i></span></div>
                </li>                                  
                <li class="list-group-item">
                  <b>Jumlah Binaan</b> <div class="pull-right"></div>
                </li>      
                <li class="list-group-item">
                  <b>Performa Rata-rata Binaan</b> <div class="pull-right"></div>
                </li>                           
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b><i class="fa fa-pencil"></i>&nbsp;Edit Profil</b></a><br>
              <a href="" class="btn btn-danger btn-outline btn-block"><i class="fa fa-trash"></i>&nbsp;Hapus Pembina</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <?php } ?>
      </div>      
