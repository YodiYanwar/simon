<?php 
  include 'functions.php';

  $idPembina = $_GET['id'];
  $np = namaPembinaById($idPembina);
  $ip = idUserByIdPembina($idPembina);


 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=pembinadetails&id=<?php foreach($ip as $idP){ echo $idP; }?>"><i class="fa fa-arrow-left"></i></a>&nbsp;
        <?php foreach($np as $namaP){ echo $namaP['nama'].' '.$namaP['gelar']; }?>
        <small>Tambah Mahasiswa Binaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li><a href="index.php?page=pembina">Pembina</a></li>
        <li><a href="index.php?page=pembinadetails&id=<?php foreach($ip as $idP){ echo $idP; }?>"><?php foreach($np as $namaP){ echo $namaP['nama']; }?></a></li>
        <li class="active">Tambah Mahasiswa Binaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <form method="POST">
          <div class="box">            
            <div class="box-body">
              <form method="POST">
              <!-- Table Daftar Pembina -->
                <table id="tablePembina" class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th></th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Ikhwan/Akhwat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $calonBinaan = tampilCalonBinaan();
                      $no = 1;
                      foreach($calonBinaan as $row){
                    ?>
                  <tr>
                    <td><input type="checkbox" name="idMahasiswa[]" value="<?php echo $row['id_mahasiswa']; ?>"></td>
                    <td><?php echo "<span class='badge bg-green'>".$row['nim']."</span>" ?></td>
                    <td><?php echo "<a href='index.php?page=mahasiswadetails&id=".$row['id_user']."'>".$row['nama']."</a>" ?></td>
                    <td><?php if($row['j_kelamin'] == NULL) echo "Belum diset" ?></td>
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
            <div class="box-footer">
              <button type="submit" name="submitBinaanMahasiswa" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
            </div>
          </div>
          <!-- /.box -->
        </form>
        </div>
      </div>      

      <!-- Modal Tambah Pembina -->
      <div class="modal fade" id="importMhsModal" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; <b>Import Data Mahasiswa</b></h4>
                    </div>
                    <div class="modal-body">
                     
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

    foreach($ip as $idP){
      if (isset($_POST['submitBinaanMahasiswa'])) {

        if(!empty($_POST['idMahasiswa'])) {
          foreach($_POST['idMahasiswa'] as $idMhs) {
            tambahMhsBinaan($idPembina, $idMhs);
          }
        }

        echo "<script>document.location='index.php?page=pembinadetails&id=$idP'</script>";
      }
    }
    ?>

    </section>
    <!-- /.content -->