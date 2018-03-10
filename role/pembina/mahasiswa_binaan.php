<?php 
  include 'functions.php';
  $idPembina = $_SESSION['id_pembina'];
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembinaan
        <small>Mahasiswa Binaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Pembinaan</li>
        <li class="active">Mahasiswa Binaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
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

      <!-- Modal Tambah Pembina -->
      <div class="modal fade" id="importMhsModal" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
            <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp; <b>Import Data Mahasiswa</b></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <!-- <div class="col-md-5">
                          <label>Pilih File Database Ms.Access</label>
                          <input type="file" accept=".mdb" name="dbMahasiswa"/>                          
                        </div> -->
                        <div class="col-lg-12">
                          <label>Pilih Tahun Angkatan</label>
                          <select class="form-control" name="angkatan">
                            <option>Angkatan</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                          </select>
                        </div>
                      </div>
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
      if (isset($_POST['importMahasiswa'])) {
        importMahasiswa($_POST['angkatan']);
        echo "<script>document.location='/simon/index.php?page=mahasiswa'</script>";
      }
    ?>

    </section>
    <!-- /.content -->