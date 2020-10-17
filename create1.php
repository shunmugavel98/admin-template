<?php require_once 'db.php'; ?>

<?php
include('includes/header.php');
include('includes/navbar.php');
include("auth_session.php");
include("db.php");
?>

   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
   <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
			

         

          
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
				Hey, <?php echo $_SESSION['username']; ?>!</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>



        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
 

    <form action="action_create1.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <div class="form-group">
			<tr>
                <th>First Name</th>
                <td><input type="text" name="fname" class="form-control" placeholder="First Name" /></td>
            </tr>     
			</div>
			<div class="form-group">
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" class="form-control" placeholder="Last Name" /></td>
            </tr>
			</div>
            <div class="form-group">
			<tr>
                <th>Age</th>
                <td><input type="text" name="age" class="form-control" placeholder="Age" /></td>
            </tr>
			</div>
            <div class="form-group">
			<tr>
                <th>Contact</th>
                <td><input type="text" name="contact" class="form-control" placeholder="Contact" /></td>
            </tr>
			</div>
			<div class="form-group">
			<tr>
                <th>Gender</th>
				<td><input type="radio" name="gender" value="male">Male</td>
                <td><input type="radio" name="gender" value="female">Female</td>
                </tr>
			</div>
            <tr>
                <td><button type="submit">Save</button></td>
                <td><a href="index3.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 

 
	
                </div>
            </div>        
        </div>
    </div>
	  </div>
    </div>
 </div>
    </div>
	
	
	



	
	
	
	
	



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

  </div>
  <!-- End of Page Wrapper -->

 <?php
include('includes/scripts.php');
include('includes/footer.php');

?>