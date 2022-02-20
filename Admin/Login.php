<?php
		include("include/config.php")							
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
   
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
  

  </head>
	<title> Admin Area </title>
</head>
<body>

 <?php
		
		if(isset($_REQUEST['submit']))
		{
			$admin=$_REQUEST['email'];
			$password=$_REQUEST['password'];
			//echo "Test";			
						
			$loginQuery="SELECT * FROM admin_login WHERE admin_email='$admin' AND admin_password='$password'";
			$res1=mysqli_query($conn,$loginQuery);
			$f1=mysqli_num_rows($res1);
			if($f1==0)
			{
				 header("Location:Login.php"); 
			}
			else 
			{
				
				header("Location:Deshboard.php");
			}
		}
?>
   
   <div class="container"><!-- container begin -->
       <form action="Login.php" class="form-login" method="post"><!-- form-login begin -->
           <h2 class="form-login-heading"> Admin Login </h2>
           
           <input type="text" class="form-control" placeholder="Email Address" name="email" required>
           
           <input type="password" class="form-control" placeholder="Your Password" name="password" required>
           
           <button  type="submit" class="btn btn-lg btn-primary btn-block" name="submit"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


