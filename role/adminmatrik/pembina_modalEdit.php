<?php 
	include '../../functions.php';

    if($_POST['idPembina']) {
        $id = $_POST['idPembina'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap

        $pembina = pembinaDetails($id);

        foreach($pembina as $row){ ?>


        <form action="pembina_doEdit.php" method="post">
            <div class="form-group">
                <label>ID Pembina </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['id_pembina']; ?>" disabled>
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
                              <option>Pilih Jenis Kelamin</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>                 
            </div>
            <div class="form-group">
                <label>Kota Asal </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['asalkota']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir </label>
                <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
            </div>
        </form>

        <?php } } ?>