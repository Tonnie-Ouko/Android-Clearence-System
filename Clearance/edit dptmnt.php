<?php require_once 'config.php'; ?>
 
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Clearence | Add a new Student1</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0  
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo"><b>Hello   </b>Admin</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">               
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                  <span class="hidden-xs">User</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header"> 
                    <p>
                       Admin 
                    </p>
                  </li> 
                  <!-- Menu Footer-->
                  <li class="user-footer"> 
                    <div align="center">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar"> 
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href=" home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a> 
            </li> 
			<li class="active treeview" >
              <a href=" Students.php " >
                <i class="fa fa-th"></i> <span>Students</span>  
              </a>
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Departments</span>
              </a>
              <ul class="treeview-menu">
                <li><a href=" Finance.php "><i class="fa fa-circle-o"></i> Finance</a></li>
                <li><a href=" Sports.php "><i class="fa fa-circle-o"></i> Sports</a></li>
				<li><a href=" Security.php"><i class="fa fa-circle-o"></i> Security</a></li>
                <li><a href=" Library.php "><i class="fa fa-circle-o"></i> Library</a></li>
                <li><a href=" Halls.php"><i class="fa fa-circle-o"></i> Halls</a></li> 
                <li><a href=" Faculty.php"><i class="fa fa-circle-o"></i> Faculty</a></li> 
              </ul>
            </li> 
            <li class="treeview">
              <a href="Settings.php">
                <i class="fa fa-pie-chart"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a> 
            </li> 
        </section> 
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 align="center">
            Admin
            <small>Clearence</small>
          </h1>
          <br> 
        </section>

		
		  <!-- TABLE: LATEST ORDERS -->  
        <head> 
    <style type="text/css">
        body{ font: 14px sans-serif;
                	
			   }
        .wrapper1{ width: 350px; padding: 20px; 
        margin: auto;
        border: 1px solid #5F9EA0;
        }
		.form-group{
		margin: 10px 0px 10px 0px;
		 
		}
		.btn{
        padding: 4px;
        font-size: 14px;
        background: #5F9EA0;
        color: white;
        border-radius: 10px;
        border: none;
		margin: 10px;
        }
		.form-control{
height: 8px;
width: 93%;
margin: auto;
padding:  14px;
font-size: 12px;
border-radius: 10px;
border: 1px solid gray;
}
		.help-block{
width: 62%;
margin: 0px auto;
color:  #a94442;
font: 12px sans-serif;
text-align: center;
}
    </style>
</head>
<body>
    <!--<center>-->
    <div  class="wrapper1">
        <h2>Sign Up</h2> 
        <form action="" method="post">
            <div class="form-group ">
                <label>First Name:</label>
                <input type="text" name="First Name"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>

            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="Last Name"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>
			<div class="form-group ">
                <label>Email:</label>
                <input type="text" name="Email"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>
			
			<div class="form-group">
                <label>Reg no:</label>
                <input type="text" name="Reg no"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>
			<div class="form-group">
                <label>Faculty:</label>
                <input type="text" name="faculty"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" value=""><br>
                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" name="confirm_password" class="form-control" value=""><br>
                <span class="help-block"> </span>
            </div>

            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" name="phone"class="form-control" value=" "><br>
                <span class="help-block"> </span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div> 
        </form>
    </div> 
        <!--</center>-->
    <!--<script src="bootstrap"></script>   -->
</body>
</html>
		
   </div><!-- /.box-body -->
                 
  </div><!-- /.box -->
			  
			 <div class="row"> 
            </section><!-- right col -->
          </div><!-- /.row (main row) --> 

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer" align="center"> 
        <strong>Copyright &copy; 2018 oukotonnie .</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper --> 
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
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