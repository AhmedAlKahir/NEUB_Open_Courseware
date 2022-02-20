<?php 
	include("include/config.php");
    if(isset($_GET['registration_delete'])){
        
        $delete_student_id = $_GET['registration_delete'];
        
        $delete = "delete from permission_student_registration where student_id='$delete_student_id'";
        
        $run_delete = mysqli_query($conn,$delete);
        
        
        if($run_delete){ 
            echo "<script>alert('One of the Student Has Been Deleted')</script>";
            
            echo "<script>window.open('Addstudent.php','_self')</script>";
		}
        
        
    }

?>