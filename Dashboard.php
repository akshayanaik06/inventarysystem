<?php session_start();
  include_once('includes/header.php'); 
      
      if(isset($_SESSION['adminname'])){?>
 <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Inventary System</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu" >
            <ul class="nav navbar-nav">
             <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu" id="popup2">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                  <i class="fa fa-bell-o"></i>
                 
                  <span class="label label-warning" id="message2"></span>
                </a>
                
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
             
              <!-- User Account: style can be found in dropdown.less -->
               <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <img src="assets/images/no-image.jpg" class="user-image" alt="User Image"> -->
                           <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                            <span class="hidden-xs"><?php echo $_SESSION['adminname'];?></span>
                            <input type="hidden" name="user" id="user" value="ADMIN">
                        </a>
                        <ul class="dropdown-menu">
                        <!-- User image -->
                            <li class="user-header">
                                 <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                            
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    
                                     <a class="btn btn-default btn-flat" href="logout.php?res=logout">Logout</a>
                                </div>
                            </li>
                        </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            <!--   <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a> 
            </div>
            <!-- <div class="pull-left info">
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div> -->
          </div>
         <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?php //echo site_url('Master_Dashboard/home');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
             
            </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manufacturer</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" class="add_manufacture"><i class="fa fa-object-group"></i> Add/Show Manufacturer</a></li>
              </ul>
            </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Cars</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" class="add_cars"><i class="fa fa-check"></i> Add cars</a></li>
                <li><a href="#" class="show_cars"><i class="fa fa-check"></i>View Cars</a></li>
              </ul>
            </li>
          </ul> 
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="wrappercal">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
             <h3>Welcome To Master Dashboard</h3>
            </div><!-- ./col -->
         </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
          
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


             
             
               

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php include_once('includes/footer.php'); 
}
else
{
  header('location:admin_login.php');
}
?>
