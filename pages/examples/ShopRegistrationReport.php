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
    <title>FUNA | Shop registration Report</title>
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
                  <span class="hidden-xs"><?php echo $_SESSION['user'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                     <?php echo $_SESSION['user'];?>
                      <small><?php echo $_SESSION['UserType'];?>r</small>
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
              <a href="../forms/RegionRegForm.php">
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
                <li><a href="TopGeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="TopRegionRegistrationReport.php"><i class="fa fa-circle-o"></i> Per Region</a></li>
              </ul>
            </li>
            <li>
              <a href="../forms/TopStockInForm.php">
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
               <li><a href="StockInDatereport.php"><i class="fa fa-circle-o"></i> Stock In</a></li>
               <li><a href="StockInGeneralreport.php"><i class="fa fa-circle-o"></i> Curent Stock By Shop</a></li>
              </ul>
            </li>
               <li>
              <a href="StockInClosingReport.php">
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
              <a href="SalesClosingReport.php">
                <i class="fa fa-edit"></i> <span>Sales Closing Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
            
            <li>
              <a href="../forms/StaffRegistration.php">
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
                <li><a href="GeneralRegistrationReport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="ShopRegistrationReport.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
              </ul>
            </li>
             <li>
              <a href="../forms/expenses.php">
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
            Shop Staff Registration Report
            <small>#007612</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="ShopRegistrationReport.php">Registration Report</a></li>
            <li class="active">Shop Staff Registration Report</li>
          </ol>
        </section>

        <div class="pad margin no-print">
        &nbsp;<form action="ShopRegistrationReport.php" method="post">
                   <div>
                   <Select size="1" name="shops" class="form-control">
                   <option value="">Choose Shop Name</option>
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
                   &nbsp;
                   <div>
                     <button type="submit" name="submit" value="submit" class="btn btn-primary">Get Details</button>
                   </div>
                   </form>
                    &nbsp;
          <div class="callout callout-warning" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page displays Shop's Staff Registrered in Details. Click the print button at the bottom of the report to Print.
          </div>
        </div>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> FUNA, Inc.
                <small class="pull-right">Date: <?php echo"". date("Y/m/d");?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
             <h3 align="center">A Shop Based registration List Of members of staff </h3>         
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                       <th style="width: 10px">#</th>
                      <th>Date Registered</th>
                      <th>Staff No</th>
                      <th>Staff Name</th>
                      <th>Position</th>
                      <th>Shop </th>
                      <th>Region </th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
					 if(isset($_REQUEST['submit'])){	
$shopname = $_POST['shops'];
$_SESSION['shopsname']=$shopname;
//require_once('../../connect/connect.php');
$sales9 ="SELECT staffregistration.Date,StaffNo,StaffName,StaffType,Shop,Region FROM `staffregistration`,`shopmapping` where `Shop`='".$shopname."' and staffregistration.shop=shopmapping.ShopName";
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
					   echo  "<td>".$row9['Region']."</td>";
                   echo" </tr>" ;
				   $counter5++;
}
					
					?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>....</th>
                        <th><?php echo"".$shopname; }?></th>
                        <th>...</th>
                        <th>...</th>
                        <th>...</th>
                         <th>...</th>
                          <th>...</th>
                      </tr>
                      
                    </tfoot>
                  </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

         
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="ShopRegistrationReportPrint.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
             <!-- <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
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
