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
    <title>FUNA | ADMIN</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-yellow">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="DashBoard4.php" class="logo"><b>FUNA</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $_SESSION['user'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                     <?php echo $_SESSION['user'];?>
                      <small><?php echo $_SESSION['UserType'];?></small>
                    </p>
                  </li>
                 
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
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
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="DashBoard4.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
            </li>
             <li>
              <a href="pages/forms/ShopAddSales.php">
                <i class="fa fa-calendar"></i> <span>Add Sales</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            
             <li>
              <a href="pages/tables/ShopApproveSales.php">
                <i class="fa fa-calendar"></i> <span>Approve Sales</span> <small class="label pull-right bg-yellow">Approve</small>
              </a>
            </li>
            
             <li>
              <a href="pages/forms/ShopAddStock.php">
                <i class="fa fa-calendar"></i> <span>Add Stock To TSE</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            <li>
              <a href="pages/forms/Shopexpenses.php">
                <i class="fa fa-calendar"></i> <span>Add Expenses</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
              <li>
              <a href="pages/tables/ShopApproveStock.php">
                <i class="fa fa-calendar"></i> <span>Approve Stock</span> <small class="label pull-right bg-yellow">Approve</small>
              </a>
            </li>
            
            <li class="treeview">
              <a href="pages/examples/ShopStockReport.php">
                <i class="fa fa-pie-chart"></i>
                <span>Shop Stock Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
          
          
            <li class="treeview">
              <a href="pages/examples/ShopSalesReport.php">
                <i class="fa fa-edit"></i> <span>Shop Sales Report</span>
                 <small class="label pull-right bg-blue">View</small>
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
            Dashboard
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="DashBoard4.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Approved Sales</span>
                  <span class="info-box-number"><small>UGX. </small><?php require('includes/ShopApprovedSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales Pending Approval</span>
                  <span class="info-box-number"><small>UGX. </small> </small><?php require('includes/ShopPendingSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> Discounted Sales Pending Approval</span>
                  <span class="info-box-number"><small>UGX. </small> <?php require('includes/ShopDiscountedPendingSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Discounted Sales Approved</span>
                  <span class="info-box-number"><small>UGX. </small> <?php require('includes/ShopDiscountedSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

         <div class="row">
            <div class="col-md-12">
              <div class="box box-warning">
                
                 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>Total Stock At Shop</th>
                      <th>Total Stock With TSEs</th>
                      <th>Over All Stock(At Hand)</th>
                      <th>Shop Sales</th>
                      <th>Tse Sales </th>
                      <th>Over All Sales</th>
                      </tr>
                    </thead>
                    <tbody>
                   
                    <td><?php $totalStockbalance=0;
					$dates=date("Y-m-d");
					$shops=$_SESSION['Shop'];
					  //require_once('../../connect/connect.php');
                    $sales11 ="SELECT Balance,Denomination FROM `shopstockbalance` where Status='Latest' and ShopName='$shops'" ;
					$result11=mysqli_query($link,$sales11);
					$counter4=1;
					while($row11=mysqli_fetch_assoc($result11)){
					$moneyworths= $row11['Balance'] *$row11['Denomination'];
						 $totalStockbalance+=$moneyworths;
						 $counter4++;
					}
					echo"".$totalStockbalance;
					?></td>
                    <td><?php $totalStockbalance1=0;
					$dates=date("Y-m-d");
					  //require_once('../../connect/connect.php');
                    $sales12 ="SELECT balance,Denomination FROM `tsestockbalance`,`staffregistration` where Status='Latest' and staffregistration.StaffNo=tsestockbalance.TSENo and Shop='$shops'" ;
					$result12=mysqli_query($link,$sales12);
					$counter4=1;
					while($row12=mysqli_fetch_assoc($result12)){
					$moneyworths1= $row12['balance'] *$row12['Denomination'];
						 $totalStockbalance1+=$moneyworths1;
						 $counter4++;
					}
					echo"".$totalStockbalance1;
					?></td>
                    <td><?php $overallstock=$totalStockbalance1+$totalStockbalance;echo"".$overallstock; ?></td>
                    <td><?php $dates1=date("Y-m-d");
					$shopsales=0;
					 $sales10 ="SELECT SUM(MoneyRecieved) AS Money5 FROM `shopsales`  where date like '$dates1%' and ShopName='$shops'" ;
					$result10=mysqli_query($link,$sales10);
					while($row10=mysqli_fetch_assoc($result10)){
                      $shopsales+=$row10['Money5'];
					}echo"".$shopsales;
					?></td>
                    <td><?php  
					$Totsltsesales=0;
					$sales9 ="SELECT SUM(MoneySold) AS money3 FROM `tsesales`,`staffregistration` where  tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO and Shop='$shops'";
					$result9=mysqli_query($link,$sales9);
					$counter4=1;
					while($row9=mysqli_fetch_assoc($result9)){
                     $Totsltsesales+=$row9['money3'];
                  
				   $counter4++;
					   } echo"".$Totsltsesales;
					?></td>
                    <td><?php $oversales=$Totsltsesales+$shopsales; echo"".$oversales; ?></td>
                    </tbody>
                    </table>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest TSE Sales</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding"> 
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                       <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>TSE No.</th>
                      <th>Un Discounted Ammount Sold</th>
                      <th>Discounted Ammount Sold</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php
//require_once('connect\connect.php');
$dates=date("Y-m-d");
$shops1=$_SESSION['Shop'];
$moneydiscounted=0;
$moneyundicounted=0;
$sales4 ="SELECT TSENO,tsesales.Date,SUM(MoneySold) As Money1,SUM(DiscountedMoneySold) As Money2 FROM `tsesales`,`staffregistration` where tsesales.Date like '$dates%' and staffregistration.Shop='$shops1' and staffregistration.StaffNo=tsesales.TSENO";
$result4=mysqli_query($link,$sales4);
$counter=1;
while($row4=mysqli_fetch_assoc($result4)){
	
                    echo" <tr>";
                     echo "<td>".$counter."</td>";
                     echo  "<td>".$row4['Date']."</td>";
                     echo  "<td>".$row4['TSENO']."</td>";
                     echo "<td>".$row4['Money1']."</td>";
                     echo "<td>".$row4['Money2']."</td>";
                   echo" </tr>" ;
				   $counter++;
				   $moneydiscounted+=$row4['Money2'];
				   $moneyundicounted+=$row4['Money1'];
				   
}
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th>Un Discounted</th>
                         <th><?php echo "".$moneyundicounted;?></th>
                        <th>Discounted</th>
                        <th><?php echo "".$moneydiscounted; ?></th>
                        
                      </tr>
                    </tfoot>
                  </table>
              		</div><!-- /.box -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          
 			<div class="col-md-4">
              <div class="box box-warning with-border">
                <div class="box-header ">
                  <h3 class="box-title">Logged In Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table id="example2" class="table table-bordered table-hover">
                    <thead>
                       <tr>
                     <th style="width: 10px">#</th>
                      <th>Staff No</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
//require_once('connect\connect.php');
$sales7 ="SELECT StaffNo,Status FROM `login` where Status='Online'";
$result7=mysqli_query($link,$sales7);
$counter3=1;
while($row7=mysqli_fetch_assoc($result7)){
	
                    echo" <tr>";
                     echo "<td>".$counter3."</td>";
                     echo  "<td>".$row7['StaffNo']."</td>";
                     echo  "<td>".$row7['Status']."</td>";
                    
                   echo" </tr>" ;
				   $counter3++;
}
					?>
                    </tbody>
                    <tfoot>
                      <tr> 
                       <th></th>
                        <th>Total users</th>
                        <th><?php $totalpending1=$counter3-1; echo "".$totalpending1; ?></th>      
                      </tr>
                    </tfoot>
                  </table>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
       </div>
          <div class="row">
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-warning ">
                 <div class="box-header with-border">
                  <h3 class="box-title">Latest TSE Stock Levels</h3>
                </div><!-- /.box-header -->
                 <div class="box-body no-padding"> 
                 <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                       <tr>
                     <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>TSE No.</th>
                      <th>Balance/Quantity(Pieces)</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
//require_once('connect\connect.php');
$dates1=date("Y-m-d");
$shops=$_SESSION['Shop'];
$sales6 ="SELECT tsestockbalance.Date,TSENo,balance FROM `tsestockbalance`,`staffregistration` where tsestockbalance.Date like '$dates1%' and Status='Latest' and staffregistration.Shop='$shops' and tsestockbalance.TSENo=staffregistration.StaffNo";
$result6=mysqli_query($link,$sales6);
$counter2=1;
while($row6=mysqli_fetch_assoc($result6)){
	$moneycount=0;
	 
                    echo" <tr>";
                     echo "<td>".$counter2."</td>";
                     echo  "<td>".$row6['Date']."</td>";
                     echo "<td>".$row6['TSENo']."</td>";
                     echo "<td>".$row6['balance']."</td>";
                   echo" </tr>";
				   $counter2++;
				 
}
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th></th>
                       <th></th>
                       <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                 
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>