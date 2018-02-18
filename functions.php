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

	function tampilMahasiswa(){
		$ambildata = mysql_query("SELECT mahasiswa.*, users.* FROM users INNER JOIN mahasiswa ON mahasiswa.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar mahasiswa kosong";
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

	function tampilPimpinan(){
		$ambildata = mysql_query("SELECT pimpinan.*, users.* FROM users INNER JOIN pimpinan ON pimpinan.id_user = users.id_user ORDER BY nama") or die(mysql_error());
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

	function mahasiswaDetails($idUser){
		$ambildata = mysql_query("SELECT mahasiswa.*, users.*, pembina.nama AS nama_pembina, pembina.id_user AS id_user_pembina FROM mahasiswa LEFT JOIN pembina ON mahasiswa.id_pembina = pembina.id_pembina LEFT JOIN users ON mahasiswa.id_user = users.id_user WHERE users.id_user = $idUser");
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

	function editMahasiswa($idUser, $nama, $j_kelamin, $tgl_lahir, $asalkota, $email, $telp){
		mysql_query("UPDATE mahasiswa SET nama = '$nama', j_kelamin = '$j_kelamin', tgl_lahir = '$tgl_lahir', asalkota = '$asalkota', email = '$email', telp = '$telp' WHERE id_user = $idUser ");
	}	

	function totalPembina(){
		$ambildata = mysql_query("SELECT COUNT(id_pembina) as Total from pembina");
		$data = mysql_fetch_assoc($ambildata);
		return $data;
	}

	function totalMahasiswa(){
		$ambildata = mysql_query("SELECT COUNT(id_mahasiswa) as Total from mahasiswa");
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

	function totalBinaanByPembina($idPembina){
		$ambildata = mysql_query("SELECT COUNT(id_mahasiswa) as JumlahBinaan from mahasiswa WHERE id_pembina = $idPembina");
		$data = mysql_fetch_assoc($ambildata);
		return $data;		
	}

	function BinaanByPembina($idPembina){
		$ambildata = mysql_query("SELECT * from mhs_binaan WHERE id_pembina = $idPembina");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;		
	}	

	function mahasiswaByPembina($idPembina){
		$ambildata = mysql_query("SELECT mahasiswa.nim AS nim, mahasiswa.nama AS nama FROM mhs_binaan INNER JOIN mahasiswa on mhs_binaan.id_mahasiswa = mahasiswa.id_mahasiswa WHERE mhs_binaan.id_pembina = $idPembina");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;		
			}

	function adminMatrikDetails($idUser){
		$ambildata = mysql_query("SELECT adminmatrik.*, users.* FROM users INNER JOIN adminmatrik ON adminmatrik.id_user = users.id_user WHERE users.id_user = $idUser");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}

	function admininstratorDetails($idUser){
		$ambildata = mysql_query("SELECT administrator.*, users.* FROM users INNER JOIN administrator ON administrator.id_user = users.id_user WHERE users.id_user = $idUser");
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

	function resetPassword($idUser){
		$randpass = substr(str_shuffle(str_repeat("0123456789aAbBcCdDeEfFgGhHiIjJ0123456789kKlLmMnNoOpPqQrRsStT0123456789uUvVwWxXyYzZ", 5)), 0, 5);
		mysql_query("UPDATE users SET `password` = '$randpass' WHERE id_user = '$idUser'");
	}

	function importMahasiswa($angkatan){
		$koneksi_mdb = odbc_connect( 'att2000', "", "");
		
		$sql = "SELECT USERID,Badgenumber,Name FROM USERINFO WHERE Badgenumber LIKE '$angkatan' & '1011%' ORDER BY Name";
		$result = odbc_exec($koneksi_mdb, $sql);

		while($row_mdb = odbc_fetch_array($result)){

			/*$namaTanpaSpasi = str_replace(' ', '', $row_mdb['Name']);
			$pass = $namaTanpaSpasi.(substr($row_mdb['Badgenumber'], -5));*/
			$randpass = substr(str_shuffle(str_repeat("0123456789aAbBcCdDeEfFgGhHiIjJ0123456789kKlLmMnNoOpPqQrRsStT0123456789uUvVwWxXyYzZ", 5)), 0, 5);

			//if(strpos($row_mdb['Name'], $row_mdb['Badgenumber']) === FALSE){
				$mysql_insert_usr = "INSERT INTO users(username, password, level) VALUES ('".$row_mdb['Badgenumber']."', '".$randpass."', '4')";
				mysql_query($mysql_insert_usr);

				$sql = mysql_query("SELECT id_user FROM users WHERE username='".$row_mdb['Badgenumber']."'") or die(mysql_error());
				$row = mysql_fetch_assoc($sql);
				$id_user = $row['id_user'];

				$mysql_insert_mhs = "INSERT INTO mahasiswa (id_mahasiswa, nim, nama, id_user) VALUES ('".$row_mdb['USERID']."', '".$row_mdb['Badgenumber']."', '".$row_mdb['Name']."', '$id_user')";
				mysql_query($mysql_insert_mhs);
				//echo $row_mdb['Name']." Berhasil diinput <br>";
			//}
			
		}
	}

 ?>