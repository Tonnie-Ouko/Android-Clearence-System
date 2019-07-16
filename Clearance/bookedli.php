<?php require'config.php';
include('session.php');
?>

<?php
if(isset($_POST['delete'])) {
  
 
	$id = $_POST['id'];
    $sql = "DELETE FROM bookstudentli WHERE id='$id'";
	//die($sql);
	//mysql_select_db('clearence');
	if(mysqli_query($conn,$sql)){?>
	
		<script>alert("Student has been cleared");</script>
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
		 
         <section class="content">
          <div class="row">
            <div class="col-xs-12"> 
			  <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Uncleared</h3> 
                </div> 
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped"> 
                        <tr>
							<thead>
                        <tr>
                          <th>id</th>
                          <th>Reg no</th>
                          <th>Name</th> 
						  <th>Phone no</th>
						  <th>Status</th>
						  <th>Comment</th> 
						  <th>Action</th>
                        </tr>
                      </thead>
						<tbody>
                        <tr>
                          <?php
						  require'config.php';
              $result= mysqli_query($conn,"select * from bookstudentli order by id ASC") or die (mysqli_error($conn));
              $id=0;
              while ($row= mysqli_fetch_array ($result) ){
              $id=$row['id'];
              $id=$id+1;
              ?>
                        <tr>
                          <td><?php echo $id; ?></td> 
                          <td><?php echo $row['regno']; ?></td> 
                          <td><?php echo $row['name']; ?></td>
						  <td><?php echo $row['phone']; ?></td>
						  <td>not cleared</td>
						  <td><?php echo $row['Comment']; ?></td>
                               
							<td>  
									</div> 
							
								<form method="post" action="<?php $_PHP_SELF ?>"> 
									<input name="id" value="<?php echo $row['id'];?>" hidden> 
									<input class="btn btn-primary" name="delete" type="submit"
										id="delete" value="Clear" OnClick="return confirm('Are you sure you want to Clear Student');"> 
								</form>
							</td>
							
                        </tr>
                        <?php } ?>
                      
                        </tr> 
                        </tr> 
                      </tbody>
                    </table>
                  </div> 
                
				
				<div class="box-footer clearfix">  
				<div class="row">

					<div class="form-group"><a href="Library.php" class="btn btn-primary pull-right" name="cancel" type="cancel"
								id="cancel">Cancel</a> 
					</div>
					<div class="form-group"><a href="Book Studentli.php" class="btn btn-primary pull-left" name="book" type="book"
								id="book">Unclear Student</a> 
					</div> 
                </div> 
                </div> 
				
				</div> 
				</div> 
			  </div> 
        </section>
		
      <footer class="main-footer" align="center"> 
        <strong>Copyright &copy; 2018 oukotonnie .</strong> All rights reserved.
      </footer> 
	  </div>   
	
	
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
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script> 
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script> 
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src='../../plugins/fastclick/fastclick.min.js'></script> 
    <script src="../../dist/js/app.min.js" type="text/javascript"></script> 
    <script src="../../dist/js/demo.js" type="text/javascript"></script> 
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script> 
	</div> 
  </body>
</html>