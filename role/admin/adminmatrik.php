<?php 

  include 'functions.php';

 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pengguna
        <small>Pembina Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li class="active">Admin Matrikulasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPembina"><i class="ion ion-person-add"></i>&nbsp;&nbsp;Tambah Akun Admin Matrikulasi</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Admin Matrikulasi</th>
                    <th>Username</th>
                    <th>Terakhir Login</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataAdminMatrik = tampilAdminmatrik();
                    
                    $no = 1;
                    foreach($dataAdminMatrik as $row){

                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo "<a href='index.php?page=adminmatrikdetails&id=".$row['id_user']."'>".$row['nama']."</a>" ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;}
                  ?></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_user']; ?>" class='dropdown-item'><i class='fa fa-unlock-alt'></i>Reset Password</a></li>
                        <li><?php echo "<a style='color:#DD4B39;' href='#ModalHapusPembina' class='dropdown-item' data-toggle='modal' data-href='action/hapus.php?idadminmatrik=".$row['id_adminmatrik']."&iduser=".$row['id_user']."' aria-hidden='true'><i class='fa fa-remove'></i>Hapus Akun</a>"; ?></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                  <?php 
                    $no++; }
                   ?>      
                </tbody>          
              </table>
              <!-- /Table Daftar Pembina -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>        

        <!-- Modal Hapus Pembina -->
        <div class="modal fade" id="ModalHapusPembina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
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
    </section>
    <!-- /.content -->