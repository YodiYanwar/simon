<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pengguna
        <small>Pimpinan Matrikulasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li class="active">Pimpinan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#importMhsModal"><i class="ion ion-person-add"></i>&nbsp;Tambah Pimpinan</button>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Pembina</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Terakhir Login</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPimpinan = tampilPimpinan();
                    
                    $no = 1;
                    foreach($dataPimpinan as $row){

                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo "<a href='index.php?page=pimpinandetails&id=".$row['id_user']."'>".$row['nama']."</a>"?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['j_kelamin'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['telp'] ?></td>
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;}
                  ?></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_pimpinan']; ?>" class='dropdown-item'><i class='fa fa-unlock-alt'></i>Reset Password</a></li>
                        <li><?php echo "<a style='color:#DD4B39;' href='#ModalHapusPembina' class='dropdown-item' data-toggle='modal' data-href='action/hapus.php?idpembina=".$row['id_pimpinan']."&iduser=".$row['id_user']."' aria-hidden='true'><i class='fa fa-remove'></i>Hapus Akun</a>"; ?></li>
                        
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
            <div class="box-body table-responsive no-padding">

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>      

      <!-- Modal Tambah Pembina -->
      <div class="modal fade" id="importMhsModal" role="dialog">
            <div class="modal-dialog " role="document">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; <b>Tambah Pimpinan</b></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <!-- <div class="col-md-5">
                          <label>Pilih File Database Ms.Access</label>
                          <input type="file" accept=".mdb" name="dbMahasiswa"/>                          
                        </div> -->
                        
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>                
                      <button type="submit" class="btn btn-primary" name="importMahasiswa"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>
              </div>
        </div>
        <!-- /Modal Tambah Pembina -->      

    <?php 
      if (isset($_POST['importMahasiswa'])) {
        importMahasiswa($_POST['angkatan']);
        echo "<script>document.location='/simon/index.php?page=mahasiswa'</script>";
      }
    ?>

    </section>
    <!-- /.content -->