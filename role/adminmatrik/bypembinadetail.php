<?php 

  include 'functions.php';
  $idPembina = $_GET['idPembina'];

  $np = namaPembinaById($idPembina);
                  


 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=bypembina"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Mahasiswa Berdasarkan Pembina : 
        <?php foreach($np as $namaPembina){ echo $namaPembina; }?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li>Pembinaan</li>
        <li><a href="index.php?page=bypembina">Berdasarkan Pembina</a></li>
        <li class="active"><?php foreach($np as $namaPembina){ echo $namaPembina; }?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#tambahMhsBinaan"><i class="ion ion-person-add"></i>&nbsp;&nbsp;Tambah Mahasiswa Binaan</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <!-- Table Daftar Pembina -->
              <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Mahasiswa Binaan</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $dataByPembina = MhsByPembinaDetail($idPembina);
                  
                  $no = 1;
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
                        <li><a style="color:#3C8DBC;" href="index.php?page=editpembina&id=<?php echo $row['id_pembina']; ?>" class='dropdown-item'><i class='fa fa-edit'></i>Edit Daftar Binaan</a></li>
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

    </section>
    <!-- /.content -->