<?php 

	mysql_connect("localhost", "root", "");
	mysql_select_db("simon");	

	function tambahPembina($nama, $j_kelamin, $tgl_lahir, $gelar, $asalkota, $email, $telp, $user, $pass){
		mysql_query("INSERT INTO users (username, password, level) VALUES ('$user','$pass', 3)");

		$sql = mysql_query("SELECT id_user FROM users WHERE username='$user'") or die(mysql_error());
		$row = mysql_fetch_assoc($sql);
		$id_user = $row['id_user'];

		mysql_query("INSERT INTO pembina (nama, j_kelamin, tgl_lahir, gelar, asalkota, email, telp, id_user) VALUES ('$nama', '$j_kelamin', '$tgl_lahir', '$gelar', '$asalkota', '$email', '$telp', '$id_user')");

	}


 ?>