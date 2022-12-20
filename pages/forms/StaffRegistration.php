<?php
session_start();
if(isset($_SESSION['user'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>FUNA | Registration</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-yellow">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../DashBoard.php" class="logo"><b>FUNA</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"> <?php echo $_SESSION['user'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $_SESSION['user'];?>
                      <small><?php echo $_SESSION['UserType'];?></small>
                    </p>
                  </li>
                 
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
               <p><?php echo $_SESSION['user'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i><?php echo $_SESSION['Shop'];?></a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="../../DashBoard.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
            </li>
           <li>
              <a href="RegionRegForm.php">
                <i class="fa fa-calendar"></i> <span>Shop Registration</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            
              <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Shop Registration Report</span>
                <span class="label label-primary pull-right">2</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../examples/TopGeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../examples/TopRegionRegistrationReport.php"><i class="fa fa-circle-o"></i> Per Region</a></li>
              </ul>
            </li>
            <li>
              <a href="TopStockInForm.php">
                <i class="fa fa-th"></i> <span>Stock In</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Stock Records</span>
                 <small class="label pull-right bg-red">5</small>
              </a>
              <ul class="treeview-menu">
              <li><a href="../tables/GeneralStockIn.php"><i class="fa fa-circle-o"></i> Regional</a></li>
               <li><a href="../tables/MainOfficeStockIn.php"><i class="fa fa-circle-o"></i> Main Office</a></li>
                <li><a href="../tables/ShopStockIn.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../tables/DateStockIn.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                <li><a href="../tables/TSEStockIn.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">2</small>
              </a>
              <ul class="treeview-menu">
               <li><a href="../examples/StockInDatereport.php"><i class="fa fa-circle-o"></i> Stock In</a></li>
               <li><a href="../examples/StockInGeneralreport.php"><i class="fa fa-circle-o"></i> Curent Stock By Shop</a></li>
              </ul>
            </li>
               <li>
              <a href="../examples/StockInClosingReport.php">
                <i class="fa fa-th"></i> <span>Stock Closing Report </span> <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Sales Records</span>
                 <small class="label pull-right bg-red">2</small>
              </a>
              <ul class="treeview-menu">
                <li><a href="../tables/Shopsales.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../tables/SalesByTSE.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="../examples/SalesClosingReport.php">
                <i class="fa fa-edit"></i> <span>Sales Closing Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
            
            <li class="active">
              <a href="StaffRegistration.php">
                <i class="fa fa-calendar"></i> <span>Staff Registration</span>
                <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Staff Registration Record</span>
                <i class="fa fa-angle-left pull-right">2</i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../tables/GeneralRegistration.php"><i class="fa fa-circle-o"></i> General</a></li>
                 <li><a href="../tables/ShopRegistration.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Staff Registration Report</span>
                <i class="fa fa-angle-left pull-right">2</i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../examples/GeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../examples/ShopRegistrationReport.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
             <li>
              <a href="expenses.php">
                <i class="fa fa-th"></i> <span>Expenses</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Staff registration Form
            <small>Additions</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="staffRegistration.php">Registration</a></li>
            <li class="active">registration Form</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Add Staff</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="../../includes/InsertStaff.php" method="post">
                  <div class="box-body">
                   <div class="form-group">
                      <label for="exampleInputPassword1"> Staff Type</label>
                      <Select size="1" name="stafftype" id="region"class="form-control">
                   <option value="">Choose Staff Type</option>
                    <option value="Top">Top</option>
                    <option value="Logistics">Logistics</option>
                     <option value="Regional Manager">Regional Manager</option>
                     <option value="Accounts Manager">Accounts Manager</option>
                     <option value="Shop Attendant">Shop Attendant</option>
                     <option value="TSE">TSE</option>
                   </Select>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Shop</label>
                      <Select size="1" name="Shops" class="form-control">
                   <option value="">Choose Shop</option>
                   <?php
                 require_once('../../connect/connect.php');
					$sales9 ="SELECT ShopName FROM `shopmapping`";
					$result9=mysqli_query($link,$sales9);
					while($row9=mysqli_fetch_assoc($result9)){
                     echo '<option value="'.$row9['ShopName'].'">'.$row9['ShopName'].'</option>';
					}
					?>
                   </Select>
                   </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Staff Name</label>
                      <input type="text" class="form-control" name="staffname" placeholder="Staff full names">
                    </div>
     
                    <div class="form-group">
                    <label for="exampleInputPassword1"> Identification No</label>
                    <Select size="1" name="Idtype" class="form-control">
                    <option value="">Choose Identification Type</option>
                    <option value="National ID">National ID</option>
                    <option value="PassPort">PassPort</option>
                     <option value="Driving Permit">Driving Permit</option>
                     <option value="Other">Other</option>
                     </Select>
                      <input type="text" class="form-control" name="NIN" placeholder="InPut ID Number">
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
              </div>
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Staff Registration Record</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                       <th style="width: 10px">#</th>
                      <th>Date Registered</th>
                      <th>Staff No</th>
                      <th>Staff Name</th>
                      <th>Position</th>
                      <th>Shop </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
					//require_once('../../connect/connect.php');
					$sales9 ="SELECT Date,StaffNo,StaffName,StaffType,Shop FROM `staffregistration`";
					$result9=mysqli_query($link,$sales9);
					$counter5=1;
					while($row9=mysqli_fetch_assoc($result9)){
	
                    echo" <tr>";
                     echo "<td>".$counter5."</td>";
                     echo  "<td>".$row9['Date']."</td>";
                     echo  "<td>".$row9['StaffNo']."</td>";
					 echo  "<td>".$row9['StaffName']."</td>";
					 echo  "<td>".$row9['StaffType']."</td>";
					  echo  "<td>".$row9['Shop']."</td>";
                   echo" </tr>" ;
				   $counter5++;
}
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Staff</th>
                        <th><?php $totalstaff= $counter5-1; echo "". $totalstaff?></th>
                         <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 FUNA <!--<a href="http://almsaeedstudio.com">Almsaeed Studio</a>-->.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
