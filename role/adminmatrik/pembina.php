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
        <li class="active">Pembina Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tableUsers" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Pembina</th>
                    <th>Jumlah Binaan</th>
                    <th>Ikhwan/Akhwat</th>
                    <th>Telp</th>
                    <th>Terakhir Login</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataPembina = tampilPembina();
                    
                    $no = 1;
                    foreach($dataPembina as $row){

                   ?>
                <tr>
                  <td><?php echo $no ?></td>  
                  <td><?php echo "<a href='index.php?page=pembinadetails&id=".$row['id_user']."'>".$row['nama']."</a>" ?></td>
                  <td><?php echo $row['jml_binaan'] ?></td>
                  <td><?php if($row['j_kelamin'] == 'Ikhwan' || $row['j_kelamin'] == 'Laki-laki'){echo '<span class="label bg-green">Ikhwan</span>';} else if($row['j_kelamin'] == 'Akhwat' || $row['j_kelamin'] == 'Perempuan'){echo '<span class="label bg-yellow">Akhwat</span>';} ?></td>
                  <td><?php echo $row['telp'] ?></td>
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;}
                  ?></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_pembina']; ?>" class='dropdown-item'><i class='fa fa-edit'></i>Edit</a></li>
                        <li><?php echo "<a style='color:#DD4B39;' href='#ModalHapusPembina' class='dropdown-item' data-toggle='modal' data-href='action/hapus.php?idpembina=".$row['id_pembina']."&iduser=".$row['id_user']."' aria-hidden='true'><i class='fa fa-remove'></i>Hapus</a>"; ?></li>
                        
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
            <div class="box-footer">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPembina"><i class="ion ion-person-add"></i>&nbsp;&nbsp;Tambah Akun Pembina</button>
            </div>            
          </div>
          <!-- /.box -->
        </div>
      </div>        

      <!-- Modal Tambah Pembina -->
      <div class="modal fade" id="tambahPembina" role="dialog">
            <div class="modal-dialog" role="document">
            <form class="form-horizontal" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; <b>Tambah Data Pembina</b></h4>
                    </div>
                    <div class="modal-body">      
                      <div class="form-group has-feedback">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="nama" placeholder="Nama" id="nama" class="form-control" required/>
                          </div>                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jKelamin" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-venus-mars"></i>
                            </div>
                            <select class="form-control" name="gender">
                              <option>Pilih Jenis Kelamin</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>                    
                        </div>                            
                          </div>                         
                      </div>
                      <div class="form-group">
                        <label for="gelar" class="col-sm-2 control-label">Tanggal lahir</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir">
                          </div>
                          <!-- /.input group -->                          
                        </div>
                      </div>                       
                      <div class="form-group">
                        <label for="gelar" class="col-sm-2 control-label">Gelar</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-graduation-cap"></i>
                            </div>
                            <input type="text" list="autogelar" name="gelar" placeholder="Gelar Pendidikan" id="gelar" class="form-control" required/>
                          </div>                        
                          
                        </div>
                      </div>                        
                          <datalist id="autogelar">
                              <option value="S.E">
                              <option value="S.Ei">
                              <option value="S.Pd">
                              <option value="S.Pdi">
                              <option value="S.Ag">
                              <option value="M.A">
                              <option value="A.Ag">
                              <option value="Lc.">
                              <option value="Dr.">
                              <option value="Prof.">
                              <option value="S.Kom.">
                              <option value="M.Kom.">
                          </datalist>                          
                      <div class="form-group">
                        <label for="asalkota" class="col-sm-2 control-label">Kota</label>
                        <div class="col-sm-10">
                          <input type="text" name="asalkota" placeholder="Kota Asal" id="asalkota" class="form-control" required />
                        </div>
                      </div>     
                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" placeholder="Email" id="email" class="form-control" required />
                        </div>
                      </div>                
                      <div class="form-group">
                        <label for="telp" class="col-sm-2 control-label">No. Telp</label>
                        <div class="col-sm-10">
                          <input type="number" name="telp" placeholder="No Telepon" id="telp" class="form-control" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" name="username" placeholder="Username" id="username" class="form-control" required />
                        </div>
                      </div>                
                      <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" placeholder="Password" id="password" class="form-control" required />
                        </div>
                      </div>                        
                    </div>                  

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>                
                      <button type="submit" class="btn btn-primary" name="tambahPembina"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>
              </div>
        </div>
        <!-- /Modal Tambah Pembina -->

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

    <?php 
      if (isset($_POST['tambahPembina'])) {
        tambahPembina($_POST['nama'], $_POST['gender'], date("Y-m-d", strtotime($_POST['tgl_lahir'])), $_POST['gelar'], $_POST['asalkota'], $_POST['email'], $_POST['telp'], $_POST['username'], $_POST['password']);
        
        echo "<script>document.location='/simon/index.php?page=pembina'</script>";
      }
    ?>           
    </section>
    <!-- /.content -->