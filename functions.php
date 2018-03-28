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

	function tambahMhsBinaan($idPembina, $idMahasiswa){
		mysql_query("INSERT INTO m_binaan (id_pembina, id_mahasiswa) VALUES ('$idPembina', '$idMahasiswa');");
		mysql_query("UPDATE mahasiswa m SET m.j_kelamin=(SELECT p.j_kelamin FROM pembina p WHERE p.id_pembina = $idPembina) WHERE m.id_mahasiswa = $idMahasiswa;");
	}

	function tampilPembina(){
		$ambildata = mysql_query("SELECT p.*, COUNT(mb.id_mahasiswa) AS 'jml_binaan', u.* FROM pembina p LEFT JOIN m_binaan mb ON p.id_pembina = mb.id_pembina LEFT JOIN users u ON p.id_user = u.id_user GROUP BY p.nama ORDER BY p.nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}

	function tampilUsers(){
		$ambildata = mysql_query("SELECT * FROM users ORDER BY level") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pengguna sistem kosong";
		}		
	}	

	function tampilMahasiswa(){
		$ambildata = mysql_query("SELECT mahasiswa.*, users.* FROM users INNER JOIN mahasiswa ON mahasiswa.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar mahasiswa kosong";
		}		
	}

	function tampilCalonBinaan(){
		$ambildata = mysql_query("SELECT m.* FROM mahasiswa m WHERE m.id_mahasiswa NOT IN (SELECT m_binaan.id_mahasiswa FROM m_binaan) ORDER BY m.nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} 	
	}	

	function tampilAdminmatrik(){
		$ambildata = mysql_query("SELECT adminmatrik.*, users.* FROM users INNER JOIN adminmatrik ON adminmatrik.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}

	function tampilPimpinan(){
		$ambildata = mysql_query("SELECT pimpinan.*, users.* FROM users INNER JOIN pimpinan ON pimpinan.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}	

	function tampilAdministrator(){
		$ambildata = mysql_query("SELECT administrator.*, users.* FROM users INNER JOIN administrator ON administrator.id_user = users.id_user ORDER BY nama") or die(mysql_error());
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "Daftar pembina kosong";
		}		
	}	

	function MhsByPembinaDetail($idPembina){
		$ambildata = mysql_query("SELECT mb.id_mahasiswa, m.nim , m.nama AS 'nama_mahasiswa', m.id_user AS 'uid_mahasiswa', p.id_user AS 'uid_pembina' FROM m_binaan mb LEFT JOIN mahasiswa m ON mb.id_mahasiswa = m.id_mahasiswa LEFT JOIN pembina p ON mb.id_pembina = p.id_pembina WHERE mb.id_pembina = $idPembina ORDER BY m.nama");
		if (mysql_num_rows($ambildata) > 0) {
			while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
		} else{
			echo "<strong>Belum ada Mahasiswa Binaan</strong>";
		}		
	}	

	function pembinaDetails($idUser){
		$ambildata = mysql_query("SELECT p.*, u.*, COUNT(mb.id_mahasiswa) AS 'jml_binaan' FROM pembina p LEFT JOIN users u ON p.id_user = u.id_user LEFT JOIN m_binaan mb ON p.id_pembina = mb.id_pembina WHERE u.id_user = $idUser GROUP BY p.nama");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}

	function mahasiswaDetails($idUser){
		$ambildata = mysql_query("SELECT m.*, u.*, p.id_pembina, p.nama AS nama_pembina, p.gelar, p.id_user AS uid_pembina , p.j_kelamin AS jk_pembina, p.avatar AS ava_pembina FROM mahasiswa m LEFT JOIN m_binaan mb ON m.id_mahasiswa = mb.id_mahasiswa LEFT JOIN pembina p ON mb.id_pembina = p.id_pembina LEFT JOIN users u ON m.id_user = u.id_user WHERE m.id_user = $idUser");
			$ad = mysql_fetch_assoc($ambildata);
				$data[] = $ad;
				return $data;
	}	

	function namaPembinaById($idPembina){
	    $ambildata = mysql_query("SELECT p.nama AS nama, p.gelar FROM pembina p WHERE p.id_pembina = $idPembina");
	      $ad = mysql_fetch_assoc($ambildata);
	      	$data[] = $ad;
	        return $data;
	}

	function idUserByIdPembina($idPembina){
	    $ambildata = mysql_query("SELECT p.id_user FROM pembina p WHERE p.id_pembina = $idPembina");
	      $data = mysql_fetch_assoc($ambildata);
	        return $data;		
	}

	function hapusPembina($idPembina, $idUser){
		mysql_query("DELETE FROM pembina WHERE id_pembina = $idPembina");
		mysql_query("DELETE FROM users WHERE id_user = $idUser");
	}

	function hapusMahasiswa($idMahasiswa, $idUser){
		mysql_query("DELETE FROM mahasiswa WHERE id_mahasiswa = $idMahasiswa");
		mysql_query("DELETE FROM users WHERE id_user = $idUser");
	}	

	function hapusMhsBinaan($idMahasiswa){
		mysql_query("DELETE FROM m_binaan WHERE id_mahasiswa = $idMahasiswa");
		mysql_query("UPDATE mahasiswa SET j_kelamin = NULL WHERE id_mahasiswa = $idMahasiswa");
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
		$ambildata = mysql_query("SELECT COUNT(mb.id_mahasiswa) AS 'jml_binaan' FROM pembina p LEFT JOIN m_binaan mb ON p.id_pembina = mb.id_pembina WHERE p.id_pembina = $idPembina");
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
		$koneksi_mdb = odbc_connect( 'attBackup', "", "");
		
		$sql = "SELECT USERID,Badgenumber,Name FROM USERINFO WHERE Badgenumber LIKE '$angkatan%' AND Name NOT LIKE '$angkatan%'";
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

				$name = mysql_real_escape_string($row_mdb['Name']);

				$mysql_insert_mhs = "INSERT INTO mahasiswa (id_mahasiswa, nim, nama, id_user) VALUES ('".$row_mdb['USERID']."', '".$row_mdb['Badgenumber']."', '".$name."', '$id_user')";
				mysql_query($mysql_insert_mhs);
				//echo $row_mdb['Name']." Berhasil diinput <br>";
			//}
		}
	}

	function importShalat($angkatan, $from, $to){
		$koneksi_mdb = odbc_connect( 'attBackup', "", "");
		
		$sql = "SELECT userid AS id_mahasiswa, Format(tanggal, 'yyyy-mm-dd') AS tgl, Format(TimeValue(Min(t.CHECKTIME))) As wkt_tapping, session AS wkt_shalat FROM (SELECT session_from, session_to, date_from, date_to, session FROM ((timesetup i LEFT JOIN dateperiod d ON i.period_id = d.period_id) LEFT JOIN sessionrange q ON i.sessionrange_id = q.sessionrange_id)) As s INNER JOIN (SELECT Format(DateValue(CHECKTIME)) As tanggal, Format(TimeValue(CHECKTIME)) As tapping, u.userid, u.Badgenumber, CHECKTIME FROM CHECKINOUT c LEFT JOIN USERINFO u ON c.userid = u.userid WHERE (Format(DateValue(c.CHECKTIME), 'yyyy-mm-dd')  BETWEEN '$from' AND '$to') AND (u.Badgenumber LIKE '$angkatan%')) t ON ((t.tanggal BETWEEN s.date_from AND s.date_to) AND (t.tapping BETWEEN s.session_from AND s.session_to)) GROUP BY userid, tanggal, session, u.Badgenumber ORDER BY userid, tanggal, Format(TimeValue(Min(t.CHECKTIME)))";

		$result = odbc_exec($koneksi_mdb, $sql);		

		while($row_mdb = odbc_fetch_array($result)){

			$wktNew = date('h:i:s', strtotime($row_mdb['wkt_tapping']));
			$tglNew = date('Y-m-d', strtotime($row_mdb['tgl']));	

			//if(strpos($row_mdb['Name'], $row_mdb['Badgenumber']) === FALSE){
			$mysql_insert_presensi = "INSERT INTO shalat(id_mahasiswa, tanggal, wkt_tapping, wkt_shalat) VALUES ('".$row_mdb['id_mahasiswa']."', '$tglNew', '$wktNew','".$row_mdb['wkt_shalat']."')";

			mysql_query($mysql_insert_presensi);

			//mysql_query("INSERT INTO shalat (id_mahasiswa, tanggal, wkt_tapping, wkt_shalat) VALUES ('$angkatan', '$to', '$from');");
		}
	}

	function importShalatTest($angkatan, $from, $to){
		mysql_query("INSERT INTO tesshalat (angkatan, dari_tgl, sampai_tgl) VALUES ('$angkatan', '$from', '$to');");
	}

	function AllMahasiswaMDB(){
		$koneksi_mdb = odbc_connect( 'attBackup', "", "");
		
		$sql = "SELECT userid, Badgenumber, Name FROM USERINFO WHERE Badgenumber LIKE '17%' ORDER BY Badgenumber";

		$result = odbc_exec($koneksi_mdb, $sql);		

		while ($ad = odbc_fetch_array($result)) // Perulangan while ini JANGAN pake {}
				$data[] = $ad;
				return $data;
	}

 ?>