  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/simon/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Manajemen Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=mahasiswa"><i class="fa fa-users"></i> Mahasiswa</a></li>
            <li><a href="?page=pembina"><i class="fa fa-user"></i> Pembina Mahasiswa</a></li>
          </ul>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>	  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php  
  		if (isset($_GET['page'])) {
  			if ($_GET['page'] == 'mahasiswa') {
  				include 'mahasiswa.php';
  			} else if ($_GET['page'] == 'pembina') {
  				include 'pembina.php';
  			}
  		} else{
  			include 'dashboard.php';
  		}

  	?>
  </div>
  <!-- /.content-wrapper -->  