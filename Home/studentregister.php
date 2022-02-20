<?php
		include("include/config.php")							
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<!---<meta charset="UTF-8">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    	<meta name="author" content="Ahmed Al Kahir">
		<link rel="stylesheet" type="text/css" href="home.css">
		
		<link rel="stylesheet" href="styles/bootstrap-337.min.css">
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title> Welcome to Open Courseware </title>
	
	
</head>

<body>
<!-- wrapper start -->
<div class="wrapper" style="background-image: linear-gradient(white, black);">
      <!-- container start -->
	 <div class="container row py-5 text-center">
	 <h1 class=" col-lg-10 my-auto text-right" style="color:#3366cc; text-shadow: 0 0 3px #ff9900, 0 0 5px #ff9900;"> Welcome to Open Courseware</h1>
	 <div class="col-lg-14 my-auto text-right">
	 
<div class="btn-group">
     <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Login
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="studentlogin.php">For Student</a>
      <a class="dropdown-item" href="teacherlogin.php">For Teacher</a>
     </div>
</div>

		
	 	<!-- <a href="#"><button class="btn btn-danger">Register</button></a> -->
		<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Register
  </button>
  <div class="dropdown-menu">
   <a class="dropdown-item" href="studentregister.php">For Student</a>
    <a class="dropdown-item" href="teacherregister.php">For Teacher</a>
    
  </div>
