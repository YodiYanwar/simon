  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li <?php 
              if ($_SERVER['REQUEST_URI'] == '/simon/') {
                 echo "class='active'";
              }
            ?>
        ><a href="/simon"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview <?php 
              if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'mahasiswabinaan') {
                      echo ' active';
                    } else{
                      echo '';
                    }
                  }
             ?>"
        >
          <a href="#">
            <i class="fa fa-fire"></i>
            <span>Pembinaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php 
                  if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'mahasiswabinaan') {
                      echo "class='active'";
                    }
                  }
                ?>
             ><a href="?page=mahasiswabinaan"><i class="fa fa-users"></i> Mahasiswa Binaan</a></li>
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
  			} else
        if($_GET['page'] == 'profil'){
          include 'profil.php';
        } else if ($_GET['page'] == 'editprofil') {
          include 'edit_profil.php';
        } else if ($_GET['page'] == 'mahasiswabinaan') {
          include 'mahasiswa_binaan.php';
        }
  		} else{
  			include 'dashboard.php';
  		}

  	?>
  </div>
  <!-- /.content-wrapper -->  