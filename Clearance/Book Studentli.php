<?php 
	require'config.php';
	include('session.php');
?>

<?php 
$regno="";
$name="";
$phone=""; 
$Comment=""; 
if(isset($_POST['submit'])) {
	//$id = $_POST['id'];
	$regno = $_POST['regno'];
	$name = $_POST['name'];
	$phone = $_POST['phone']; 
	$Comment = $_POST['Comment'];
	
    $sql = "INSERT INTO bookstudentli (regno, name, phone, Comment) 
					  VALUES('$regno', '$name', '$phone','$Comment')";
					  
 
	//die($sql);
	//mysql_select_db('clearence');
	if(mysqli_query($conn,$sql)) {?>
	
		<script>alert("Student has been UnCleared successfully");</script>
		<?php
		
	}
	else{
		 echo 'Operation Fail';
	}
	mysqli_close($conn);
	}
	//die("");
?>	

 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Clearence | Library</title>
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
  <body class="skin-blue">
    <div class="wrapper"> 
      <header class="main-header"> 
        <a   class="logo"><b>Welcome  <?php echo $login_session;?></b> </a> 
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
              <a href=" home.php"> <span>Dashboard</span> 
              </a> 
            </li> 
			<li class="treeview" >
              <a href=" Students.php " > <span>Students</span>  
              </a>
            </li> 
            <li class="active treeview">
              <a href="#"> 
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
		 
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Unclear Student</h3> 
                </div> 
                <div class="wrapper1"> 
				<div class="header" align="center">
					<h2>Unclear Student</h2>
				</div></br>
				
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
            
			<div class="form-group  has-feedback <?php echo (!empty($regno_err)) ? 'has-error' : ''; ?>">
                <label>Regno:</label>
                <input type="var_char" name="regno"class="form-control"  value="<?php echo $regno;?>"> 
            </div> 
             <div class="form-group  has-feedback">
                <label>Name:</label>
                <input type="var_char" name="name"class="form-control"  value="<?php echo $name;?>"> 
            </div>
			<div class="form-group  has-feedback <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone:</label>
               <input type="int" name="phone"class="form-control"  value="<?php echo $phone;?>" > 
            </div> 
			<div class="form-group  has-feedback <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Comment:</label>
               <input type="text" name="Comment"class="form-control"  value="<?php echo $Comment;?>" > 
            </div> 
			
          	<div class="modal-footer form-group">
						<div class="row">
                            <input class="btn btn-primary pull-left" name="submit" type="submit"
									id="submit" value="Unlear Student">
							<input type="reset" class="btn btn-default pull-right" value="Reset">		
						</div>
			</div>
			
			</form>
                </div> 
				<div class="box-footer clearfix">  
				<div class="row">

					<div class="form-group"><a href="bookedli.php" class="btn btn-primary large pull-right" name="cancel" type="cancel"
								id="cancel">Cancel</a> 
					</div> 
                </div> 
                </div> 
              </div>    
		</div> 
      <footer class="main-footer" align="center"> 
        <strong>Copyright &copy; 2018 oukotonnie .</strong> All rights reserved.
      </footer>  
     
  </div> 
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
</html>