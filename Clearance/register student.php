<?php 
	require'config.php';
	include('session.php');
?>
<?php 
	$firstname="";
	$lastname="";
	$regno="";
	$email=""; 
	$faculty="";
	$course="";
	$phone=""; 
	
	
if(isset($_POST['submit'])) { 
	//$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname']; 
	$regno = $_POST['regno'];
	$email = $_POST['email']; 
	$faculty = $_POST['faculty'];
	$course = $_POST['course'];
	$phone = $_POST['phone'];
	
    $sql = "INSERT INTO users1 (firstname, lastname,regno,email,faculty,course,phone) 
					  VALUES('$firstname','$lastname','$regno','$email','$faculty','$course','$phone')";
					  
	//$sql = "INSERT INTO users WHERE id='$id'";
	//die($sql);
	//mysql_select_db('clearence');
	if(mysqli_query($conn,$sql)){?>
	
		<script>alert("Student Registered successfully");window.location='Students.php'</script>
		<?php
		
	}
	else{
		 echo 'Operation Fail';
	}
	mysqli_close($conn);
	}
	//die("");
?>	


<html>
<head>
	<title>  
	Admin Clearence | Register student 
	</title>
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
	
	<style type="text/css">
        
    </style>
	
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
            <li class="treeview">
              <a href=" home.php">
                 <span>Dashboard</span> 
              </a> 
            </li> 
			<li class="active treeview" >
              <a href=" Students.php " >
                 <span>Students</span>  
              </a>
            </li> 
            <li class="treeview">
              <a href="#"> 
                <span>Departments</span>
              </a>
              <ul class="treeview-menu">
                <li><a href=" Finance.php "> Finance</a></li>
                <li><a href=" Sports.php "> Sports</a></li>
				<li><a href=" Security.php"> Security</a></li>
                <li><a href=" Library.php "> Library</a></li>
                <li><a href=" Halls.php"> Halls</a></li> 
                <li><a href=" Faculty.php"> Faculty</a></li> 
              </ul>
            </li> 
            <li class="treeview">
              <a href="Settings.php"> 
                <span>Settings</span> 
              </a> 
            </li>
			</ul>
        </section> 
      </aside>
	  
      <div class="content-wrapper"> 
        <section class="content-header">
          <h1 align="center">
            Admin
            <small>Clearence</small>
          </h1>
          <br> 
        </section>
		
 
             <section class="content">
          <div class="row">
            <div class="col-xs-4"> 
				<div class="box"> 
                <div class="box-header with-border">
                  <h3 class="box-title">Register Student</h3> 
                </div> 
                <div class="wrapper1"> 
				<div class="header" align="center">
					<h2>Register Student</h2>
				</div></br>
				<div class="box-body">
                <div class='box-body pad'>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
						<div class="input-group">
							<label>First Name;</label></br>
							<input type="var_char" name="firstname" value="<?php echo $firstname; ?>">
						</div> </br>
						<div class="input-group">
							<label>Last Name;</label></br>
							<input type="var_char" name="lastname" value="<?php echo $lastname; ?>">
						</div></br> 
						<div class="input-group">
							<label>Regno;</label></br>
							<input type="var_char" name="regno" value="<?php echo $regno; ?>">
						</div></br>
						<div class="input-group">
							<label>Email;</label></br>
							<input type="var_char" name="email" value="<?php echo $email; ?>">
						</div> </br>
						<div class="input-group">
							<label>Faculty;</label></br>
							<input type="var_char" name="faculty" value="<?php echo $faculty; ?>">
						</div></br> 
						<div class="input-group">
							<label>Course;</label></br>
							<input type="var_char" name="course" value="<?php echo $course; ?>">
						</div></br> 
						<div class="input-group">
							<label>Phone No;</label></br>
							<input type="int" name="phone" value="<?php echo $phone; ?>">
						</div></br>
						<div class="input-group"> 
								<input class="btn btn-primary pull-left" name="submit" type="submit"
									id="submit" value="Register Student">
								<input type="reset" class="btn btn-default pull-right" value="Reset">	
						</div></br> 
				</form>
				</div> 
				<div class="box-footer clearfix">
						<div class="row">
						<div class="form-group"><a href="Students.php" class="btn btn-primary large pull-right" name="exit" type="exit"
								id="exit">Exit</a> 
						</div> 
						</div>
					</div> 
				 </div>
				</div>	
              </div>
    </div>
	 </div> 
          </div> 
        </section> 
	</div> 
      <footer class="main-footer" align="center"> 
        <strong>Copyright &copy; 2018 oukotonnie .</strong> All rights reserved.
      </footer> 
  </body>  
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script> 
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script> 
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script> 
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script> 
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script> 
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script> 
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script> 
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script> 
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script> 
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script> 
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src='plugins/fastclick/fastclick.min.js'></script> 
    <script src="dist/js/app.min.js" type="text/javascript"></script> 
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script> 
    <script src="dist/js/demo.js" type="text/javascript"></script>
	<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('editor1');
        $(".textarea").wysihtml5();
      });
    </script>
</html>