</div>

		
	 </div>
     </div>
	 <!-- container done -->	  
		 
		<!-- nav start -->
		<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
		     <a class="navbar-brand" href="Home.php">
		   <img src="image/Courseware.png" alt="logo" style="width:20%;">
		   </a>
		
		<!-- navbar-nav  start-->
		  <ul class="navbar-nav mr-5">
		      <li class="nav-item"><a style="font-size:20px;"class="nav-link" href="Home.php">Home</a></li>
		      <li class="nav-item"><a style="font-size:20px;"class="nav-link" href="Department.php">Findresourse</a></li>
							
		         
				
			   
							
		         
				
				
				 <li class="nav-item">
					  <a style="font-size:20px;" href="Facultyprofile.php" class="nav-link">Faculty </a>
					
				</li>
				
				
				<li class="nav-item">
					<a style="font-size:20px;" href="About us.php" class="nav-link">About</a>
					
					
				</li>
				<li class="nav-item">
					<a style="font-size:20px;" href="contact us.php" class="nav-link">Contact </a>
				</li>
				
				
				<!-- <li> -->
					
					<!-- <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin --> 
        
                
				</li>
				
					
			</ul>
					<!-- Search nave start -->
			<div class="mr-5">
					<div class="input-group   row ">
						<div class="col-lg-10 pdr">
							<input type="text" class="form-control" placeholder="Search...">
						</div>
					    
					    <div class="input-group-append col-lg-2 pdl">
					      <button class="btn btn-success" type="submit">Go</button>  
					     </div>
					  </div>
				</div>
		<!-- Search nave done -->
	</nav>
	
	<!-- nav done -->


  <!-- wrapper done -->
  <div class="container">
  
   <?php
		if(isset($_REQUEST['register']))
		{
		
			$id=$_REQUEST['s_id'];
			$name=$_REQUEST['s_name'];
			$email=$_REQUEST['s_email'];
			$pass=$_REQUEST['s_pass'];
			$mobile=$_REQUEST['s_mobile'];
			$address=$_REQUEST['s_address'];
			$address=$_REQUEST['s_address'];
			$image=$_FILES['s_image']['name'];
			$image_temp=$_FILES['s_image']['tmp_name'];
			 move_uploaded_file($image_temp,"regi_student_pic/$image");
			$join=$_REQUEST['s_join'];
			$status=$_REQUEST['s_status'];
			
			
						
						$registration="select * from permission_student_registration where student_email ='$email'";
						$res=mysqli_query($conn,$registration);
						$f=mysqli_num_rows($res);
						//echo $fl;
						$null="1";
						if($name===$null){
						}
						else if($f==0)
						{
							$registration1="insert into permission_student_registration values ('$id','$name','$email','$pass','$mobile','$address','$image','$join','$status')";
							mysqli_query($conn,$registration1);
							echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
						}else{
							echo "<script type='text/javascript'>alert(\"User Id are used!!\");</script>";
						}
			}
						
				
	?>

            <div class="coll-md-9"> <!-- col-md-9 Begin -->

                <div class="box"style="background-color:#3AAFA9"> <!-- box Begin -->

                    <div class="box-header"> <!-- box-header Begin -->

                        <center> <!-- center Begin -->

                            <h2> Register a new account for Student </h2>

                        </center> <!-- center finish -->

                        <form action="studentregister.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Student ID</label>

                                <input type="text" class="form-control"  placeholder="student_id" name="s_id" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label> Name</label>

                                <input type="text" class="form-control" placeholder="Name" name="s_name" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Eamail</label>

                                <input type="Eamail" class="form-control" placeholder="Eamail"  name="s_email" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Password</label>

                                <input type="password" class="form-control" placeholder="Password" name="s_pass" required>

                            </div> <!-- form-group finish -->

                             <div class="form-group"> <!-- form-group Begin -->

                                <label>Mobile</label>

                                <input type="text" class="form-control" placeholder="Mobile" name="s_mobile" required>

                            </div> <!-- form-group finish -->
							
							<div class="form-group"> <!-- form-group Begin -->

                                <label>Address</label>

                                <input type="text" class="form-control" placeholder="Address" name="s_address" required>

                            </div> <!-- form-group finish -->
							<div class="form-group"> <!-- form-group Begin -->

                                <label>Univarsity Name</label>

                                <input type="text" class="form-control" placeholder="Univarsity Name" name="s_address" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Profile </label>

                                <input type="file" class="form-control form-height-custom" placeholder="Your Profile" name="s_image" required>

                            </div> <!-- form-group finish -->
							<div class="form-group"> <!-- form-group Begin -->

                                <label>Student Join Date</label>

                                <input type="text" class="form-control form-height-custom" placeholder="Join Date" name="s_join" required>

                            </div> <!-- form-group finish -->
							<div class="form-group"> <!-- form-group Begin -->

                                <label>Studet_Status</label>

                                <input type="text" class="form-control form-height-custom" placeholder="Status" name="s_status" required>

                            </div> <!-- form-group finish -->

                            <div class="text-center"> <!-- text-center Begin -->

                                <button type="submit" name="register" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Register

                                </button>

                            </div> <!-- text-center finish -->

                        </form> <!-- form finish -->
						
						
						
						

                    </div> <!-- box-header finish -->
					
					
					

                </div> <!-- box finish -->

            </div> <!-- col-md-9 finish -->
			
			
			
      </div> 
   </div> 
		 
	<!-- foter start -->
		  <div class="footer"style="background-color:light"> <!-- #footer Begin-->
		   
			<div class="container"> <!-- container Begin -->
				<div class="row"> <!-- row Begin -->
					<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
						<h4>Pages</h4>

							<li><a href="#">Home</a></li>
						
							<li><a href="#">Resoursesharing</a></li>
						
							<li><a href="#">Contact</a></li>
							<li><a href="#">About</a></li>
							<li><a href="Home.php">Logout</a></li>
							

                        
					</div> <!-- col-sm-6 col-md-3 finish -->
						
					
            
					<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
						<h4>Find Us</h4>
                
						<p><!-- p Begin -->
                    
							<strong> Open Courseware </strong>
							<br>student.neub143@gmail.com
							<br><strong> Ahmed Al Kahir & Gpc Dip </strong>
                    
						</p><!-- p finish -->
                
                
						
                
					</div><!-- col-sm-6 col-md-3 finish -->
					
					
            
					<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
						<h4>Get The view</h4>
                
						<p>
							our view page.
						</p>
                <!-- form Begin -->
							<div class="input-group"><!-- input-group Begin-->
								
								<input type="text" class="form-control" name="#">
								
								
								<span class="input-group-btn"><!-- input-group-btn Begin -->
									
									<input type="submit" value="view" class="btn btn-default">
									
								</span><!-- input-group-btn finish -->
								
							</div><!-- input-group finish -->
						</form><!-- form finish -->
					
                
					</div><!-- col-sm-6 col-md-3 finish -->
					
					
					<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
						
                
						<h4>Keep In Touch</h4>
                
						<p class="social">
							<a href="http://facebook.com" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-instagram"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-envelope"></a>
						</p>
						
					</div><!-- col-sm-6 col-md-3 finish -->
            
					
            
        </div> <!-- row finish -->
        
    </div> <!-- container finish -->
    
</div> <!-- #footer finish -->



<script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>
