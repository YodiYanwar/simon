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

	function tampilPembina(){
		$ambildata = mysql_query("SELECT * FROM pembina ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}

	function pembinaDetails($id){
		$ambildata = mysql_query("SELECT * FROM pembina WHERE id_pembina = $id");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}

	function hapusPembina($idPembina, $idUser){
		mysql_query("DELETE FROM pembina WHERE id_pembina = $idPembina");
		mysql_query("DELETE FROM users WHERE id_user = $idUser");
	}

	function editPembina($idPembina, $nama, $j_kelamin, $tgl_lahir, $gelar, $asalkota, $email, $telp){
		mysql_query("UPDATE pembina SET nama = '$nama', j_kelamin = '$j_kelamin', tgl_lahir = '$tgl_lahir', gelar = '$gelar', asalkota = '$asalkota', email = '$email', telp = '$telp' WHERE id_pembina = $idPembina ");
	}

	function totalPembina(){
		$ambildata = mysql_query("SELECT COUNT(id_pembina) as Total from pembina");
		$data = mysql_fetch_assoc($ambildata);
		return $data;
	}

	function adminMatrikDetails($id){
		$ambildata = mysql_query("SELECT adminmatrik.*, users.username, users.password FROM adminmatrik, users WHERE users.id_user = $id");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}

	function gantiUserPassword($idUser, $newPass){
		mysql_query("UPDATE users SET `password` = '$newPass', WHERE id_user = '$idUser'");
	}
 ?>