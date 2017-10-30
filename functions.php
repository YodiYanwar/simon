<?php 
	//include 'koneksi.php';

	function tambahPembina($nama, $gelar, $asalkota, $email, $telp, $user, $pass){
		mysql_query("INSERT INTO users (username, password, level) VALUES ('$user','$pass', 3)");

		$sql = mysql_query("SELECT id_user FROM users WHERE username='$user'") or die(mysql_error());
		$row = mysql_fetch_assoc($sql);
		$id_user = $row['id_user'];

		mysql_query("INSERT INTO pembina (nama, gelar, asalkota, email, telp, id_user) VALUES ('$nama', '$gelar', '$asalkota', '$email', '$telp', '$id_user')");

	}


 ?>