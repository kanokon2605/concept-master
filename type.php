<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/libs/css/style.css">
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <title>Admin Dashboard</title>
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
        <a class="navbar-brand" href="index.html">ADMIN</a>
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
                  <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
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
      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                <li class="nav-divider"> Menu </li>
                <li class="nav-item ">
                  <a href="location.php" class="nav-link  collapsed" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>location <span class="badge badge-success">6</span></a>
                  <div id="submenu-1" class="submenu collapse" style="">
                    <ul class="nav flex-column">
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="customer.php" class="nav-link collapsed"><i class="fa fa-fw fa-user-circle"></i>Customer</a>
                  <div id="submenu-2" class="submenu collapse" style="">
                    <ul class="nav flex-column">
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link collapsed active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Car management</a>
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
    
                            <div id="submenu-2" class="submenu collapse" style="">
                              <ul class="nav flex-column">
                              </ul>
                          
                              </ul>
                            </div>
                          </li>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 829px;"></div>
        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- end left sidebar -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- wrapper  -->
  <!-- ============================================================== -->
  <div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Type </h2>
              <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
              <div class="col-md-8">
       <?php 
        include"config.inc.php";
         if(isset($_GET['edit'])){
           $sql_edit = "SELECT * FROM c_type where id_type=$_GET[edit]";
                  $query_edit = $conn->query($sql_edit); 
                 $result_edit = $query_edit->fetch_assoc();
       }
       
       if(isset($_GET['del'])){
           $sql_del = "DELETE FROM c_type WHERE c_type.id_type = $_GET[del]";
                  $query_del = $conn->query($sql_del); 
      echo "<script type='text/javascript'>";
     //echo  "alert('สำเร็จ');";
      echo "window.location='type.php';";
      echo "</script>";
                
       }
       if(isset($_POST['add'])){
     include"config.inc.php";
     $sql = "INSERT INTO c_type (id_type, name_type) VALUES (',$_POST[id_type]', '$_POST[name_type]')";
             $query = mysqli_query($conn,$sql);
       
      echo "<script type='text/javascript'>";
      echo  "alert('สำเร็จ');";
      echo "window.location='type.php';";
      echo "</script>";
       
      }
      
    if(isset($_POST['edit'])){
    include"config.inc.php";
    $sql = "UPDATE c_type SET name_type = '$_POST[name_type]' WHERE c_type.id_type = $_POST[id_type]";
            $query = mysqli_query($conn,$sql);
       
      echo "<script type='text/javascript'>";
      echo  "alert('สำเร็จ');";
      echo "window.location='type.php';";
      echo "</script>";
       
      }
    ?>
                       <div class="box box-primary">
                                                            <!-- form start -->
                            <form  action="" method="post">
                            
                            <input name="id_type" type="hidden" value="<?=@$result_edit['id_type'];?>">
                                <div class="box-body">
                                   <div class="row">
                                   <div class="col-xs-6">
         <input type="text" name="name_type" class="form-control"  value="<?=@$result_edit['name_type'];?>" placeholder="name" required>
                                    </div>
                                    <div class="col-xs-3">
                                    <?php if(isset($_GET['edit'])){?>
                                     <input name="edit"  class="btn btn-info" type="submit" value="แก้ไข">
                                     <?php }else{?>
                                     <input name="add"class="btn btn-primary" type="submit" value="Add">
                                     
                                     <?php }?>
                                    </div>
                                    </div> <!-- row-->
                               </div><!-- /.box-body -->
                               </form>
                               </div><!-- /.box-primary-->

            
   

                 <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Table  </h3>  
                               
                            </div>
                                
                               
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    
                                        <tr>
                                            <th>No.</th>
                                            <th>Type</th>
                                            <th>Edit</th>
                                        </tr>
                                        
                                        
                                    </thead>
                                    <tbody>
                  <?php 
        include"config.inc.php";
        $i=0;
           $sql = "SELECT * FROM c_type ORDER BY id_type DESC";
                  $query = $conn->query($sql); 
                 while($result = $query->fetch_assoc()) {
      $i++;
          ?>
                                        <tr>
                                            <td><?=$i;?></td>
                                            <td><?=$result['name_type'];?></td>
<td>
<a href= "?del=<?=$result['id_type'];?>" class="btn btn-danger btn-sm"  onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> ลบ </a>
<a href="?edit=<?=$result['id_type'];?>" class="btn btn-info btn-sm" > แก้ไข </a>

</td>
                                         
                                         
                                         
                                         </tr>
                  <?php }?>
                                
                                    </tbody>
                                
                                </table>
              <!-- ============================================================== -->
              <!-- footer -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- end footer -->
              <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- end main wrapper  -->
          <!-- ============================================================== -->
          <!-- Optional JavaScript -->
          <!-- jquery 3.3.1  -->
          <div class="py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12"></div>
              </div>
            </div>
          </div>
          <div class="py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12"></div>
              </div>
            </div>
          </div>
          <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
          <!-- bootstap bundle js-->
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
          <!-- slimscroll js-->
          <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
          <!-- main js-->
          <script src="assets/libs/js/main-js.js"></script>
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>