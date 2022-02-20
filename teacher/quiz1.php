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
<?php
		if(isset($_REQUEST['submit1']))
		{
			$cname=$_REQUEST['cname'];
			$tname=$_REQUEST['tname'];
			$question=$_REQUEST['question'];
			$o1=$_REQUEST['o1'];
			$o2=$_REQUEST['o2'];
			$o3=$_REQUEST['o3'];
			$o4=$_REQUEST['o4'];
			$ans=$_REQUEST['ans'];
			$mark=$_REQUEST['mark'];
			$sql="INSERT INTO quiz_question (tname, cname, question, o1, o2, o3, o4, ans, mark) values ('$tname','$cname','$question','$o1','$o2','$o3','$o4','$ans','$mark')";
			if(mysqli_query($conn,$sql)){
				echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
				
				
			}
			else{
				echo "<script type='text/javascript'>alert(\"unSuccessfully!!\");</script>";
			}
			
				
		}
						
				
	?>



<div class="container">
	
    

	<form action="quiz1.php" method="post" enctype="multipart/form-data">
		<label class="float-left">Course Name</label>
		<input class="form-control col-lg-5 ml-3" type="text" name="cname">
		<br><br>
		<label class="float-left">Test Name</label>
		<input class="form-control col-lg-5 ml-3" type="text" name="tname">
		<br>
		<br>
		<div class="form-group col-lg-6">
			<label>Question</label>
			<textarea class="form-control" rows="7" type="text" name="question"></textarea>


			<br>
			<br>
			<br>
			<label>Option</label>

			<br>
			<label>Option 1</label>
			<input class="form-control" type="text" name="o1">
			<label>Option 2</label>
			<input class="form-control" type="text" name="o2">
			<label>Option 3</label>
			<input class="form-control" type="text" name="o3">
			<label>Option 4</label>
			<input class="form-control" type="text" name="o4">

			<br>
			<label>Correct</label>
			<select name="ans">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
			</select>
			<br><br>
			<label class="float-left">Mark</label>
			<input class="form-control col-lg-10 ml-3" type="text" name="mark">

			<br>
			<br>
			<br>

			<input class="form-control bg-success text-white col-lg-4" type="submit" value="Add" name="submit1">

		</div>
		
	</form>
	

	<div class="col-lg-5 mr-5">
		<form action="quiz1.php" method="post" enctype="multipart/form-data">
			<h4 class="text-center">Question</h4>
			<?php
				$sql1= "select * from quiz_question";
				$rec= mysqli_query($conn,$sql1);
				while($arr=mysqli_fetch_array($rec))
					{
				echo '<div class=\"form-group\">';
				echo '<label><input class="mr-3" type="checkbox" value="'.$arr['id'].'" >'.$arr['question'].'</label><br>';
				echo '<label>' .$arr['o1'].'</label><br>';
				echo '<label>' .$arr['o2'].'</label><br>';
				echo '<label>' .$arr['o3'].'</label><br>';
				echo '<label>' .$arr['o4'].'</label><br>';
				echo '<p>Mark: '.$arr['mark'].'</p>';
					echo '</div>';}
				?>
				<hr>

			<input class="form-control bg-success text-white col-lg-4" type="submit" value="Confirm" name="confirmed">
		</form>
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