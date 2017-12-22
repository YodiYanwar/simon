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
                    if ($_GET['page'] == 'pembina'|| $_GET['page'] == 'pembinadetails' || $_GET['page'] == 'editpembina'|| $_GET['page'] == 'mahasiswa' || $_GET['page'] == 'mahasiswadetails' || $_GET['page'] == 'editmahasiswa') {
                      echo ' active';
                    } else{
                      echo '';
                    }
                  }
             ?>"
        >
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Manajemen Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php 
                  if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'mahasiswa'|| $_GET['page'] == 'mahasiswadetails' || $_GET['page'] == 'editmahasiswa') {
                      echo "class='active'";
                    }
                  }
                ?>
            ><a href="?page=mahasiswa"><i class="fa fa-users"></i> Mahasiswa</a></li>
            <li <?php 
                  if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'pembina'|| $_GET['page'] == 'pembinadetails' || $_GET['page'] == 'editpembina') {
                      echo "class='active'";
                    }
                  }
                ?>
             ><a href="?page=pembina"><i class="fa fa-user"></i> Pembina Mahasiswa</a></li>
          </ul>
          </li>
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
  			} else if ($_GET['page'] == 'pembinadetails') {
          include 'detailpembina.php';
        } else if ($_GET['page'] == 'editpembina') {
          include 'edit_pembina.php';
        } else if ($_GET['page'] == 'profil') {
          include 'profil.php';
        } else if ($_GET['page'] == 'editprofil') {
          include 'edit_profil.php';
        } else if ($_GET['page'] == 'mahasiswadetails') {
          include 'detailmahasiswa.php';
        } else if ($_GET['page'] == 'editmahasiswa') {
          include 'edit_mahasiswa.php';
        }
  		} else{
  			include 'dashboard.php';
  		}

  	?>
  </div>
  <!-- /.content-wrapper -->  