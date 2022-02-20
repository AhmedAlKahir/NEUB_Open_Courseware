<?php
		include("include/config.php")							
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="Deshboard.php">Admin_panel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
          
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper" style="background-color:#3AAFA9">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="Deshboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Deshboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Added</span>
			
			
          </a>
		  
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Page</h6>
            <a class="dropdown-item" href="Addstudent.php">Add Student</a>
             <a class="dropdown-item" href="AddFeculty.php">Add Faculty</a>
      			
      			 <a class="dropdown-item" href="viewfaculty.php">View Faculty</a>
          </div>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="Deshboard.php">
            <i class="#"></i>
            <span>Lagout</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Student</li>
          </ol>
        </div>
        

          <div class="p-2" > <!-- start -->
          <div class="container my-3 py-5 text-center">	

	<div class="col-md-12">
					<!--    Bordered Table  -->
					<div class="panel panel-default">
						<div class="panel-heading">
						Add Student
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive table-bordered">
								<table class="table">
									<thead>
										<tr>
											<!-- <th>Serial</th> -->
											<th>Student id</th>
											<th>student Name </th>
											<th>Department </th>
											<th>password</th>
											<!-- <th>Department Name </th> -->
											 <!-- <th>Creation Date</th> -->
											 <th>Action</th>
										</tr>
									</thead>
									<tbody>
					<?php 
                            
                              
                                $get = "select * from permission_student_registration";
          
                                $run = mysqli_query($conn,$get);
          
                                while($row=mysqli_fetch_array($run)){
                                    $id=$row['student_id'];
            ?>                        
                                    
	<tr>
		<td><?php echo htmlentities($row['student_id']);?></td>
		<td><?php echo htmlentities($row['student_name']);?></td>
		<td><?php echo htmlentities($row['student_status']);?></td>
		<td><?php echo htmlentities($row['student_password']);?></td>
		<td>
			
			
			 <a href="registration_accept.php?accept=<?php echo $id; ?> "> <i class="fa fa-check" style="color:Green"></i> Accept </a>
			 <a href="registration_delete.php?registration_delete=<?php echo $id; ?> "> <i class="fa fa-trash" style="color:Red"></i> Delete </a>
        </td>
     </tr>
                            
								<?php  }      ?>

	
								                       
									</tbody>
								</table>
							</div>

						</div>
					</div>
			</div>
		</div>
        </div><!-- end -->

      </div>
    </div>
   

  
    <!-- Logout-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="Login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/style.js"></script>

  </body>

</html>
