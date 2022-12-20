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
      
      <header class="main-header" style="">
        <!-- Logo -->
        <a href="DashBoard.php" class="logo"><b>FUNA</b></a>
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
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="DashBoard.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
            </li>
            
             <li>
              <a href="pages/forms/RegionRegForm.php">
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
                <li><a href="pages/examples/TopGeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/examples/TopRegionRegistrationReport.php"><i class="fa fa-circle-o"></i> Per Region</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/forms/TopStockInForm.php">
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
              <li><a href="pages/tables/GeneralStockIn.php"><i class="fa fa-circle-o"></i> Regional</a></li>
               <li><a href="pages/tables/MainOfficeStockIn.php"><i class="fa fa-circle-o"></i> Main Office</a></li>
                <li><a href="pages/tables/ShopStockIn.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="pages/tables/DateStockIn.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                <li><a href="pages/tables/TSEStockIn.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">2</small>
              </a>
              <ul class="treeview-menu">
               <li><a href="pages/examples/StockInDatereport.php"><i class="fa fa-circle-o"></i> Stock In</a></li>
               <li><a href="pages/examples/StockInGeneralreport.php"><i class="fa fa-circle-o"></i> Curent Stock By Shop</a></li>
              </ul>
            </li>
               <li>
              <a href="pages/examples/StockInClosingReport.php">
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
                <li><a href="pages/tables/Shopsales.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="pages/tables/SalesByTSE.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="pages/examples/SalesClosingReport.php">
                <i class="fa fa-edit"></i> <span>Sales Closing Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
            
            <li>
              <a href="pages/forms/StaffRegistration.php">
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
                <li><a href="pages/tables/GeneralRegistration.php"><i class="fa fa-circle-o"></i> General</a></li>
                 <li><a href="pages/tables/ShopRegistration.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Staff Registration Report</span>
                <i class="fa fa-angle-left pull-right">2</i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/GeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/examples/ShopRegistrationReport.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
             <li>
              <a href="pages/forms/expenses.php">
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
            Dashboard
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="DashBoard1.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
                  <span class="info-box-number"><small>UGX. </small><?php require('includes/ApprovedSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales Pending Approval</span>
                  <span class="info-box-number"><small>UGX. </small> </small><?php require('includes/PendingSales.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> Shop Stock Pending Approval</span>
                  <span class="info-box-number"><small>UGX. </small> <?php require('includes/ShopStockPending.php')?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">TSE Stock Pending Approval</span>
                  <span class="info-box-number"><small>UGX. </small> <?php require('includes/TseStockPending.php')?></span>
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
                      <th>Main Office Stock</th>
                      <th>Total Stock At Shops</th>
                      <th>Total Stock With TSEs</th>
                      <th>Over All Stock(At Hand)</th>
                      <th>Shop Sales</th>
                      <th>Tse Sales </th>
                      <th>Over All Sales</th>
                      </tr>
                    </thead>
                    <tbody>
                    <td><?php $dates=date("Y-m-d");
					 // require_once('../../connect/connect.php');
                    $sales8 ="SELECT SUM(MoneyWorth) AS Money FROM `mainofficestock`" ;
					$result8=mysqli_query($link,$sales8);
					$row8=mysqli_fetch_assoc($result8);
					$totalstockever=$row8['Money'];
					
					 $sales9 ="SELECT SUM(MoneyWorth) AS Money1 FROM `shopstock`" ;
					$result9=mysqli_query($link,$sales9);
					$row9=mysqli_fetch_assoc($result9);
					$totalstockevertoshop=$row9['Money1'];
					
					$stockin=$totalstockever-$totalstockevertoshop;
					
					$sales10 ="SELECT SUM(MoneyWorth) AS Money2 FROM `shopstock` where Date like '$dates%'" ;
					$result10=mysqli_query($link,$sales10);
					$row10=mysqli_fetch_assoc($result10);
					$totalstockevertoshop1=$row10['Money2'];
					
					$closingstock=$stockin-$totalstockevertoshop1;
					echo"".$closingstock;
                    ?></td>
                    <td><?php $totalStockbalance=0;
					$dates=date("Y-m-d");
					  //require_once('../../connect/connect.php');
                    $sales11 ="SELECT Balance,Denomination FROM `shopstockbalance` where Status='Latest'" ;
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
                    $sales12 ="SELECT balance,Denomination FROM `tsestockbalance` where Status='Latest'" ;
					$result12=mysqli_query($link,$sales12);
					$counter4=1;
					while($row12=mysqli_fetch_assoc($result12)){
					$moneyworths1= $row12['balance'] *$row12['Denomination'];
						 $totalStockbalance1+=$moneyworths1;
						 $counter4++;
					}
					echo"".$totalStockbalance1;
					?></td>
                    <td><?php $overallstock=$closingstock+$totalStockbalance1+$totalStockbalance;echo"".$overallstock; ?></td>
                    <td><?php $dates1=date("Y-m-d");
					$shopsales=0;
					 $sales10 ="SELECT SUM(MoneyRecieved) AS Money5 FROM `shopsales`  where date like '$dates1%'" ;
					$result10=mysqli_query($link,$sales10);
					while($row10=mysqli_fetch_assoc($result10)){
                      $shopsales+=$row10['Money5'];
					}echo"".$shopsales;
					?></td>
                    <td><?php  
					$Totsltsesales=0;
					$sales9 ="SELECT SUM(MoneySold) AS money3 FROM `tsesales` where  Date like'$dates%'";
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
                  <h3 class="box-title">Sales</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding"> 
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>Shop Name</th>
                      <th>Staff No</th>
                      <th>Denomination</th>
                      <th>Quantity(Pieces)</th>
                      <th>Money Recieved</th>
                      <th>Approved By</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
$dates=date("Y-m-d");
					  //require_once('../../connect/connect.php');
                  $sales8 ="SELECT Date,ShopName,MoneyRecieved,StaffNo,ApprovedBy,Denomination,Quantity FROM `shopsales` where Date like '$dates%' and ApprovedBy !='Pending'  LIMIT 10";
$result8=mysqli_query($link,$sales8);
$counter4=1;
$firstshop10=0;
while($row8=mysqli_fetch_assoc($result8)){
	
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
                     echo  "<td>".$row8['ShopName']."</td>";
					  echo  "<td>".$row8['StaffNo']."</td>";
					   echo  "<td>".$row8['Denomination']."</td>";
					    echo  "<td>".$row8['Quantity']."</td>";
					 echo  "<td>".$row8['MoneyRecieved']."</td>";
					  echo  "<td>".$row8['ApprovedBy']."</td>";
                   echo" </tr>" ;
				  $firstshop10+=$row8['MoneyRecieved'];
				   $counter4++;
				   
}
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>...</th>
                        <th></th>
                        <th></th>
                         <th></th>
                        <th>Total Money Sold</th>
                        <th><?php
						
						 echo "".$firstshop10; ?></th>
                        
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
                  <h3 class="box-title">Users Pending Approval</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                       <tr>
                     <th style="width: 8px">#</th>
                      <th>Staff No.</th> 
                      <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
//require_once('connect\connect.php');
$sales5 ="SELECT StaffNo,ApprovalStatus FROM `accountcreation` where ApprovalStatus='Pending'";
$result5=mysqli_query($link,$sales5);
$counter1=1;
while($row5=mysqli_fetch_assoc($result5)){
	
                    echo" <tr>";
                     echo "<td>".$counter1."</td>";
                     echo  "<td>".$row5['StaffNo']."</td>";
					  $salesid2=$row5['StaffNo'];
                    echo'<td><form method="get" ><a href="ShopApproveSales.php?salesid='.$salesid2.'"><button type="submit" name="status"  value="'.$salesid2.'" class="btn btn-primary pull-center">Approve</button></a></form></td>';
					
                   echo" </tr>" ;
				   $counter1++;
}
					?>
                     <?php
						 $staffno= $_SESSION['UserName'];
						 if(isset($_GET['status'])){
						$salesid3=$_GET['status'];
                          if(isset($salesid3)){
				$sales20 ="UPDATE accountcreation SET ApprovalStatus ='Approved' Where StaffNo='$salesid3'";
				mysqli_query($link,$sales20); 
				echo '<script type="application/javascript">';
				echo'alert("Successfully Approved");';
				echo'window.location.href="DashBoard.php";';
				echo '</script>';
						  }
						 }?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th></th>
                        <th>Total Pending</th>
                        <th><?php $totalpending=$counter1-1; echo "".$totalpending; ?></th>
                         <th></th>
                         
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
                  <h3 class="box-title">Latest Stock Balances</h3>
                </div><!-- /.box-header -->
                 <div class="box-body no-padding"> 
                 <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                   
                      <tr>
                       <th style="width: 10px">#</th>
                       <th>Date</th>
                      <th>Shop Name</th>
                      <th>Denomination</th>
                      <th>Balance(Pieces)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

//require_once('../../connect/connect.php');
$sales7 ="SELECT Date,ShopName,Denomination,Balance FROM `shopstockbalance` where Status='Latest'";
$result7=mysqli_query($link,$sales7);
$counter3=1;
while($row7=mysqli_fetch_assoc($result7)){
	
                    echo" <tr>";
                     echo "<td>".$counter3."</td>";
                     echo  "<td>".$row7['Date']."</td>";
					 echo  "<td>".$row7['ShopName']."</td>";
                     echo  "<td>".$row7['Denomination']."</td>";
					 echo  "<td>".$row7['Balance']."</td>";
                   echo" </tr>" ;
				   $counter3++;
}

					?>
                       
                  
                    </tbody>
                    <tfoot>
                      <tr>
                         <th>....</th>
                        <th>...</th>
                        <th>...</th>
                        <th>...</th>
                        <th>...</th>
                      </tr>
                    </tfoot>
                  </table>
                  
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Users Logged In</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
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
</section>
</div>
       <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 FUNA <!--<a href="http://almsaeedstudio.com">Almsaeed Studio</a>-->.</strong> All rights reserved.
      </footer>
</div>
    <!-- ./wrapper -->

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