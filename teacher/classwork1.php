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
<div class="wrapper" style="background-image: linear-gradient(white,);">
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
						   <a class="dropdown-item" href="classwork1.php">Archive course &raquo;</a>
						    <a class="dropdown-item" href="classwork.php">Current course&raquo;</a>
						   
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

<!-- wrapper done	 -->

<?php
		
		if(isset($_REQUEST['submit']))
		{
			$code=$_REQUEST['code'];
			$coursename=$_REQUEST['coursename'];
			$session=$_REQUEST['session'];
			$confirmCode = substr(rand()* 900000+100000, 0,6);
			$check="select * from course_work where course_work_title ='$coursename' and course_work_date = '$session'";
			$res=mysqli_query($conn,$check);
			$f=mysqli_num_rows($res);
			if($f==0)
			{
				$newcourse="INSERT INTO course_work (course_work_code,course_work_title,course_work_date,join_code) VALUES('$code','$coursename','$session','$confirmCode')";
				mysqli_query($conn,$newcourse);
				echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
			}
			
			
			//echo "Test";			
						
			
		}
		
		
?>

<div class="body" style="background-color:powderblue;">	 
<div class="container-fluid">
<div class="col-md-12">
	<!--    Bordered Table  -->
	<div class="panel panel-default">
		<div class="panel-heading pt-3">
			<label>Archive course</label>
			
		
				<form  action="classwork.php" method="post" enctype="multipart/form-data" class="form-inline pull-right">
				<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Create Class</button>
					
					<!-- popup start -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			<h4 >Create Class</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body text-center">
          
		  <div class="form-group ">
			<label for="CourseCode">Subject Code</label>
			<input type="text" class="form-control"  name="code" placeholder="Course code" required />
		  </div>

		  <div class="form-group">
			<label for="coursename">Course Name</label>
			<input type="text" class="form-control" name="coursename" placeholder="Course Name" required />
		  </div>
		  
		  <div class="form-group">
			<label for="coursename">Session</label>
			<input type="text" class="form-control" name="session" placeholder="Session" required />
		  </div>
		 
		  
		  <hr>
		  <div class="form-group">
			
			<input type="submit" class="form-control"  name="submit" required />
		  </div> 
		  
		  
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- popup end -->
					
				</form>
		</div>
		
		
			
			
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="container my-3 py-5 text-center">
			<div class="row">
<?php
	$sql=mysqli_query($conn,"select * from course_work");
	while($row=mysqli_fetch_array($sql))
	{
?>
				<div class="col-sm-6 col-md-3">
				<div class="view overlay zoom">
				<div class="card" style="width: 25rem; height: 30rem;">
				    <div class="card bg-primary text-white">
					<div class="card-body"><h4><?php echo htmlentities($row['course_work_title']);?></h4></div>
				  </div>
				  <div class="card-body">
					<a class="card-text"><br>Subject Code:<?php echo htmlentities($row['course_work_code']);?></br></a>
					<a class="card-text"><br><?php echo htmlentities($row['course_work_date']);?></br></a>
					
					
					<a class="card-text"><br>Class Code:<?php echo htmlentities($row['join_code']);?></br></a>
					<a href="gocourse.php" class="btn btn-primary">view Course</a>
				  </div>
				</div>
				</div>
				</div>
<?php 
	} 
?> 


                      				
				  </div>	
				 </div>	
		     </div>
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