<?php 

  include 'functions.php';

    $id = $_GET['id'];
      $dataPembina = pembinaDetails($id);
      foreach($dataPembina as $row){  

      	//$np = namaPembinaById($row['id_pembina']);
        $idPembina = $row['id_pembina'];
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
        <li class="active"><?php echo $row['nama'] ?></li>
      </ol>
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="row">
          </div>
          <div class="row">
	        <div class="col-md-5">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Data Profil</h3>
	            </div>		          
	            <div class="box-body box-profile">
		           <!-- Profile Image -->
	              <a href="#ModalUploadAva" data-toggle='modal' title="Klik untuk mengubah foto profil"><img class="profile-user-img img-responsive img-circle" src=
	              <?php 
			        if ($row['avatar'] == NULL) {
			          if ($row['j_kelamin'] == 'Perempuan'){
			            echo 'assets/img/user/default-female.jpg';
			          } else
			          if ($row['j_kelamin'] == 'Laki-laki'){
			            echo 'assets/img/user/default-male.png';
			          }
			        } else{
			          echo $row['avatar'];
			        }
	              ?> alt="User profile picture"></a>
	              <h3 class="profile-username text-center"><?php echo $row['nama'].' '.$row['gelar']; ?></h3>
	              <p class="text-muted text-center">Pembina Mahasiswa</p>	            

	              <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>ID Pembina</b> <div class="pull-right"><?php echo $row['id_pembina']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-id-badge fa-lg"></i></span></div>
	                </li>     
	                <li class="list-group-item">
	                  <b>Username</b> <div class="pull-right"><code><?php echo $row['username']; ?></code>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-user-o fa-lg"></i></span></div>
	                </li>   
	                <li class="list-group-item">
	                  <b>Login Terakhir</b> <div class="pull-right"><?php if ($row['last_login'] == '0000-00-00 00:00:00'){ echo 'Belum Pernah';}else{ echo date("d-m-Y H:i", strtotime($row['last_login']));} ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-clock-o fa-lg"></i></span></div>
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
	                  <b>Kota Asal</b> <div class="pull-right"><?php echo $row['asalkota']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-flag-o fa-lg"></i></span></div>
	                </li> 
	                <li class="list-group-item">
	                  <b>Tanggal Lahir</b> <div class="pull-right"><?php echo date('d F Y', strtotime($row['tgl_lahir'])); ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-calendar-o fa-lg"></i></span></div>
	                </li>                                  
	                <li class="list-group-item">
	                  <b>Jumlah Binaan</b> <div class="pull-right"><a href="index.php?page=bypembinadetail&idPembina=<?php echo $row['id_pembina']; ?>"><?php echo $row['jml_binaan']; ?></a>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href=""><i class="fa fa-users fa-lg"></i></a></div>
	                </li>      
	                <li class="list-group-item">
	                  <b>Performa Rata-rata Binaan</b> <div class="pull-right">&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href=""><i class="fa fa-dashboard fa-lg"></i></a></div>
	                </li>                            
	              </ul>
	                <a href="index.php?page=editpembina&id=<?php echo $row['id_user']; ?>" class='btn btn-primary btn-block'><i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit Data Profil</a>

	              <?php echo "<a href='#ModalHapusPembina' class='btn btn-danger btn-outline btn-block' data-toggle='modal' data-href='action/hapus.php?idpembina=".$row['id_pembina']."&iduser=".$row['id_user']."'><i class='fa fa-trash'></i>&nbsp;&nbsp;Hapus Pembina</a>"; ?>
	              
	            </div>
	            <!-- /.box-body -->

	            </div>
	          </div>
          <!-- /.box -->
            <div class="col-md-7">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Daftar Binaan</h3>
	            </div>	          	
	            <!-- /.box-header -->
	            <div class="box-body">

	              <!-- Table Daftar Pembina -->
	              <table id="tableMhsBinaan" class="table table-bordered table-hover table-condensed">
	                <thead>
	                  <tr>
	                    <th>NO</th>
	                    <th>Nama Mahasiswa Binaan</th>
	                    <th></th>
	                  </tr>
	                </thead>
	                <tbody>
	                <?php 
	                  $dataByPembina = MhsByPembinaDetail($row['id_pembina']);

	                  $no = 1;

                    if (is_array($dataByPembina) || is_object($dataByPembina)){

	                   foreach($dataByPembina as $row){  
	                ?>
	                <tr>
	                  <td><?php echo $no ?></td>
	                  <td><?php echo $row['nama_mahasiswa']?></td>
	                  <td>
	                    <div class="dropdown">
	                      <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown">
	                        <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;<span class="caret"></span>
	                      </button>
	                      <ul class="dropdown-menu">
	                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=$idPembina" class='dropdown-item'><i class='fa fa-edit'></i>Edit Daftar Binaan</a></li>
	                      </ul>
	                    </div>
	                  </td>
	                </tr>
	               <?php 
                    $no++; }
                    }
                  ?> 
	                </tbody>          
	              </table>
	              <!-- /Table Daftar Pembina -->
	            </div>
	            <!-- /.box-body -->
					<div class="box-footer">
		            	<a href="index.php?page=tambahbinaan&id=<?php echo $idPembina; ?>" class="btn btn-primary" data-toggle="modal"><i class="ion ion-person-add"></i>&nbsp;&nbsp;Tambah</a>&nbsp;&nbsp;
		            	<a href="index.php?page=editbinaan&id=<?php echo $idPembina; ?>" class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
		            </div>
	          </div>
	          <!-- /.box -->
            </div>
        </div>
        </div>

        

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
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-user-circle fa-lg"></i>&nbsp;&nbsp;Upload Foto Profil</b></h4>
                    </div>
                    <div class="modal-body">
                      <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="AvaProfilFile">
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <button type="submit" class="btn btn-primary btn-ok" name="uploadAva"><i class="fa fa-cloud-upload"></i>&nbsp;Upload</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Upload Avatar -->         
      </div>       

      <?php } ?>