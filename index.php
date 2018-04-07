<?php

   session_start();
  
  if(!isset($_SESSION['role'])){
    echo '<script language="javascript">document.location="/simon/login.php";</script>';
  }

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Monitoring</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!--Material Datetime -->
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css"/> -->
  <link rel="stylesheet" href="assets/css/bootstrap-material-datetimepicker.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/css/_all-skins.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/css/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css">  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/css/iCheck/all.css">  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/css/bootstrap3-wysihtml5.min.css">
  <!-- Own Style -->
  <link rel="stylesheet" href="assets/css/style.css">  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" />    

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>G</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="assets/img/icon30.png">&nbsp;<b>Graph</b>Matrik</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src=<?php echo "assets/img/user/".$_SESSION['ava']; ?> class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src=<?php echo "assets/img/user/".$_SESSION['ava']; ?> class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION['nama']; ?>
                    <small><?php echo $_SESSION['rolename']; ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
<!--                 <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div> -->
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="index.php?page=profil" class="btn btn-primary btn-flat"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#ModalLogout" class="btn btn-danger btn-flat" data-toggle='modal'><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>   

    <?php  
      if ($_SESSION['role'] =='administrator') {
        include 'role/admin/sidebar.php';
      } else
      if($_SESSION['role'] =='adminmatrik'){
        include 'role/adminmatrik/sidebar.php';
      } else
      if($_SESSION['role'] =='pembina'){
        include 'role/pembina/sidebar.php';
      } else
      if($_SESSION['role'] =='mahasiswa'){
        include 'role/mahasiswa/sidebar.php';
      }
    ?> 

  </div>  
        <!-- Modal Logout -->
        <div class="modal fade" id="ModalLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-power-off fa-lg"></i>&nbsp;&nbsp;Anda yakin akan keluar ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a href="logout.php" class="btn btn-danger" name="resetPass"><i class="fa fa-power-off"></i>&nbsp;Logout</a>  
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Logout -->   
 
  <!-- jQuery 3 -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>  
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/js/bootstrap.min.js"></script> 

  <script src="assets/js/moment-with-locales.min.js"></script>
  <!-- DataTables -->
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap.min.js"></script>  
  <script src="assets/js/bootstrap-material-datetimepicker.js"></script>
<!-- Morris.js charts -->
<!-- <script src="assets/js/raphael.min.js"></script>
<script src="assets/js/morris.min.js"></script> -->
  
  <!-- Sparkline -->
  <script src="assets/js/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="assets/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/js/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="assets/js/bootstrap-timepicker.min.js"></script>  
  <!-- Bootstrap WYSIHTML5 -->
  <script src="assets/js/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="assets/js/icheck.min.js"></script>  
  <!-- FastClick -->
  <script src="assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="assets/js/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="assets/js/demo.js"></script> 
  
  <script type="text/javascript">
    //Modal Hapus Data Pembina
    $(document).ready(function() {
        $('#ModalHapusPembina').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

    //Modal Hapus Data Mahasiswa
    $(document).ready(function() {
        $('#ModalHapusMahasiswa').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });     

    //Modal Hapus Data Mahasiswa Binaan By Pembina
    $(document).ready(function() {
        $('#ModalHapusBinaan').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });    
  </script>  

<script type="text/javascript">
      /*$(document).ready(function() {
        //Date picker
        $('#datepicker').datepicker({
          format: "yyyy-mm-dd",
          autoclose: true,
          todayHighlight: true
        });
      });

  $('#datetimepicker1').datetimepicker({
      format: 'HH:mm:ss',
      defaultDate: moment('11:12:02', 'HH:mm:ss'),
      minDate: moment('11:12:02', 'HH:mm:ss'),
      maxDate: moment('11:30:20', 'HH:mm:ss'),
      keepInvalid: true
  }); */     

</script> 

<script type="text/javascript">
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass   : 'iradio_flat-green'
    })  
</script>

<!-- Daterange picker import data presensi shalat mahasiswa -->
<script type="text/javascript">
var startDate;
var endDate;

$(document).ready(function() {
    $('#reportrange').daterangepicker(
       {
          startDate: moment().subtract('days', 6),
          endDate: moment(),
          //minDate: '01/01/2012',
          //maxDate: '12/31/2014',
          dateLimit: { days: 60 },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
             'Hari ini': [moment(), moment()],
             'Kemarin': [moment().subtract('days', 1), moment().subtract('days', 1)],
             '7 Hari Terakhir': [moment().subtract('days', 6), moment()],
             '30 Hari Terakhir': [moment().subtract('days', 29), moment()],
             'Bulan Ini': [moment().startOf('month'), moment().endOf('month')]
             //'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY',
          separator: ' to ',
          locale: {
              applyLabel: 'Submit',
              fromLabel: 'Dari',
              toLabel: 'Sampai',
              customRangeLabel: 'Custom Range',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
          }
       },
       function(start, end) {
        console.log("Callback has been called!");
        $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
        startDate = start;
         endDate = end;    

       }
    );
    //Set the initial state of the picker label
    $('#reportrange span').html(moment().subtract('days', 29).format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));

    $('#saveBtn').click(function(){
        console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));
    });

 });
</script>  

<!-- page script -->
<script>
  $(document).ready(function() {
    $('#tablePembina').DataTable({
      "columnDefs": [
        { 
          "width": "5%", 
          "targets": 0,
          "orderable": false
        }
      ]      
    })
  });
</script>

<script>
  $(document).ready(function() {
    $('#tableUsers').DataTable()
  });
</script>

<script type="text/javascript">
$(document).ready(function()
    {
      $('#shubuh_dari').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $('#shubuh_sampai').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });


      $('#dzuhur_dari').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $('#dzuhur_sampai').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });


      $('#ashar_dari').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $('#ashar_sampai').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });


      $('#maghrib_dari').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $('#maghrib_sampai').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });


      $('#isya_dari').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $('#isya_sampai').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        clearButton: true
      });

      $.material.init()
    });
</script>

<script>
  $(document).ready(function() {
    $('#tableDaftarBinaan').DataTable()
  });
</script>

<!-- Fungsi Validasi Password Confirm -->
<script type="text/javascript">
var pwinput2 = document.getElementById("pwinput2")
  , pwinput3 = document.getElementById("pwinput3");

function validatePassword(){
  if(pwinput2.value != pwinput3.value) {
    pwinput3.setCustomValidity("Password Tidak Sama !");
  } else {
    pwinput3.setCustomValidity('');
  }
}

pwinput2.onchange = validatePassword;
pwinput3.onkeyup = validatePassword;
</script>

<!-- Funsi Show & Hide password -->
<script>
/*$(document).ready(function(){

    // $("#pwinput").focus();

    $("#pwcheck").click(function(){
        if ($("#pwcheck").is(":checked"))
        {
            $("#pwinput2").clone()
            .attr("type", "text").insertAfter("#pwinput2")
            .prev().remove();

            $("#pwinput3").clone()
            .attr("type", "text").insertAfter("#pwinput3")
            .prev().remove();
        }
        else
        {
            $("#pwinput2").clone()
            .attr("type","password").insertAfter("#pwinput2")
            .prev().remove();

            $("#pwinput3").clone()
            .attr("type","password").insertAfter("#pwinput3")
            .prev().remove();
        }
    });
});*/
</script>

</body>
</html>