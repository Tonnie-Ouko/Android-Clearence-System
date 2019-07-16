<?php
   include("config.php");
   session_start();
   
   
   $errors   = array();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
	  //die($sql);
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");  
         $_SESSION['login_user'] = $myusername;	 
         
         header("location: home.php");
      }
	  else {
        $error = "Your Login Name or Password is invalid";
      }
	  //else {
			//array_push($errors, "Wrong username/password combination");
		//}
   }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
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
	  
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="shortcut icon" href="../favicon.ico"> 
   <link rel="stylesheet" type="text/css" href="css/animate-custom.css" /> 
  </head>
  
 <div class="wrapper"> 
  <body class="skin-blue" align="center"></br></br></br></br> 
        <div class="container"> 
            <section>				
                <div id="container_demo" >  
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  
                                <h1>Admin Clearence Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p> 
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p> 
                            </form>
                        </div> 
                    </div>
                </div>  
            </section>
        </div>
  </body> 
</div>  
</html>