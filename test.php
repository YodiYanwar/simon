<?php 

include('koneksi.php');

      $sql_profil = mysql_query("SELECT * FROM adminmatrik WHERE id_user=2") or die(mysql_error());

      while($adminmatrik = mysql_fetch_assoc($sql_profil)){
        $nama = $adminmatrik['nama'];
        $email = $adminmatrik['email'];
        $telp = $adminmatrik['telp'];
        

  			//$_SESSION['nama'] = $row['nama'];
  			// echo '<script language="javascript">document.location="index.php";</script>';
      }

      echo $nama."<br>".$email."<br>".$telp;

 ?>