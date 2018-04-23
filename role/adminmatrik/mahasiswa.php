<?php 
  include 'functions.php';
 ?>    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pengguna
        <small>Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <button class="btn btn-primary" data-toggle="modal" data-target="#importMhsModal"><i class="fa fa-chevron-circle-down"></i>&nbsp;Import Data Mahasiswa</button>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table Daftar Pembina -->
              <table id="tableMahasiswa" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Ikhwan/Akhwat</th>
                    <th>Terakhir Login</th>
                    <th>Action</th>
                  </tr>
                </thead>         
              </table>
              <!-- /Table Daftar Pembina -->
            </div>
            <!-- /.box-body -->            
            <div class="box-body table-responsive no-padding">

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>      

      <!-- Modal Import Mahasiswa -->
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
        <!-- /Modal Import Mahasiswa -->      

        <!-- Modal Hapus Mahasiswa -->
        <div class="modal fade" id="ModalHapusMahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4><b><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus Akun Mahasiswa ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a class="btn btn-danger btn-ok"><i class="fa fa-remove"></i>&nbsp;Hapus</a>                    
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Hapus Pembina -->        

    <?php 
      if (isset($_POST['importMahasiswa'])) {
        importMahasiswa($_POST['angkatan']);
        echo "<script>document.location='/simon/index.php?page=mahasiswa'</script>";
      }
    ?>

    </section>
    <!-- /.content -->

    <script>
    $(document).ready(function() {
      var t = $('#tableMahasiswa').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "/simon/dataMahasiswa.php",
            "order": [[ 4, "asc" ]],
            "columnDefs": [
              { "visible": false, "targets": [0,1,2]},
              { "searchable": false, "orderable": false, "targets": [5,6,7]}
            ]
        } );

    } );
    </script>