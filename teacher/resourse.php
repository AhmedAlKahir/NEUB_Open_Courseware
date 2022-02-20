<?php
		include("include/config.php")							
?>
<!DOCTYPE html>
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
<style>
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; 
}
</style>
<body>
<!-- wrapper start -->
<div class="wrapper" style="background-image: linear-gradient(white, black);">
      <!-- container start -->
	 <div class="container" >
	 <h1 class="text-center" style="color:#3366cc; text-shadow: 0 0 3px #ff9900, 0 0 5px #ff9900;"> Welcome to Open Courseware</h1>
     </div>
	 <!-- container done -->	  
		 
		<!-- nav start -->
		<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
		     <a class="navbar-brand" href="Home.php">
		   <img src="image/Courseware.png" alt="logo" style="width:20%;">
		   </a>
		
		<!-- navbar-nav  start-->
		  <ul class="navbar-nav">
		      <li class="nav-item"><a style="font-size:20px;"class="nav-link" href="Home.php">Home</a></li>
		     
							
		         	
				
			   
							
		         <li class="nav-item dropdown">
					<a style="font-size:20px;"href="#"  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">ClassWork</a>
					   <ul class="dropdown-menu" >
						   <a class="dropdown-item" href="classwork.php">Archive course &raquo;</a>
						    <a class="dropdown-item" href="classwork1.php">Current course &raquo;</a>
						   
					  </ul>
				</li>
				
				
				 <li class="nav-item">
					  <a style="font-size:20px;" href="Facultyprofile.php" class="nav-link"> Faculty </a>
					
				</li>
			
				
				
				<li><a style="font-size:20px;" href="../Home/teacherlogin.php" class="nav-link">Logout </a></li>
				
				<!-- <li> -->
					<!-- nav sarch start -->
					<div class="col-sm-6 col-md-5"><!-- col-sm-6 col-md-3 Begin -->
        
                
						<form action="" method="post" target="popupwindow" onsubmit="" method="post"><!-- form Begin -->
							<div class="input-group"><!-- input-group Begin-->
								
								<input type="Search" class="form-control" id="coursename" name="coursename" placeholder="Search for..." required />
									
								
							</div><!-- input-group finish -->
						</form><!-- form finish -->
						<hr class="hidden-md hidden-lg">
                
					</div><!-- col-sm-6 col-md-3 finish -->
					<!-- nav sarch start done -->
				</li>
				
					
			</ul>
			<!-- navbar-nav  start-->
	</nav>
	
	<!-- nav done -->
</div>	
<!-- wrapper done -->
<div class="body" style="background-color:powderblue;">


    
<div class="container-fluid">

<div class="col-md-12">
	<!--    Bordered Table  -->
	<div class="panel panel-default">
		<div style="text-align:left; background-color: #00b33c; " class="panel-heading pt-3 ">
			<label  ><h4 style="color: white;">CSE 413:Web Engineering</h4></label>
		</div>
			
		<div class="panel-body">
			<div class="container my-3 py-5 ">
			
			<div class="row">
			<div class="col-sm-5 col-md-12">
				<div class="view overlay zoom">
				<div class="card" >
				  <div class="card bg-primary text-white">
				  </div>
				  <div class="card-body">
					
					<textarea class="form-control" rows="4" cols="4" id="post"  placeholder="share with your class"></textarea>
				  </div>
				  
				  <div class="container" style="text-align:left"><!-- input-group Begin-->
						<span class="input-group-btn"><!-- input-group-btn Begin -->
							<select class="mdb-select md-form colorful-select dropdown-primary btn btn-default" >
								<option value="1">Share type</option>
								<option value="1">Public</option>
								<option value="1">Private</option>						
							</select>							
						</span><!-- input-group-btn finish -->
					</div><!-- input-group finish -->
				  
				  
				<div class="container">
					<label>Add files</label>
					<input type="file"  id="files" name="files" multiple ><br>
				</div>
				   
				  <a style=""href="#" class="btn btn-primary" >Submit</a>
				</div>
				</div>
			</div>
			
					
			</div>
		
				
				</div>
				</div>
		
		
			
		

		</div>
	</div>
</div> 
</div> 


	<!-- foter start -->
		  <div class="footer"> <!-- #footer Begin-->
		   <div class="container-fluid" style="text-align:center; color:black;">
				<h2>About</h2>
			</div>
			<div class="container"> <!-- container Begin -->
				<div class="row"> <!-- row Begin -->
					<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
						<h4>Pages</h4>

							<li><a href="#">Home</a></li>
						
							<li><a href="#">Faculty</a></li>
							<li><a href="#">ClassWork</a></li>
							
							<li><a href="#">Logout</a></li>
							

                        <hr class="hidden-md hidden-lg">
					</div> <!-- col-sm-6 col-md-3 finish -->
						
					
            
					<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
						<h4>Find Us</h4>
                
						<p><!-- p Begin -->
                    
							<strong> Open Courseware </strong>
							<br>student.neub143@gmail.com
							<br><strong> Ahmed Al Kahir & Gpc Dip </strong>
                    
						</p><!-- p finish -->
                
                
						<hr class="hidden-md hidden-lg">
                
					</div><!-- col-sm-6 col-md-3 finish -->
					
					
            
					<div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
						<h4>Get The News</h4>
                
						<p class="text-muted">
							Don't miss our latest update news.
						</p>
                
						<form action="" method="post" target="popupwindow" onsubmit="window.open('', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form Begin -->
							<div class="input-group"><!-- input-group Begin-->
								
								<input type="text" class="form-control" name="email">
								
								<input type="hidden" value="PpProgramingBlog" name="uri"/><input type="hidden" name="loc" value="en_US"/>
								
								<span class="input-group-btn"><!-- input-group-btn Begin -->
									
									<input type="submit" value="subscribe" class="btn btn-default">
									
								</span><!-- input-group-btn finish -->
								
							</div><!-- input-group finish -->
						</form><!-- form finish -->
						<hr class="hidden-md hidden-lg">
                
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
						<hr class="hidden-md hidden-lg">
					</div><!-- col-sm-6 col-md-3 finish -->
            
					
            
        </div> <!-- row finish -->
        
    </div> <!-- container finish -->
    
</div> <!-- #footer finish -->



<script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>