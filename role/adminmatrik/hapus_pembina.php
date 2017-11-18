<?php 
	include '../../functions.php';

        $id = $_GET['idPembina'];

        hapusPembina($id);

    echo "<script>window.location('index.php?page=pembina')</script>";

 ?>