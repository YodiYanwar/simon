<?php 

include '../functions.php';

	if (isset($_GET['idpembina'])) {
		$id = $_GET['idpembina'];
	    hapusPembina($id);
	    header('location:/simon/index.php?page=pembina'); 
	} else
	if(isset($_GET['idpage'])){
		header('location:/simon/index.php'); 
	}
 ?>