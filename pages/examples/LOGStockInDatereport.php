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
    <title>FUNA | Date Stock In Report</title>
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
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
 <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   
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
          
          
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">2</small>
              </a>
              <ul class="treeview-menu">
               <li class="active"><a href="LOGStockInDatereport.php"><i class="fa fa-circle-o"></i> Stock In</a></li>
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
             Stock In Report
            <small>#</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="LOGStockInDatereport.php">Sales Report</a></li>
            <li class="active">Date Stock In Report</li>
          </ol>
        </section>

        <div class="pad margin no-print">
         &nbsp;  &nbsp;  &nbsp;
                    <form action="LOGStockInDateReport.php" method="post">
                      <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>  
                      </div>
                   <input type="text" class="form-control pull-right" name="dates"placeholder="Date range"id="reservation"/>
                    </div><!-- /.input group -->
                     &nbsp;  
                    <div>
                     <button type="submit" name="submit" value="submit" class="btn btn-primary">Get Details</button>
                   </div>  
                  </div><!-- /.form group -->
                  </form>
                  &nbsp; 
          <div class="callout callout-warning" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page displays Stock In based On date. Click the print button at the bottom of the report to Print.
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
             <h3 align="center">Stock In List By Date </h3>
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>To</th>
                      <th>By</th>
                      <th>Denomination</th>
                      <th>Quantity</th>
                      <th>Money Worth</th>
                      <th>Approval Status</th>
                      <th>Approved By</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php

if(isset($_REQUEST['submit'])){	
$dates=$_POST['dates'];
$fromsub=substr($dates,0,10);
$fromsubt=strtotime($fromsub);
$from = date('Y-m-d',$fromsubt);
$_SESSION['from']=$fromsub;

$tosub=substr($dates,12,22);
$tosubt=strtotime($tosub);
$to = date('Y-m-d',$tosubt);
$_SESSION['to']=$tosub;
require_once('../../connect/connect.php');
$sales7 ="SELECT Date,Shop,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovalStatus,ApprovedBy FROM `shopStock` where date(Date) between '".$from."' and '".$to."'";
$result7=mysqli_query($link,$sales7);
$counter3=1;
$totalstockin=0;
while($row7=mysqli_fetch_assoc($result7)){
	
                    echo" <tr>";
                     echo "<td>".$counter3."</td>";
                     echo  "<td>".$row7['Date']."</td>";
					 echo  "<td>".$row7['Shop']."</td>";
                     echo  "<td>".$row7['IssuedBy']."</td>";
					 echo  "<td>".$row7['Denomination']."</td>";
					 echo  "<td>".$row7['Quantity']."</td>";
					  echo  "<td>".$row7['MoneyWorth']."</td>";
					   echo  "<td>".$row7['ApprovalStatus']."</td>";
					  echo  "<td>".$row7['ApprovedBy']."</td>";
                   echo" </tr>" ;
				   $totalstockin+=$row7['MoneyWorth'];
				   $counter3++;
}

					?>
                       
                     
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>...</th>
                        <th>...</th>
                        <th>...</th>
                        <th>Total Stock Worth </th>
                        <th><?php echo"".$totalstockin; }?></th>
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
              <a href="LOGStockInDateReportPrint.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
   <!--           <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
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
    <script src="../../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
   
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
   
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
