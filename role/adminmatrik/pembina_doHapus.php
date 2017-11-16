<?php 
	include '../../functions.php';

        $id = $_POST['idPembina'];

        hapusPembina($id);

    echo "<script>window.location('index.php?page=pembina')</script>";

 ?>