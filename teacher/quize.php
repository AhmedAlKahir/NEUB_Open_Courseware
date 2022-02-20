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
	<title> Teacher/Courseware </title>
	
	
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
		  <ul class="navbar-nav mr-5">
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
				
				
					
			</ul>
			<!-- ul navbar-nav  start-->
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
</div>
<!-- wrapper done -->
    
<!-- <div class="container-fluid"> -->

<!-- <div class="col-md-9"> -->
	<!--    Bordered Table  -->
<div class="container my-3 py-5 text-center" style="background-color:powderblue;">
	<div class="panel panel-default">
		<div style="text-align:center; background-color: gray; " class="panel-heading pt-3 ">
			<label  ><h4 style="color: white;">Quize test</h4></label>
		</div>
		
		<div class="panel-body">
			<div class="container my-3 py-15 text-center">
			
			<div class="row">
				<div class="col-sm-9 col-md-9">
					<div class="view overlay zoom">
						<div class="card" style="width: 100rem; height: 25rem;">
						<div class="card bg-primary text-white">
						</div>
							<div class="card-body">
							<br>
							<h5  >1. Web engineering means _____</h5>
							<hr>
							<div class="checkbox"><label><input type="checkbox" value="">SEO</label></div>
					
							<div class="checkbox"><label><input type="checkbox" value="">EEE</label></div>
							
							<div class="checkbox"><label><input type="checkbox" value="">CSE</label></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 col-md-9">
					<div class="view overlay zoom">
						<div class="card" style="width: 100rem; height: 25rem;">
						<div class="card bg-primary text-white">
						</div>
							<div class="card-body">
							<br>
							<h5  >2. Database means _____</h5>
							<hr>
							<div class="checkbox"><label><input type="checkbox" value="">SEO</label></div>
					
							<div class="checkbox"><label><input type="checkbox" value="">EEE</label></div>
							
							<div class="checkbox"><label><input type="checkbox" value="">CSE</label></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-9 col-md-9">
					<div class="view overlay zoom">
						<div class="card" style="width: 100rem; height: 25rem;">
						<div class="card bg-primary text-white">
						</div>
							<div class="card-body">
							<br>
							<h5  >3. Artificial means _____</h5>
							<hr>
							<div class="checkbox"><label><input type="checkbox" value="">SEO</label></div>
					
							<div class="checkbox"><label><input type="checkbox" value="">EEE</label></div>
							
							<div class="checkbox"><label><input type="checkbox" value="">CSE</label></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<button class="btn btn-success pr-5 pl-5">Submit</button>
				
				</div>
				</div>
		
		
			
		

		</div>
	</div>



<!-- wrapper done -->

	<!-- foter start -->
		  <div class="footer"> <!-- #footer Begin-->
		 
			<div class="container"> <!-- container Begin -->
				<div class="row"> <!-- row Begin -->
					<div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
						<h4>Pages</h4>

							<li><a href="Home.php">Home</a></li>
						
							<li><a href="Facultyprofile.php">Faculty</a></li>
							<li><a href="classwork.php">ClassWork</a></li>
							
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