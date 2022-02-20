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
            <span class="badge badge-danger">7</span>
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
            <a class="dropdown-item" href="#">Activity Log</a>
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
            <a class="dropdown-item" href="Addfeculty.php">Add Faculty</a>
            <a class="dropdown-item" href="Addresourse.php">Add Resourse</a>
            <a class="dropdown-item" href="viewstudent.php">View Student</a>
            <a class="dropdown-item" href="viewresourse.php">View Resourse</a>
             <a class="dropdown-item" href="viewfaculty.php">View Faculty</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Page</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Page</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Page</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Page</span></a>
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
            <li class="breadcrumb-item active">View Faculty</li>
          </ol>
        </div>
        


         <div class="p-2"> <!-- start -->
          <div class="container my-3 py-5 text-center">
<div class="panel-heading"style="background-color:white;"> <!-- panel-heading Begin -->
<h3 class="panel-title">University of NEUB</h3>
</div> <!-- panel-heading finish -->
<br>
	<div class="row">
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/TasnimZahan.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;">Tasnim Zahan</h3>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Assistant Professor & Head<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>	 
	
	
	
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/AlMehdiSaadatChowdhury.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h4 style="color:#ff9900;"> Al Mehdi Saadat Chowdhury </h4>
			
				Assistant Professor<br>
				
				M.Sc. (Thesis) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
			
				
			
		</div>
		</div>
		</div>
		</div>
		
		
	
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/NoushadSojib.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;"> Md. Noushad Sojib</h3>
			
				
				Assistant Professor<br>
				
				M.Sc. (Thesis) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
			
				
			
		</div>
		</div>
		</div>
		</div>
		
		
	
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Shahadat_Hussain_Parvej.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;"> Shahadat Hussain Parvez </h3>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Lecturer<br>
				B.Sc. (Engg.) in EEE<br>
			    M.Sc. (Thesis) in EEE<br>
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>	
		
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Mir_Lutfur_Rahman.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;">Mir Lutfur Rahman</h3>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Lecturer<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>	
		
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Pranta_Sarker.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;">Pranta Sarker</h3>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Lecturer<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>	
		
		
		
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Md._Mahir_Hasan_Chowdhury.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h4 style="color:#ff9900;">Md. Mahir Hasan Chowdhury</h4>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Lecturer<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
				
		</div>
		</div>
		</div>
		</div>	
				
				
				
				
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Nafisa_Noushin.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;"> Nafisa Nowshin</h3>
			
				 Lecturer<br>
				
				M.Sc. (Thesis) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>
				
			
			
		
		<div class="col-sm-6 col-md-3">
		<div class="view overlay zoom">
		<div class="card">
		<div class="card-body">
			<img src="image/Buddho_Chandra_Banik.jpg"alt=""class="img-fluid rounded-circle w-50 mb-3">
			<h3 style="color:#ff9900;">Buddha Chandra Banik</h3>
			
				<!-- <li><a href="department_name.php">Lecturer -->
			    Lecturer<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				B.Sc. (Engg.) in CSE<br>
				
				Shahjalal University of Science & Technology 
				
			
		</div>
		</div>
		</div>
		</div>
		
		
		
	
		
				
		</div>
	</div>
</div>

        </div> <!-- End -->

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
