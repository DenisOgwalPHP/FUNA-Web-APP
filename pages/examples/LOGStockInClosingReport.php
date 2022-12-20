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
    <title>FUNA | Stock In General Report</title>
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
        <a href="../../DashBoard1.php" class="logo"><b>FUNA</b></a>
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
                  <span class="hidden-xs"><?php echo $_SESSION['user'];?></span>
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
                <li class="active"><a href="../../DashBoard1.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
            </li>
            <li>
              <a href="../forms/LOGRegionRegForm.php">
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
                <li><a href="LOGTopGeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="LOGTopRegionRegistrationReport.php"><i class="fa fa-circle-o"></i> Per Region</a></li>
              </ul>
            </li>
            <li>
              <a href="../forms/LOGTopStockInForm.php">
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
              <li><a href="../tables/LOGGeneralStockIn.php"><i class="fa fa-circle-o"></i> Regional</a></li>
               <li><a href="../tables/LOGMainOfficeStockIn.php"><i class="fa fa-circle-o"></i> Main Office</a></li>
                <li><a href="../tables/LOGShopStockIn.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../tables/LOGDateStockIn.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                <li><a href="../tables/LOGTSEStockIn.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">2</small>
              </a>
              <ul class="treeview-menu">
               <li><a href="LOGStockInDatereport.php"><i class="fa fa-circle-o"></i> Stock In</a></li>
               <li><a href="LOGStockInGeneralreport.php"><i class="fa fa-circle-o"></i> Curent Stock By Shop</a></li>
              </ul>
            </li>
               <li  class="active">
              <a href="LOGStockInClosingReport.php">
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
                <li><a href="../tables/LOGShopsales.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../tables/LOGSalesByTSE.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="LOGSalesClosingReport.php">
                <i class="fa fa-edit"></i> <span>Sales Closing Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
            
            <li>
              <a href="../forms/LOGStaffRegistration.php">
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
                <li><a href="../tables/LOGGeneralRegistration.php"><i class="fa fa-circle-o"></i> General</a></li>
                 <li><a href="../tables/LOGShopRegistration.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Staff Registration Report</span>
                <i class="fa fa-angle-left pull-right">2</i>
              </a>
              <ul class="treeview-menu">
                <li><a href="LOGGeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="LOGShopRegistrationReport.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
             <li>
              <a href="../forms/LOGexpenses.php">
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
            Stock General Report
            <small>#</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="LOGStockInClosingReport.php">Stock Report</a></li>
            <li class="active">Stock General Report</li>
          </ol>
        </section>

        <div class="pad margin no-print">
          <div class="callout callout-warning" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page displays General Summaries of Stock. Click the print button at the bottom of the report to Print.
          </div>
        </div>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i>FUNA, Inc.
                <small class="pull-right">Date: <?php echo"". date("Y/m/d");?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <h3 align="center">Stock Closing Report </h3> 
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <h4 align="left">Main Office</h4> 
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Date</th>
                      <th>Stock In</th>
                      <th>Transfer to Shops</th>
                      <th>closing Stock</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
		
					$dates=date("Y-m-d");
					  require_once('../../connect/connect.php');
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
					echo"<tr>";
					$dates1=date("Y-m-d");
					 echo"<td>".$dates1."</td>";
                       echo"<td>".$stockin."</td>";
                       echo"<td>".$totalstockevertoshop1."</td>";
                        echo"<td>".$closingstock."</td>";
						echo"</tr>";
					
					
				?></tbody>
                </table>
                 <h4 align="left">Shops Stock</h4> 
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>Shop</th>
                      <th>Latest Shop Stock Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					$totalStockbalance=0;
					$dates=date("Y-m-d");
					  //require_once('../../connect/connect.php');
                    $sales11 ="SELECT Date,ShopName,Balance,Denomination FROM `shopstockbalance` where Status='Latest'" ;
					$result11=mysqli_query($link,$sales11);
					$counter4=1;
					while($row11=mysqli_fetch_assoc($result11)){
					echo"<tr>";
					$moneyworths= $row11['Balance'] *$row11['Denomination'];
					 echo"<td>".$counter4."</td>";
					 echo"<td>".$row11['Date']."</td>";
                       echo"<td>".$row11['ShopName']."</td>";
                       echo"<td>".$moneyworths."</td>";
					  
						echo"</tr>";
						 $totalStockbalance+=$moneyworths;
						 $counter4++;
					}
					
				?></tbody>
                    <tfoot>
                      <tr>
                     <?php  $dates2=date("Y-m-d");
					 $sales11 ="SELECT SUM(MoneySold) AS Money7, SUM(DiscountedMoneySold) AS Money8 FROM `tsesales` where Date like '$dates2%'" ;
					$result11=mysqli_query($link,$sales11);
					while($row11=mysqli_fetch_assoc($result11)){?>
                       <th></th>
                        <th></th>
                        <th>Total Shop Stock:</th>
                        <th><?php echo"".$totalStockbalance ?></th>
                        <?php }?>
                      </tr>
                    </tfoot> 
                  </table>
                  
                   <h4 align="left">Summary</h4> 
              <table id="example1" class="table table-bordered table-striped">
                   <thead>
                      <tr>
                      <th>Main Office  Closing</th>
                      <th>Shops Closing</th>
                      <th>Stock In Hand</th>
                      <th>Sales Made</th>
                      </tr>
                    </tbody>
                      <tfoot>
                      <tr>
                        <th><?php echo"".$closingstock ?></th>
                        <th><?php echo"".$totalStockbalance ?></th>
                        <th><?php $grandtotal=$totalStockbalance+$closingstock;echo"".$grandtotal; ?></th>
                        <th><?php
						$dates5=date("Y-m-d");
						$sales14 ="SELECT SUM(MoneyRecieved) AS Money5 FROM `shopsales` where Date like '$dates5%'" ;
					$result14=mysqli_query($link,$sales14);
					$row14=mysqli_fetch_assoc($result14);
					$totalshopsales=$row14['Money5'];
					
					$sales15 ="SELECT SUM(MoneySold) AS Money6 FROM `tsesales` where Date like '$dates5%'" ;
					$result15=mysqli_query($link,$sales15);
					$row15=mysqli_fetch_assoc($result15);
					$totaltsepsales=$row15['Money6'];
					$finalsales=$totalshopsales+$totaltsepsales;
						 echo"".$finalsales ?></th>
                      </tr>
                    </tbody>
                  </table>
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="LOGStockInClosingReportPrint.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          <!--    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 FUNA<!-- <a href="http://almsaeedstudio.com">Almsaeed Studio</a>-->.</strong> All rights reserved.
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
