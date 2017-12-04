  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li <?php 
              if ($_SERVER['REQUEST_URI'] == '/simon/' || $_SERVER['REQUEST_URI'] == '/simon/index.php') {
                 echo "class='active'";
              }
            ?>
        ><a href="/simon"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="?page=user"><i class="fa fa-user"></i> <span>Managemen Pengguna</span></a></li>
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
        if ($_GET['page'] == 'users') {
          include 'users.php';
        }
      } else{
        include 'dashboard.php';
      }

    ?>
  </div>
  <!-- /.content-wrapper --> 