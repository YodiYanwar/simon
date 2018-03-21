<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembinaan
        <small>Shalat Wajib Berjamaah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <button class="btn btn-primary" data-toggle="modal" data-target="#importMhsModal"><i class="fa fa-chevron-circle-down"></i>&nbsp;Import Data Presensi Shalat Mahasiswa</button>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Ikhwan/Akhwat</th>
                    <th>Terakhir Login</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataMahasiswa = tampilMahasiswa();
                    
                    $no = 1;
                    foreach($dataMahasiswa as $row){

                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo "<span class='badge'>".$row['nim']."</span>" ?></td>
                  <td><?php echo "<a href='index.php?page=mahasiswadetails&id=".$row['id_user']."'>".$row['nama']."</a>" ?></td>
                  <td><?php if($row['j_kelamin'] == 'Ikhwan' || $row['j_kelamin'] == 'Laki-laki'){echo '<span class="label bg-green">Ikhwan</span>';} else if($row['j_kelamin'] == 'Akhwat' || $row['j_kelamin'] == 'Perempuan'){echo '<span class="label bg-yellow">Akhwat</span>';} else if($row['j_kelamin'] == NULL){echo '<span class="label bg-gray">Belum diset</span>';} ?></td>
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;}
                  ?></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editmahasiswa&id=<?php echo $row['id_user']; ?> " class='dropdown-item'><i class='fa fa-edit'></i>Edit</a></li>
                        <?php if(strlen($row['password']) > 5){ echo "<li><a style='color:#3C8DBC;' href='#ModalResetPassword' class='dropdown-item' data-toggle='modal'><i class='fa fa-unlock-alt'></i>&nbsp;&nbsp;Reset Password</a></li>";} ?>
                        <li><?php echo "<a style='color:#DD4B39;' href='#ModalHapusMahasiswa' class='dropdown-item' data-toggle='modal' data-href='action/hapus.php?idmahasiswa=".$row['id_mahasiswa']."&iduser=".$row['id_user']."' aria-hidden='true'><i class='fa fa-remove'></i>Hapus</a>"; ?></li>
                        
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

      <!-- Modal Import Mahasiswa -->
      <div class="modal fade" id="importMhsModal" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; <b>Import Data Mahasiswa</b></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <!-- <div class="col-md-5">
                          <label>Pilih File Database Ms.Access</label>
                          <input type="file" accept=".mdb" name="dbMahasiswa"/>                          
                        </div> -->
                        <div class="col-lg-12">
                          <label>Pilih Tahun Angkatan</label>
                          <select class="form-control" name="angkatan">
                            <option>Angkatan</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                          </select>
                        </div>
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
        <!-- /Modal Import Mahasiswa -->      

        <!-- Modal Hapus Mahasiswa -->
        <div class="modal fade" id="ModalHapusMahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4><b><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus Akun Mahasiswa ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a class="btn btn-danger btn-ok"><i class="fa fa-remove"></i>&nbsp;Hapus</a>                    
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Hapus Pembina -->        

    <?php 
      if (isset($_POST['importMahasiswa'])) {
        importMahasiswa($_POST['angkatan']);
        echo "<script>document.location='/simon/index.php?page=mahasiswa'</script>";
      }
    ?>

    </section>
    <!-- /.content -->