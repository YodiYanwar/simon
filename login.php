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
		echo 'User tidak ditemukan';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 0){
			
			$_SESSION['role'] = 'admin';
			$_SESSION['username'] = $user;
			//$_SESSION['nama'] = $row['nama'];
			echo '<script language="javascript">document.location="index.php";</script>';
		}else if($row['level'] == 2){

			$_SESSION['role'] = 'adminmatrik';
			$_SESSION['username'] = $user;
			//$_SESSION['nama'] = $row['nama'];
			echo '<script language="javascript">document.location="index.php";</script>';
		}else if($row['level'] == 3){

      $_SESSION['role'] = 'pembina';
      $_SESSION['username'] = $user;
      //$_SESSION['nama'] = $row['nama'];
      echo '<script language="javascript">document.location="index.php";</script>';
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