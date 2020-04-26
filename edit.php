<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">amdin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                             
                                <a class="dropdown-item" href="..\cardoor\index.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
          <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                  <li class="nav-divider"> Menu </li>
                    <li class="nav-item " >
                      <a href="location.php"  class="nav-link  collapsed" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>Location <span class="badge badge-success">6</span></a>
                      <div id="submenu-1" class="submenu collapse" style="">
                        <ul class="nav flex-column">
                        </ul>
                      </div>
                    </li>
                  <li class="nav-item">
                    <a href="customer.php"class="nav-link  collapsed"><i class="fa fa-fw fa-user-circle"></i>Customer</a>
                    <div id="submenu-2" class="submenu collapse" style="">
                      <ul class="nav flex-column">
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Car management</a>
                    <div id="submenu-3" class="submenu collapse" style="">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="type.php">Type</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="brand.php">Brand</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="showcar.php">Car Data</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Rent</a>
                    <div id="submenu-4" class="submenu collapse" style="">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="chart-charts1.php">Rent Info </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  
                    <div id="submenu-5" class="submenu collapse" style="">
                      <ul class="nav flex-column">
                      </ul>
                    </div>
                  </li>
                  
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Car Edit</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Car Table</li>
                                    </ol>
                                   
                                       
                                  
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                        
                                            
                  
                                   
                                                
<?php
include"c.php";

$car_id = $_GET['car_id'];
$sql = mysqli_query($c,"SELECT * FROM cartable WHERE car_id = '".$car_id."' ");
$row = mysqli_fetch_assoc($sql);
?>
<table border="1" align="center">
<form action="save_edit.php?car_id=<?=$row['car_id']; ?>" method="post">
		<tr>
			<td>Registration : </td>
			<td>
				<input type="text" name="car_regis"
				value="<?=$row['car_regis']; ?>">
			</td>
		</tr>
		<tr>
			<td>Name Car : </td>
			<td>
				<input type="text" name="car_name"
				value="<?=$row['car_name']; ?>">
			</td>
		</tr>
		<tr>
			<td>Type : </td>
			<td>
				<input type="text" name="car_type"
				value="<?=$row['car_type']; ?>">
			</td>
		</tr>
		<tr>
			<td>Price : </td>
			<td>
				<input type="text" name="car_price"
				value="<?=$row['car_price']; ?>">
			</td>
    </tr>
    <tr>
			<td>Img : </td>
			<td>
				<input type="text" name="car_img"
				value="<?=$row['car_img'];?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Save">
			</td>
    </tr>
</form>
</table>

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>

 
</html>