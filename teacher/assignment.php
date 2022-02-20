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
						   <a class="dropdown-item" href="classwork.php">Current course &raquo;</a>
						    <a class="dropdown-item" href="classwork1.php">Archive course  &raquo;</a>
						   
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




<?php
		
		if(isset($_REQUEST['submit']))
		{
			
			$option=$_REQUEST['option'];
			$point=$_REQUEST['point'];
			$due_date=$_REQUEST['due_date'];
			$title=$_REQUEST['title'];
			$due_time=$_REQUEST['due_time'];
			$post=$_REQUEST['post'];
			// $files=$_REQUEST['files'];
			
			$date = date("Y/m/d");
			$time = date("h:i:sa");


//File upload
$target_dir = "assignment/";
$target_file = $target_dir . basename($_FILES["files"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
echo $_FILES["files"]["size"];
// Check file size
if ($_FILES["files"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "mp4" && $imageFileType != "MP4" && $imageFileType != "avi" && $imageFileType != "AVI" && $imageFileType != "PNG" && $imageFileType != "png" && $imageFileType != "JPG"  && $imageFileType != "pdf" && $imageFileType != "PDF"  ) {
  echo "Sorry, FIle type is not valid.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["files"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}			
				$newcourse="INSERT INTO assignment (Assignment_title,Assignment_date,Assignment_time,Assignment_deadline,Assignment_text,Assignment_file,Assignment_status,Assignment_due_time) VALUES('$title','$date','$time','$due_date','$post','$target_file','$option','$due_time')";
				mysqli_query($conn,$newcourse);
				//echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
				echo "Posted successfully.";

			//echo "Test";			
						
			
		}
?>






<div class="body" style="background-color:powderblue;">
<div class="content">
  <div class="col-sm-3">
    <form  action="assignment.php" method="post" enctype="multipart/form-data" >
		<div class="row-sm-2">
			<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
				<div class="panel-heading"> <!-- panel-heading Begin -->
					<h3 class="panel-title">For</h3>
							<select class="mdb-select md-form colorful-select dropdown-primary btn btn-default" name="option" >
								<option value="none"> </option>
								<option value="all student">All student</option>
								<option value="Specific">Specific student</option>						
							</select>	
			</div> <!-- panel-heading finish -->
			
			
			
		
		</div> <!-- panel panel-default sidebar-menu finish -->
		
		
		<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
			<div class="panel-heading"> <!-- panel-heading Begin -->
				<h3 class="panel-title">Point</h3>
			</div> <!-- panel-heading finish -->
			
			<div class="form-group">
                 <input type="text" class="form-control" id="text" name="point">
          </div>
			
		
		</div> <!-- panel panel-default sidebar-menu finish -->	
		
		<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
			<div class="panel-heading"> <!-- panel-heading Begin -->
				<h3 class="panel-title">Due</h3>
			</div> <!-- panel-heading finish -->
			
			 <div class="form-group">
                  <input type="date" class="form-control" id="text" name="due_date">
          </div>
			
			
		
		</div> <!-- panel panel-default sidebar-menu finish -->
		
		<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
			<div class="panel-heading"> <!-- panel-heading Begin -->
				<h3 class="panel-title">Title</h3>
			</div> <!-- panel-heading finish -->
			
			<div class="form-group">
                 <input type="text" class="form-control" id="text" name="title">
          </div>
			
		
		</div> <!-- panel panel-default sidebar-menu finish -->
		
		<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
			<div class="panel-heading"> <!-- panel-heading Begin -->
				<h3 class="panel-title">Due Time</h3>
			</div> <!-- panel-heading finish -->
			
			<div class="form-group">
                 <input type="text" class="form-control" id="text" name="due_time">
          </div>
			
			
		
		</div> <!-- panel panel-default sidebar-menu finish -->
		

    </div>
  </div>
  
 
</div>

    
<div class="container-fluid">

<div class="col-md-9">
	<!--    Bordered Table  -->
	<div class="panel panel-default">
		<div style="text-align:left; background-color: #00b33c; " class="panel-heading pt-3 ">
			<label  ><h4 style="color: white;"></h4></label>
		</div>
			
		<div class="panel-body">
			<div class="container my-3 py-5 ">
			
			<div class="row">
			<div class="col-sm-5 col-md-9">
				<div class="view overlay zoom">
				<div class="card" >
				  <div class="card bg-primary text-white">
				  </div>
				  <div class="card-body">
					
					<textarea class="form-control" rows="4" cols="4" id="post"  placeholder="share with your class" name="post"></textarea>
				  </div>
				  
				
				  
				  
				<div class="container">
					<label>Add files</label>
					<input type="file"  id="files" name="files" multiple ><br>
				</div>
				   
				  <input type="submit" class="btn btn-primary" name="submit" ></input>
				</div>
				</div>
			</div>
				
				
			</div>
			<hr>
				
				</div>
				</div>
		
		
	</form>		
		

		</div>
	</div>
</div> 
</div> 



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