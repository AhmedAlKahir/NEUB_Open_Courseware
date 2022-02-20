<?php 
	include("include/config.php");
    if(isset($_GET['accept'])){
        
        $student_id = $_GET['accept'];
		
		$get1 = "select * from permission_student_registration where student_id='$student_id'";
          
        $run = mysqli_query($conn,$get1);
          
        $row=mysqli_fetch_array($run);
		
		$student_id1 = $row['student_id'];
        $student_name=$row['student_name'];
        $student_email=$row['student_email'];
		$student_password=$row['student_password'];
		$student_mobile=$row['student_mobile'];
		$student_address=$row['student_address'];
		$student_image=$row['student_image'];
		$student_join_date=$row['student_join_date'];
		$student_status=$row['student_status'];
		
        $insert = "INSERT into student_registration VALUES ('$student_id1','$student_name','$student_email','$student_password','$student_mobile','$student_address','$student_image','$student_join_date','$student_status')";
       
        
        $final = mysqli_query($conn,$insert);
        
        $delete = "delete from permission_student_registration where student_id='$student_id'";
        
        $run_delete = mysqli_query($conn,$delete);
		
        if($final){
            echo "<script>alert('One of the Student Has Been accept')</script>";
            
            echo "<script>window.open('Addstudent.php','_self')</script>";
		}  
        
        
    }

?>