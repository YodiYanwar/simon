<?php

include('koneksi.php');

  if(isset($_SESSION['role'])){
    echo '<script language="javascript">document.location="/simon/index.php";</script>';
  }

if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(($_POST['password'])));

	$sql = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'") or die(mysql_error());

	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">document.location="login.php?alert=error";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
    $id = $row['id_user'];
    $_SESSION['id_user'] = $id;

    mysql_query("UPDATE users SET last_login = NOW() WHERE id_user = $id");

		if($row['level'] == 0){
        $sql_profil = mysql_query("SELECT * FROM administrator WHERE id_user=$id") or die(mysql_error());

        while($admin = mysql_fetch_assoc($sql_profil)){
          $ava = $admin['avatar'];
          $id_admin = $admin['id_admin'];
          $nama = $admin['nama'];
          $email = $admin['email'];
          $telp = $admin['telp'];
          $gender = $admin['j_kelamin'];
          
          echo '<script language="javascript">document.location="index.php";</script>';
        }

        if ($ava == NULL) {
          if ($gender == 'Perempuan'){
            $_SESSION['ava'] ='default-female.jpg';
          } else
          if ($gender == 'Laki-laki'){
            $_SESSION['ava'] ='default-male.png';
          }
        } else{
          $_SESSION['ava'] = $ava;
        } 
        
        $_SESSION['id_admin'] = $id_admin;
        $_SESSION['role'] = 'administrator';
        $_SESSION['nama'] = $nama;        
        $_SESSION['rolename'] = 'Admininstrator';
        $_SESSION['username'] = $user;
        
		}else if($row['level'] == 2){
      	$sql_profil = mysql_query("SELECT * FROM adminmatrik WHERE id_user=$id") or die(mysql_error());

	      while($adminmatrik = mysql_fetch_assoc($sql_profil)){
          $ava = $adminmatrik['avatar'];
	      	$id_AM = $adminmatrik['id_adminmatrik'];
	        $nama = $adminmatrik['nama'];
	        $email = $adminmatrik['email'];
	        $telp = $adminmatrik['telp'];
          $gender = $adminmatrik['j_kelamin'];
	        
	        echo '<script language="javascript">document.location="index.php";</script>';
	      }

        if ($ava == NULL) {
          if ($gender == 'Perempuan'){
            $_SESSION['ava'] ='default-female.jpg';
          } else
          if ($gender == 'Laki-laki'){
            $_SESSION['ava'] ='default-male.png';
          }
        } else{
          $_SESSION['ava'] = $ava;
        } 

	      $_SESSION['id_AM'] = $id_AM;
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = 'adminmatrik';
        $_SESSION['rolename'] = 'Admin Matrikulasi';
        $_SESSION['username'] = $user;   
           
		}else if($row['level'] == 3){

      $sql_profil = mysql_query("SELECT * FROM pembina WHERE id_user=$id") or die(mysql_error());

        while($pembina = mysql_fetch_assoc($sql_profil)){
          $ava = $pembina['avatar'];
          $id_pembina = $pembina['id_pembina'];
          $nama = $pembina['nama'];
          $email = $pembina['email'];
          $telp = $pembina['telp'];
          $gender = $pembina['j_kelamin'];
          
          echo '<script language="javascript">document.location="index.php";</script>';
        }

        if ($ava == NULL) {
          if ($gender == 'Perempuan'){
            $_SESSION['ava'] ='default-female.jpg';
          } else
          if ($gender == 'Laki-laki'){
            $_SESSION['ava'] ='default-male.png';
          }
        } else{
          $_SESSION['ava'] = $ava;
        } 

        $_SESSION['id_pembina'] = $id_pembina;
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = 'pembina';
        $_SESSION['rolename'] = 'Pembina Mahasiswa';
        $_SESSION['username'] = $user; 

      $_SESSION['role'] = 'pembina';
      //$_SESSION['nama'] = $row['nama'];
      //echo '<script language="javascript">document.location="index.php";</script>';
    } else if($row['level'] == 4){

      $sql_profil = mysql_query("SELECT * FROM mahasiswa WHERE id_user=$id") or die(mysql_error());

        while($mahasiswa = mysql_fetch_assoc($sql_profil)){
          $ava = $mahasiswa['avatar'];
          $id_mahasiswa = $mahasiswa['id_mahasiswa'];
          $nama = $mahasiswa['nama'];
          $email = $mahasiswa['email'];
          $telp = $mahasiswa['telp'];
          $gender = $mahasiswa['j_kelamin'];
          
          echo '<script language="javascript">document.location="index.php";</script>';
        }

        if ($ava == NULL) {
          if ($gender == 'Perempuan'){
            $_SESSION['ava'] ='default-female.jpg';
          } else
          if ($gender == 'Laki-laki'){
            $_SESSION['ava'] ='default-male.png';
          } else{
            $_SESSION['ava'] ='default-male.png';
          }
        } else{
          $_SESSION['ava'] = $ava;
        } 

        $_SESSION['id_mahasiswa'] = $id_mahasiswa;
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = 'pembina';
        $_SESSION['rolename'] = 'Mahasiswa';
        $_SESSION['username'] = $user; 

      $_SESSION['role'] = 'mahasiswa';
      //$_SESSION['nama'] = $row['nama'];
      //echo '<script language="javascript">document.location="index.php";</script>';
    }
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistem Informasi Monitoring Matrikulasi | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
        <!-- Font Awesome Icons -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Theme style -->
        <link href="assets/css/AdminLTE.min.css" rel="stylesheet">  
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" />  
        <!-- iCheck -->
        <link rel="stylesheet" href="assets/css/blue.css">        
        <!-- Ionicons -->
        <link rel="stylesheet" href="assets/css/ionicons.min.css">  
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- Ionicons -->
        <link rel="stylesheet" href="assets/css/simon.css">  


    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <a href="index.php"> <img src="assets/img/icon.png">&nbsp;<b>Graph</b>Matrik</a><br>
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
            <p class="login-box-msg">Sistem Informasi Monitoring<br>Matrikulasi STEI Tazkia</p>

            <form action="login.php" method="POST">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <span class="fa fa-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="fa fa-lock form-control-feedback"></span>
              </div>
              <div class="row"><br>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Login</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <!--
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>
            -->
          </div>
          <!-- /.login-box-body -->
            <?php 
              if (isset($_GET['alert'])) {
                if ($_GET['alert'] == 'error') {
                echo "<div class='alert alert-danger alert-dismissable fade in'>
                        <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Login Gagal !</strong> Username dan atau Password Salah.
                      </div>";
                }
              }
             ?>           
        </div>
        <!-- /.login-box -->       

        <!-- jQuery 3 -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="assets/js/icheck.min.js"></script>              
    </body>
</html>