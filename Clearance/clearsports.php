<?php 

	require'config.php';
	include('session.php');  
	?>
 
<?php
$regno=$sports=$sportscomment="";
$regno_err=$sports_err=$sportscomment_err="";

if (isset($_POST['update'])){

     
	  //validate day
     if(empty(trim($_POST['sports']))){
        $sports_err= "Please enter the status";
    }
   
     else{
            $sports= trim($_POST['sports']);
                }

    //validate venue
      if(empty(trim($_POST['sportscomment']))){
        $sportscomment_err= "Please enter the comment";
    }
      
	   else{
            $sportscomment= trim($_POST['sportscomment']);
                }

                 //validate time
       
// Check input errors before inserting in database// if there are errors, data will not be submitted to the database.
  if(empty($sports_err) && empty($sportscomment_err) ){
      
 // Prepare an update statement
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $id=$_POST['id']; 
 
       $sql="UPDATE allsub SET sports ='$sports', sportscomment='$sportscomment' WHERE id='$id'";
if(mysqli_query($conn,$sql)){
//die($sql);
          ?>
<script> alert("Student Cleared Successfully."); window.location='spo.php'</script>
	<?php

	}else{
?>
<script> alert("No field edited!"); window.location='spo.php'</script>
<?php
	}
}
}	
//die("");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Clearence | Sports</title>
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
            <div class="col-xs-6"> 
				<div class="box"> 
					<div class="box-header with-border">
						<h3 class="box-title">Clear Student</h3>  
					</div>
				<div class="box-body">
                <div class='box-body pad'>
        	<div class="form-group">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <?php 
        include "config.php"; 
        
		$id=$_POST['id'];
		
        $sql="SELECT * FROM allsub WHERE id='$id'";
		
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
            
			<div class="form-group  has-feedback <?php echo (!empty($regno_err)) ? 'has-error' : ''; ?>">
                <label>Regno:</label>
                <input type="text" name="regno"class="form-control"  value="<?php echo $value['regno'];?>" disabled> 
                <span class="help-block"><?php echo $regno_err; ?></span>
            </div> 
             <div class="form-group  has-feedback">
                <label>Status:</label>
                <input type="text" name="sports"class="form-control"  value="<?php echo $value['sports'];?>"> 
            </div>
          <div class="form-group  has-feedback <?php echo (!empty($sportscomment_err)) ? 'has-error' : ''; ?>">
                <label>Comment:</label>
               <input type="text" name="sportscomment"class="form-control"  value="<?php echo $value['sportscomment'];?>" >
                <span class="help-block"><?php echo $sportscomment_err; ?></span>
            </div> 
			
          	<div class="modal-footer form-group">
						<div class="row">
							<button type="button" class="btn" data-widget='remove' data-toggle="tooltip">Cancel</button>
                            <input type="submit" name="update" class="btn btn-primary pull-left" value="Approve">
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