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
                    if ($_GET['page'] == 'shalat' || $_GET['page'] == 'tahsin' || $_GET['page'] == 'talim') {
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
	                    if ($_GET['page'] == 'shalat') {
	                      echo "class='active'";
	                    }
	                  }
	                ?>
	            ><a href="?page=shalat"><i class="fa fa-bell"></i>&nbsp;Shalat Wajib</a></li>
	            <li <?php 
	                  if (isset($_GET['page'])) {
	                    if ($_GET['page'] == 'tahsin') {
	                      echo "class='active'";
	                    }
	                  }
	                ?>
	            ><a href="?page=tahsin"><i class="fa fa-leanpub"></i>&nbsp;Tahsin/Tahfidz</a></li>
	            <li <?php 
	                  if (isset($_GET['page'])) {
	                    if ($_GET['page'] == 'talim') {
	                      echo "class='active'";
	                    }
	                  }
	                ?>
	            ><a href="?page=talim"><i class="fa fa-puzzle-piece"></i>&nbsp;Ta'lim</a></li>
	          </ul>
          </li>
        <li class="treeview <?php 
              if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'pembina'|| $_GET['page'] == 'pembinadetails' || $_GET['page'] == 'editpembina'|| $_GET['page'] == 'mahasiswa' || $_GET['page'] == 'mahasiswadetails' || $_GET['page'] == 'editmahasiswa' || $_GET['page'] == 'tambahbinaan') {
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
                    if ($_GET['page'] == 'pembina'|| $_GET['page'] == 'pembinadetails' || $_GET['page'] == 'editpembina' || $_GET['page'] == 'tambahbinaan') {
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
        } else if ($_GET['page'] == 'bypembina') {
          include 'bypembina.php';
        } else if ($_GET['page'] == 'bypembinadetail') {
          include 'bypembinadetail.php';
        } else if ($_GET['page'] == 'tambahbinaan') {
          include 'tambahbinaan.php';
        } else if ($_GET['page'] == 'shalat') {
          include 'shalat.php';
        }
  		} else{
  			include 'dashboard.php';
  		}

  	?>
  </div>
  <!-- /.content-wrapper -->  