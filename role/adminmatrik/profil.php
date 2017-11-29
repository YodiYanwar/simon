<?php 

  include 'functions.php';
      $dataAdminMatrik = adminMatrikDetails($_SESSION['id_AM']);
      foreach($dataAdminMatrik as $row){ 
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=pembina"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Profil Saya
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Profil</li>
        <li class="active"><?php echo $row['nama'] ?></li>
      </ol>
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="row">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="col-md-3"></div>
              <div class="col-md-5">
              <a href="#ModalUploadAva" title="Klik untuk Ganti Foto Profil" data-toggle='modal'><img class="profile-user-img img-responsive img-circle" src=<?php echo "assets/img/user/".$row['avatar']; ?> alt="User profile picture"></a>
              <h3 class="profile-username text-center"><?php echo $_SESSION['nama']; ?></h3>

              <p class="text-muted text-center">Admin Matrikulasi</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>ID Admin Matrikulasi</b> <div class="pull-right"><?php echo $row['id_adminmatrik']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-user fa-lg"></i></span></div>
                </li>                             
                <li class="list-group-item">
                  <b>Email</b> <div class="pull-right"><?php echo $row['email']; ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-outline" href=""><i class="fa fa-envelope-o fa-lg"></i></a></div>
                </li>             
                <li class="list-group-item">
                  <b>No Telp</b> <div class="pull-right"><?php echo $row['telp']; ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-outline" href=""><i class="fa fa-whatsapp fa-lg"></i></a></div>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <div class="pull-right"><?php echo $row['j_kelamin']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-venus-mars fa-lg"></i></span></div>
                </li>                  
                
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <div class="pull-right"><?php echo date('d F Y', strtotime($row['tgl_lahir'])); ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-calendar-o fa-lg"></i></span></div>
                </li>                                  
              </ul>
                <a href="index.php?page=editpembina&id=<?php echo $row['id_adminmatrik']; ?>" class='btn btn-primary btn-block'><b><i class='fa fa-pencil'></i>&nbsp;Edit Data Profil</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <?php } ?>

        <div class="modal fade" id="ModalEditPembina" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-pencil"></i>&nbsp;&nbsp;<b>Edit Profil Pembina</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="fetched-data"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                      <button type="submit" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Pembina -->
        <div class="modal fade" id="ModalHapusPembina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Anda yakin ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a class="btn btn-danger btn-ok"><i class="fa fa-remove"></i>&nbsp;Hapus</a>                    
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Hapus Pembina -->            

        <!-- Modal Upload Avatar -->
        <div class="modal fade" id="ModalUploadAva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-user-circle fa-lg"></i>&nbsp;&nbsp;Upload Foto Profil</b></h4>
                    </div>
                    <div class="modal-body">
                      
                        <input type="file" name="file">
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="upload" value="Upload">
                    </div>
                  </div>
                </form>
              </div>
        </div>        
        <!-- /Modal Upload Avatar --> 

      </div>       