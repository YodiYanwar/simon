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
<!--             <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahUser"><i class="fa fa-user-plus"></i>&nbsp;Tambah Pengguna Sistem</button>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableUsers" class="table table-bordered table-hover table-condensed table-striped table-responsive">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID Pengguna</th>
                    <th>Username</th>
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
                  <!-- ID Pengguna Field -->
                  <td><?php echo "<span class='badge bg-green'>".$row['id_user']."</span>" ?></td>
                  <!-- Username Field -->
                  <td><?php if($row['level'] == '0'){ echo "<a href='index.php?page=admininstratordetails&id=".$row['id_user']."'>".$row['username']."</a>";} else if($row['level'] == '1'){echo "<a href='index.php?page=pimpinandetails&id=".$row['id_user']."'>".$row['username']."</a>";} else if($row['level'] == '2'){echo "<a href='index.php?page=adminmatrikdetails&id=".$row['id_user']."'>".$row['username']."</a>";} else if($row['level'] == '3'){echo "<a href='index.php?page=pembinadetails&id=".$row['id_user']."'>".$row['username']."</a>";} ?></td>
                  <!-- Level Field -->
                  <td><?php if($row['level'] == '0'){ echo "<a href='index.php?page=administrator' class='btn bg-navy btn-flat'>Administrator</a>";}else if($row['level'] == '1'){ echo "<a href='index.php?page=pimpinan' class='btn bg-purple btn-flat'>Pimpinan Matrikulasi</a>" ;}else if($row['level'] == '2'){ echo "<a href='index.php?page=adminmatrik' class='btn bg-maroon btn-flat'>Admin Matrikulasi</a>" ;}else if($row['level'] == '3'){ echo "<a href='index.php?page=pembina' class='btn bg-olive btn-flat'>Pembina Mahasiswa</a>" ;} ?></td>
                  <!-- Terakhir Login Field -->
                  <td><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login'])) ;} ?></td>
                  <!-- Aksi Reset Password Field -->
                  <td>                         
                    <div class="dropdown">
                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_user']; ?>" class='dropdown-item'><i class='fa fa-unlock-alt'></i><br>Reset Password</a></li>
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
    </section>
    <!-- /.content -->