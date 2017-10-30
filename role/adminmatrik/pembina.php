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
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manajemen Pengguna</li>
        <li>Pembina Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPembina"><i class="fa fa-plus"></i>&nbsp;Tambah Data Pembina</button>

              <div class="box-tools">

                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>Nama Pembina</th>
                  <th>Email</th>
                  <th>Telp</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                </tr>
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
                            <input type="text" class="form-control pull-right" id="datepicker">
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
                          <input type="text" name="telp" placeholder="No Telepon" id="telp" class="form-control" data-inputmask='"mask": "999-9999-9999"' data-mask required />
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
        tambahPembina($_POST['nama'], $_POST['gender'], $_POST['gelar'], $_POST['asalkota'], $_POST['email'], $_POST['telp'], $_POST['username'], $_POST['password']);
        
        echo "<script>document.location='/simon/adminmatrik/index.php?page=pembina'</script>";
      }
    ?>           
    </section>
    <!-- /.content -->