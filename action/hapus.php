<?php 

include '../functions.php';

	if (isset($_GET['idpembina'])) {
		$idPembina = $_GET['idpembina'];
		$idUser = $_GET['iduser'];

	    hapusPembina($idPembina, $idUser);
	    header('location:/simon/index.php?page=pembina'); 
	} else
	if (isset($_GET['idmahasiswa'])) {
		$idPembina = $_GET['idmahasiswa'];
		$idUser = $_GET['iduser'];

	    hapusPembina($idMahasiswa, $idUser);
	    header('location:/simon/index.php?page=pembina'); 
	} else

	if(isset($_GET['idpage'])){
		header('location:/simon/index.php'); 
	}
 ?>