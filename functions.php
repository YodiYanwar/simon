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
		$ambildata = mysql_query("SELECT pembina.*, users.* FROM users INNER JOIN pembina ON pembina.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}

	function tampilUsers(){
		$ambildata = mysql_query("SELECT * FROM users ORDER BY username") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pengguna sistem kosong";
		}		
	}	

	function tampilAdminmatrik(){
		$ambildata = mysql_query("SELECT adminmatrik.*, users.* FROM users INNER JOIN adminmatrik ON adminmatrik.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}

	function tampilAdministrator(){
		$ambildata = mysql_query("SELECT administrator.*, users.* FROM users INNER JOIN administrator ON administrator.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}	

	function pembinaDetails($idUser){
		$ambildata = mysql_query("SELECT pembina.*, users.* FROM users INNER JOIN pembina ON pembina.id_user = users.id_user WHERE users.id_user = $idUser");
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

	function totalUser(){
		$ambildata = mysql_query("SELECT COUNT(id_user) as Total from users");
		$data = mysql_fetch_assoc($ambildata);
		return $data;		
	}

	function totalAdminMatrik(){
		$ambildata = mysql_query("SELECT COUNT(id_adminmatrik) as Total from adminmatrik");
		$data = mysql_fetch_assoc($ambildata);
		return $data;		
	}	

	function adminMatrikDetails($idUser){
		$ambildata = mysql_query("SELECT adminmatrik.*, users.* FROM users INNER JOIN adminmatrik ON adminmatrik.id_user = users.id_user WHERE users.id_user = $idUser");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}

	function editAdminMatrikDetails($id_AM, $nama, $telp, $email, $j_kelamin, $tgl_lahir){
		mysql_query("UPDATE adminmatrik SET nama='$nama', telp='$telp', email='$email', j_kelamin='$j_kelamin', tgl_lahir='$tgl_lahir' WHERE id_adminmatrik='$id_AM' ") or die(mysql_error());
	}

	function gantiUserPassword($idUser, $newPass){
		mysql_query("UPDATE users SET `password` = '$newPass' WHERE id_user = '$idUser'");
	}
 ?>