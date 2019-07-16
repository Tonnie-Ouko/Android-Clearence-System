<?php 

	require'config.php';
	include('session.php');  
	?>
 
<?php
$firstname=$lastname=$phone=$regno=$email=$faculty=$course=$feebalance="";
$firstname_err=$lastname_err=$phone_err=$regno_err=$email_err=$faculty_err=$course_err=$feebalance_err="";

if (isset($_POST['update'])){

     
	  //validate day
     if(empty(trim($_POST['feebalance']))){
        $feebalance_err= "Please enter the phone no.";
    }
   
     else{
            $feebalance= trim($_POST['feebalance']);
                }

    //validate venue
     
                 //validate time
       
// Check input errors before inserting in database// if there are errors, data will not be submitted to the database.
 
      
 // Prepare an update statement
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $id=$_POST['id']; 
 
       $sql="UPDATE users SET feebalance ='$feebalance' WHERE id='$id'";
if(mysqli_query($conn,$sql)){
//die($sql);
          ?>
<script> alert("Fee Balance Cleared."); window.location='Finance.php'</script>
	<?php

	}else{
?>
<script> alert("No field edited!"); window.location='Finance.php'</script>
<?php
	}

}	
//die("");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Clearence | Students</title>
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
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav"> 
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                  <span class="hidden-xs">Hello <?php echo $login_session; ?></span>
                </a>
                <ul class="dropdown-menu"> 
                  <li class="user-header"> 
                    <p>
                       Admin 
                    </p>
                  </li> 
                  <li class="user-footer"> 
                    <div align="center">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
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
						<h3 class="box-title">Clear Balance</h3>  
					</div>
				<div class="box-body">
                <div class='box-body pad'>
        	<div class="form-group">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <?php 
        include "config.php"; 
        
		$id=$_POST['id'];
		
        $sql="SELECT * FROM users WHERE id='$id'";
		
		$query=mysqli_query($conn,$sql);

        $data=array();
        while($row=mysqli_fetch_assoc($query)){
          
          array_push($data,$row);
        }
        foreach($data as $key=>$value){
        ?>
       
          <div class="Id">
							<input value = "<?php echo $value['id'];?>" type="hidden" class="form-control" name= "id" placeholder="id" required>
						</div>

            <div class="form-group  has-feedback">
                <label>First Name:</label>
                <input type="text" name="firstname"class="form-control"  value="<?php echo $value['firstname'];?>" disabled> 
            </div>

            <div class="form-group  has-feedback">
                <label>Last Name:</label>
               <input type="text" name="lastname"class="form-control"  value="<?php echo $value['lastname'];?>" disabled>
             </div>
			 
			<div class="form-group  has-feedback <?php echo (!empty($regno_err)) ? 'has-error' : ''; ?>">
                <label>Regno:</label>
                <input type="text" name="regno"class="form-control"  value="<?php echo $value['regno'];?>" disabled> 
                <span class="help-block"><?php echo $regno_err; ?></span>
            </div> 
             
          
			<div class="form-group  has-feedback <?php echo (!empty($feebalance_err)) ? 'has-error' : ''; ?>">
                <label>Fee Balance:</label>
				<input type="int" name="feebalance"class="form-control"  value="<?php echo $value['feebalance'];?>"> 
                <span class="help-block"><?php echo $feebalance_err; ?></span>
            </div>
			
			
          	<div class="modal-footer form-group">
						<div class="row">
							<button type="button" class="btn" data-widget='remove' data-toggle="tooltip">Cancel</button>
                            <input type="submit" name="update" class="btn btn-primary pull-left" value="Clear">
						</div>
					</div>
             <?php
             }
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