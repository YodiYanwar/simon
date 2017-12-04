<?php 

  include 'functions.php';

 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pengguna
        <small>Sistem</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li class="active">Semua</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahUser"><i class="fa fa-user-plus"></i>&nbsp;Tambah Pengguna Sistem</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableUsers" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Username</th>
                    <th>ID User</th>
                    <th>Level</th>
                    <th>Terakhir Login</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $dataUser = tampilUsers();
                    $no = 1;
                    foreach($dataUser as $row){
                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['id_user'] ?></td>
                  <td><?php if ($row['level'] == '0'){ echo 'Administrator';}else if($row['level'] == '1'){ echo 'Pimpinan Matrikulasi' ;}else if($row['level'] == '2'){ echo 'Admin Matrikulasi' ;}else if($row['level'] == '3'){ echo 'Pembina Mahasiswa' ;} ?></td>
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;} ?></td>
                  <td>                         
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_user']; ?>" class='dropdown-item'><i class='fa fa-unlock-alt'></i>&nbsp;Reset Password</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                  <?php 
                    $no++; }
                   ?>      
                </tbody>          
              </table>
            </div>
            <!-- /.box-body -->
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

    <?php 
      if (isset($_POST['tambahPembina'])) {
        tambahPembina($_POST['nama'], $_POST['gender'], date("Y-m-d", strtotime($_POST['tgl_lahir'])), $_POST['gelar'], $_POST['asalkota'], $_POST['email'], $_POST['telp'], $_POST['username'], $_POST['password']);
        
        echo "<script>document.location='/simon/index.php?page=pembina'</script>";
      }
    ?>           
    </section>
    <!-- /.content -->