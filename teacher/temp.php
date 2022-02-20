<?php
		include("include/config.php")							
?>
<?php
	if(isset($_REQUEST['confirmed']))
		{
			$ckbx=$_REQUEST['ckbx'];
			for($i=0;$i<sizeof ($ckbx);$i++){
				if ($ckbx[$i]==
				$sql="INSERT INTO quiz_sumited (tname, cname, question, o1, o2, o3, o4, ans, mark) values ('$tname','$cname','$question','$o1','$o2','$o3','$o4','$ans','$mark') ";
			if(mysqli_query($conn,$sql)){
				
			
				
		}
						
				
	?>



<form action="temp.php" method="post" enctype="multipart/form-data">
			<h4 class="text-center">Question</h4>
			<?php
				$sql1= "select * from quiz_question";
				$rec= mysqli_query($conn,$sql1);
				while($arr=mysqli_fetch_array($rec))
					{
				echo '<div class=\"form-group\">';
				echo '<label><input class="mr-3" type="checkbox" name="ckbx[]" value="'.$arr['id'].'" >'.$arr['question'].'</label><br>';
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