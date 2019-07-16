<?php 
 require'config.php'; 
 include('session.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Clearence| Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> 
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" /> 
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> 
	
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header"> 
		<a   class="logo"><b>Welcome <?php echo $login_session; ?> </b> </a> 
        <nav class="navbar navbar-static-top" role="navigation"> 
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu"style="text-align:center; margin-top:10px; width:150px;">
                <a href="logout.php" class="btn btn-default pull-right"> 
                  <span class="hidden-xs">Logout <?php echo $login_session; ?></span>
                </a> 
          </div>
        </nav>
      </header> 
      <aside class="main-sidebar"> 
        <section class="sidebar"> 
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href=" home.php"> 
				<span>Dashboard</span> 
              </a> 
            </li> 
			<li>
              <a href=" Students.php"> 
				<span>Students</span> 
              </a>
            </li> 
            <li class="treeview">
              <a href="#"> 
                <span>Departments</span>
              </a>
              <ul class="treeview-menu">
                <li><a href=" Finance.php"> Finance</a></li>
                <li><a href=" Sports.php"> Sports</a></li>
				<li><a href=" Security.php"> Security</a></li>
                <li><a href=" Library.php"> Library</a></li>
                <li><a href=" Halls.php"> Halls</a></li> 
                <li><a href=" Faculty.php"> Faculty</a></li> 
              </ul>
            </li> 
            <li class="treeview">
              <a href="Settings.php"> 
                <span>Settings</span>
                 
              </a> 
            </li> 
        </section> 
      </aside>

      
      <div class="content-wrapper"> 
        <section class="content-header">
          <h1 align="center">
            Admin
            <small>Clearence</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        
        <section class="content" > 
          <div class="row">
             
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-purple">
                <div class="inner">
                  <?php
           $result = mysqli_query($conn,"SELECT * FROM finance");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Finance</p>
                </div> 
                <a href="Finance.php " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-orange">
                <div class="inner">
                       <?php
           $result = mysqli_query($conn,"SELECT * FROM sports");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Sports</p>
                </div> 
                <a href="Sports.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-maroon">
                <div class="inner">
                            <?php
           $result = mysqli_query($conn,"SELECT * FROM security");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Security</p>
                </div> 
                <a href="Security.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
          </div> 
		  
		     <div class="row">
             
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-red">
                <div class="inner">
                            <?php
           $result = mysqli_query($conn,"SELECT * FROM library");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Library</p>
                </div> 
                <a href="Library.php " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-gray">
                <div class="inner">
                            <?php
           $result = mysqli_query($conn,"SELECT * FROM halls");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Halls</p>
                </div> 
                <a href="Halls.php " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-green">
                <div class="inner">
                            <?php
           $result = mysqli_query($conn,"SELECT * FROM faculty");
           $num_rows = mysqli_num_rows($result);
           ?>
                  <h3><?php echo $num_rows; ?></h3>
                  <p>Faculty</p>
                </div> 
                <a href="FacultyRequest.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> 
          </div> 
		  
           
          <div class="row"> 
            </section> 
          </div> 

        </section> 
      </div><!-- /.content-wrapper --> 
    </div><!-- ./wrapper --> 
	
	 <footer class="main-footer" align="center"> 
        <strong>Copyright &copy; 2018 oukotonnie.</strong> All rights reserved.
     </footer>
	  
	  
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 --> 
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts --> 
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>