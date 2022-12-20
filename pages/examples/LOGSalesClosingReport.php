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
    <title>FUNA | Sales General Report</title>
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
               <li>
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
          
          
            <li class="treeview active">
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
            Sales General Report
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="LOGSalesGeneralreport.php">Sales Report</a></li>
            <li class="active">Sales General Report</li>
          </ol>
        </section>

        <div class="pad margin no-print">
          <div class="callout callout-warning" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page displays General Summaries of Sales. Click the print button at the bottom of the report to Print.
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
            <h3 align="center">Sales Closing Report </h3> 
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>Shop</th>
                      <th>UnDiscounted Ammount</th>
                      <th>Discounted Payment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
		
					$dates=date("Y-m-d");
					  require_once('../../connect/connect.php');
                    $sales8 ="SELECT Date,ShopName, SUM(MoneyRecieved) AS Money, SUM(DiscountedMoneyRecieved) AS Money2 FROM `shopsales`  where date like '$dates%'Group By ShopName " ;
					$result8=mysqli_query($link,$sales8);
					$counter4=1;
					while($row8=mysqli_fetch_assoc($result8)){
	
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
					  echo  "<td>".$row8['ShopName']."</td>";
					 echo  "<td>".$row8['Money']."</td>";
					  echo  "<td>".$row8['Money2']."</td>";
					
                   echo" </tr>" ;
					}
				   $counter4++;  
                     echo" <tr>";
					 $dates1=date("Y-m-d");
					 $sales10 ="SELECT SUM(MoneyRecieved) AS Money5, SUM(DiscountedMoneyRecieved) AS Money6 FROM `shopsales`  where date like '$dates1%'" ;
					$result10=mysqli_query($link,$sales10);
					while($row10=mysqli_fetch_assoc($result10)){
	
                      echo" <th>".''."</th>";
                       echo"<th>".''."</th>";
                       echo"<th>".'Totals'."</th>";
                        echo"<th>".'Sales: '.$row10['Money5']."</th>";
                        echo"<th>".'Recieved: '.$row10['Money6']."</th>";
						echo"</tr>";
					}
					 echo"<tr>";
                     echo"<th style='width: 10px'>".''."</th>";
                     echo"<th>".''."</th>";
                     echo"<th>".''."</th>";
                     echo"<th>".''."</th>";
                     echo"<th>".''."</th>";
                     echo" </tr>";

					 echo"<tr>";
                     echo"<th style='width: 10px'>".'#'."</th>";
                     echo"<th>".'Date'."</th>";
                     echo"<th>".'TSE No.'."</th>";
                     echo"<th>".'UnDiscounted Ammount'."</th>";
                     echo"<th>".'Discounted Payment'."</th>";
                     echo" </tr>";
				
                  $sales9 ="SELECT Date,TSENo,SUM(MoneySold) AS money3,SUM(DiscountedMoneySold) As Money4 FROM `tsesales` where  Date like'$dates%' and ShopApproval !='Pending' Group By TSENO ";
					$result9=mysqli_query($link,$sales9);
					$counter4=1;
					while($row9=mysqli_fetch_assoc($result9)){
	
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row9['Date']."</td>";
                     echo  "<td>".$row9['TSENo']."</td>";
					 echo  "<td>".$row9['money3']."</td>";
                     echo  "<td>".$row9['Money4']."</td>";
					 
                   echo" </tr>" ;
				   $counter4++;
					   }
					?>
                    </tbody>
                     <tfoot>
                      <tr>
                     <?php  $dates2=date("Y-m-d");
					 $sales12 ="SELECT SUM(MoneySold) AS Money9, SUM(DiscountedMoneySold) AS Money10 FROM `tsesales` where Date like '$dates2%'" ;
					$result12=mysqli_query($link,$sales12);
					while($row12=mysqli_fetch_assoc($result12)){
						$undiscountedshop=$row12['Money9'];
						$discountedshop=$row12['Money10'];
					}
					$dates1=date("Y-m-d");
				$sales13 ="SELECT SUM(MoneyRecieved) AS Money11, SUM(DiscountedMoneyRecieved) AS Money12 FROM `shopsales`where date like '$dates1%'" ;
					$result13=mysqli_query($link,$sales13);
					while($row13=mysqli_fetch_assoc($result13)){
						$undiscountedshop1=$row13['Money11'];
						$discountedshop1=$row13['Money12'];
					}
	$grandtotalundiscounted=$undiscountedshop+$undiscountedshop1;
	$grandtotaldiscounted=$discountedshop+$discountedshop1;
					?>
                       <th></th>
                        <th></th>
                        <th>Grand Totals</th>
                        <th>Sales:<?php echo " ".$grandtotalundiscounted;?></th>
                        <th>Recieved:<?php echo " ".$grandtotaldiscounted;?></th>
                      </tr>
                    </tfoot>
                    <tfoot>
                      <tr>
                     <?php  $dates2=date("Y-m-d");
					 $sales11 ="SELECT SUM(MoneySold) AS Money7, SUM(DiscountedMoneySold) AS Money8 FROM `tsesales` where Date like '$dates2%'" ;
					$result11=mysqli_query($link,$sales11);
					while($row11=mysqli_fetch_assoc($result11)){?>
                       <th></th>
                        <th></th>
                        <th>Totals</th>
                        <th>Sales:<?php echo " ".$row11['Money7'];?></th>
                        <th>Recieved:<?php echo " ".$row11['Money8'];?></th>
                        <?php }?>
                      </tr>
                    </tfoot>
                    
                  </table>
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="LOGSalesClosingReportPrint.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
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
