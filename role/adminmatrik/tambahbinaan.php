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
        Tambah Mahasiswa Binaan
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
            <div class="box-header with-border">
            	<h3 class="box-title"><?php foreach($np as $namaP){ echo $namaP['nama'].' '.$namaP['gelar']; }?></h3>
            </div>                
            <div class="box-body">
              <form method="POST">
              <!-- Table Daftar Pembina -->
                <table id="tableUsers" class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Pilih</th>
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
                    <td><input type="checkbox" class="flat-red" name="idMahasiswa[]" value="<?php echo $row['id_mahasiswa']; ?>"></td>
                    <td><?php echo "<span class='badge'>".$row['nim']."</span>" ?></td>
                    <td><?php echo "<a href='index.php?page=mahasiswadetails&id=".$row['id_user']."'>".$row['nama']."</a>" ?></td>
                    <td><?php if($row['j_kelamin'] == 'Ikhwan' || $row['j_kelamin'] == 'Laki-laki'){echo '<span class="label bg-green">Ikhwan</span>';} else if($row['j_kelamin'] == 'Akhwat' || $row['j_kelamin'] == 'Perempuan'){echo '<span class="label bg-yellow">Akhwat</span>';} else if($row['j_kelamin'] == NULL){echo '<h6><span class="label bg-gray">Belum diset</span></h6>';} ?></td>
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