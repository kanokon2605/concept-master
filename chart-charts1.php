<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <title>Admin Dashboard</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
            $( function() {
              $( "#datepicker" ).datepicker();
            } );
            </script>
    
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
                <a class="navbar-brand" href="index.html">admin</a>
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
                    <d<div class="collapse navbar-collapse" id="navbarNav">
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
                            <a href="customer.php" class="nav-link  collapsed"><i class="fa fa-fw fa-user-circle"></i>Customer</a>
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
                            <a class="nav-link collapsed active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Rent</a>
                            <div id="submenu-4" class="submenu collapse" style="">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="chart-charts1.php">Rent Info </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="nav-item">
                          
                            <div id="submenu-2" class="submenu collapse" style="">
                              <ul class="nav flex-column">
                              </ul>
                          
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
                            <h2 class="pageheader-title">Rent Info</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Rent Info</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Rent Table</h5>
                        <form class="example" action="/action_page.php">
                            <p>date：<input type="datetime" placeholder="Search.." id="datepicker"><button class="w3-button w3-border w3-tiny">Search</button></p>
                           
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>IDname</th>
                                            <th>Registration</th>                                          
                                            
                                            <th>location</th>
                                            <th>Pick Date</th>                                          
                                            <th>Return Date</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 

                                         
                                          include"config.inc.php";
                                          $i=0;
                                            $sql = "SELECT * FROM c_bill ORDER BY b_id DESC";
                                                    $query = $conn->query($sql); 
                                                  while($result = $query->fetch_assoc()) {
                                        $i++;
                                            ?>
                                                            <tr>
                                                                <td><?=$i;?></td>
                                                              
                                                                 
                                                            <td>
                                                              <a <?=$result['b_id'];?>">
                                                             <?=$result['date']; ?>
                                                              </a>
                                                            </td>
                                                            <td><?=$result['b_name'];?></td>
                                                            <td><?=$result['ref_id'];?></td>
                                                            <td><?=$result['car_regis'];?></td>
                                                          
                                                            <td><?=$result['b_location'];?></td>
                                                            <td><?=$result['filter_date'];?></td>
                                                            <td><?=$result['filter_date2'];?></td>
                                                            <td><?=$result['sum1'];?></td>
                                                            
                                                            
                                                             
                                                            
                                      <?php }?>
                                                    
                                                        </tbody>
                                                    
                                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

 
</html>