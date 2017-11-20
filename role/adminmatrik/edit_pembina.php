<?php 

  include 'functions.php';

  $id = $_GET['id'];     
  $pembina = pembinaDetails($id);
  foreach($pembina as $row){ 
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=pembinadetails&id=<?php echo $row['id_pembina']; ?> "><i class="fa fa-arrow-left"></i></a>&nbsp;
        Manajemen Pengguna
        <small>Pembina Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li >Manajemen Pengguna</li>
        <li><a href="index.php?page=pembina">Pembina Mahasiswa</a></li>
        <li><a href="index.php?page=pembinadetails&id=<?php echo $id ?>"><?php echo $row['nama']; ?></a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             Edit Pembina <?php echo $row['nama'] ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <form action="editPembina" method="post">
            <div class="form-group">
                <label>ID Pembina </label>
                <input type="text" class="form-control" name="id" value="<?php echo $row['id_pembina']; ?>" disabled>
            </div>            
            <div class="form-group">
                <label>Nama </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Email </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label>No Telp </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['telp']; ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin </label>
                            <select class="form-control" name="gender" value="<?php echo $row['j_kelamin']; ?>">
                              <option><?php echo $row['j_kelamin']; ?></option>
                              <?php 
                                  if ($row['j_kelamin'] == "Laki-laki") {
                                    echo "<option>Perempuan</option>";
                                  } else
                                  if($row['j_kelamin'] == "Perempuan"){
                                    echo "<option>Laki-laki</option>";
                                  }
                               ?>
                            </select>                 
            </div>
            <div class="form-group">
                <label>Kota Asal </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['asalkota']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir </label>
                <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
            </div><br>
            <button type="submit" class="btn btn-primary" ><i class="fa fa-pencil"></i>&nbsp;Edit Data Pembina</button>
        </form>

        <?php } ?>      
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>      

    <?php 
      if (isset($_POST['editPembina'])) {
        editPembina($_POST['id'], $_POST['nama'], $_POST['gender'], date("Y-m-d", strtotime($_POST['tgl_lahir'])), $_POST['gelar'], $_POST['asalkota'], $_POST['email'], $_POST['telp']);
        
        echo "<script>document.location='/simon/index.php?page=pembinadetails&id=".$_POST['id']."'</script>";
      }
    ?>           
    </section>
    <!-- /.content -->