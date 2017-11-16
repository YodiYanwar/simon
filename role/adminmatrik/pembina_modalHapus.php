<?php 
	include '../../functions.php';

    if($_POST['idPembina']) {
        $id = $_POST['idPembina'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap

        $pembina = pembinaDetails($id);

        foreach($pembina as $row){ ?>


                  <form action="pembina_doHapus.php" method="POST">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><i class="fa fa-trash"></i>&nbsp;&nbsp;<b>Hapus Pembina ?</b></h4>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Hapus</button>
                      </div>
                  </form>

        <?php } } ?>