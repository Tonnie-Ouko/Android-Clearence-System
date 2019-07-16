<?php 

	require'config.php';
	include('session.php');  
	?>
 
<?php 
	$regno="";
	$name="";
	$Status="";
	$Comment="";
	
if(isset($_POST['update'])) { 
	
	$regno = $_POST['regno'];
	$name = $_POST['name'];
	$Status = $_POST['Status'];
	
    $sql = "INSERT INTO bookstudentfi (regno, name, Status) 
					  VALUES('$regno','$name','$Status')";
	
	if(mysqli_query($conn,$sql)){?>
	
		<script>alert("Student Cleared successfully");window.location='Finance.php'</script>
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
    <title>Admin Clearence | Finance</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript"  charset="UTF-8"></script>
  </head>

  <body class="skin-blue fixed">
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
              <a href=" home.php ">
                 <span>Dashboard</span> <i class=" pull-right"></i>
              </a> 
            </li> 
			<li class="treeview" >
              <a href=" Students.php " >
                 <span>Students</span>  
              </a>
            </li> 
            <li class="active treeview">
              <a href="#"> 
                <span>Departments</span>
              </a>
              <ul class="treeview-menu">
                <li><a href=" Finance.php ">  Finance</a></li>
                <li><a href=" Sports.php ">  Sports</a></li>
				<li><a href=" Security.php ">  Security</a></li>
                <li><a href=" Library.php">  Library</a></li>
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
           <br> 
        </section>  
		
		<section class="content">
          <div class="row">
            <div class="col-xs-4"> 
				<div class="box"> 
					<div class="box-header with-border">
						<h3 class="box-title">Clear Student</h3>  
					</div>
				<div class="box-body">
                <div class='box-body pad'>
        	<div class="form-group">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              

            <div class="form-group">
                <label>Regno:</label>
                <input type="text" name="regno"class="form-control"  value="<?php echo $regno;?>"> 
            </div>
			<div class="form-group">
                <label>Name:</label>
                <input type="text" name="name"class="form-control"  value="<?php echo $name;?>"> 
            </div>

            <div class="form-group">
                <label>Status:</label>
               <input type="text" name="Status"class="form-control"  value="<?php echo $Status;?>">
             </div>
			 
			
          	<div class="modal-footer form-group">
						<div class="row">
							<input type="submit" name="update" class="btn btn-primary pull-left" value="Approve">
							<div class="form-group" style="margin-top:-5px;"><a href="Finance.php" class="btn btn-primary" name="Cancel" type="Cancel"
								id="Cancel">Cancel</a> 
							</div> 
						</div>
					</div>
             <?php
          ?> 
			</form>
		</div>
              </div>
            </div> 
          </div> 
        </section> 
      </div> 
      <footer class="main-footer">
        <strong>Copyright &copy; 2018 oukotonnie@gmail.com.</strong> All rights reserved.
      </footer>
    </div> 


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

  </body>
</html>