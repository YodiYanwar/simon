<?php 

  include 'functions.php';

  $id = $_GET['id'];     
  $dataMahasiswa = mahasiswaDetails($id);
  foreach($dataMahasiswa as $row){
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=mahasiswadetails&id=<?php echo $row['id_user']; ?> "><i class="fa fa-arrow-left"></i></a>&nbsp;
        Manajemen Pengguna
        <small>Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li >Manajemen Pengguna</li>
        <li><a href="index.php?page=mahasiswa">Mahasiswa</a></li>
        <li><a href="index.php?page=mahasiswadetails&id=<?php echo $id ?>"><?php echo $row['nama']; ?></a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <h4>Edit Akun Mahasiswa : <b><?php echo $row['nama'] ?></b></h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <form method="post">
            <div class="form-group">
                <label>Nomor Induk Mahasiswa </label>
                <input type="text" class="form-control" name="nim" value="<?php echo $row['nim']; ?>" disabled>
            </div>            
            <div class="form-group">
                <label>Nama </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>           
            <div class="form-group">
                <label>Email </label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label>No Telp </label>
                <input type="text" class="form-control" name="telp" value="<?php echo $row['telp']; ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin </label>
                            <select class="form-control" name="gender" >
                              <?php 
                                  if ($row['j_kelamin'] == "Laki-laki") {
                                    echo "<option>Laki-laki</option>
                                          <option>Perempuan</option>";
                                  } else
                                  if($row['j_kelamin'] == "Perempuan"){
                                    echo "<option>Perempuan</option>
                                          <option>Laki-laki</option>";
                                  } else
                                  if($row['j_kelamin'] == NULL){
                                    echo "<option selected='selected'>Pilih Jenis Kelamin</option>
                                          <option>Laki-laki</option>
                                          <option>Perempuan</option>";
                                  }
                               ?>
                            </select>                 
            </div>
            <div class="form-group">
                <label>Kota Asal </label>
                <input type="text" class="form-control" name="asalkota" value="<?php echo $row['asalkota']; ?>">
            </div>            
            <div class="form-group">
                <label>Tanggal Lahir </label>
                <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
            </div><br>
            <button type="submit" class="btn btn-primary" name="editMahasiswa"><i class="fa fa-edit"></i>&nbsp;Edit Data Mahasiswa</button>
        </form>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>       
         
<?php
    if (isset($_POST['editMahasiswa'])) {
      editMahasiswa($id, $_POST['nama'], $_POST['gender'], date("Y-m-d", strtotime($_POST['tgl_lahir'])), $_POST['asalkota'], $_POST['email'], $_POST['telp']);
      echo "<script>document.location='/simon/index.php?page=mahasiswadetails&id=".$id."'</script>";
    }
  } 
?>
    </section>
    <!-- /.content -->