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
        <a href="../../DashBoard3.php" class="logo"><b>FUNA</b></a>
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
                <li class="active"><a href="../../DashBoard3.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Stock Records</span>
                 <small class="label pull-right bg-red">5</small>
              </a>
              <ul class="treeview-menu">
              <li><a href="../tables/ACCGeneralStockIn.php"><i class="fa fa-circle-o"></i> Regional</a></li>
               <li><a href="../tables/ACCMainOfficeStockIn.php"><i class="fa fa-circle-o"></i> Main Office</a></li>
                <li><a href="../tables/ACCShopStockIn.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../tables/ACCDateStockIn.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                <li><a href="../tables/ACCTSEStockIn.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">4</small>
              </a>
              <ul class="treeview-menu">
                <li><a href="ACCStockInGeneralreport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li class="active"><a href="ACCStockInShopreport.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="ACCStockInDatereport.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                 <li><a href="ACCStockInTSEreport.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Sales Records</span>
                 <small class="label pull-right bg-red">2</small>
              </a>
              <ul class="treeview-menu">
              <li><a href="../tables/ACCShopSales.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
               <li><a href="../tables/ACCSalesByTSE.php"><i class="fa fa-circle-o"></i>By TSE</a></li>
              </ul>
            </li>
           <li class="treeview">
              <a href="../tables/ACCExpensesRecord.php">
                <i class="fa fa-edit"></i> <span>Expenses Records</span>
                 <small class="label pull-right bg-yellow">View</small>
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
            <li><a href="../../DashBoard3.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="ACCStockInDatereport.php">Stock In Report</a></li>
            <li class="active">Shop Stock In Report</li>
          </ol>
        </section>

        <div class="pad margin no-print">
                    &nbsp;  &nbsp;  &nbsp;<form action="ACCStockInShopreport.php" method="post">
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
                   &nbsp;  &nbsp;  &nbsp;
                   <div>
                     <button type="submit" name="submit" value="submit" class="btn btn-primary">Get Details</button>
                   </div>
                   </form> &nbsp;
          <div class="callout callout-warning" style="margin-bottom: 0!important;">												
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page displays Stock In based On Shop. Click the print button at the bottom of the report to Print.
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
             <h3 align="center">Stock In List </h3>
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
$shopname = $_POST['shops'];
$_SESSION['shopreport']=$shopname;
//require_once('../../connect/connect.php');
$sales7 ="SELECT Date,Shop,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovalStatus,ApprovedBy FROM `shopStock` where `Shop`='$shopname'";
$result7=mysqli_query($link,$sales7);
$counter3=1;
$totalstock=0;
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
 $totalstock+=$row7['MoneyWorth'];
				   $counter3++;
}

					?>
                       
                  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>...</th>
                        <th><?php echo"".$shopname; ?></th>
                        <th>TotalStock</th>
                        <th><?php echo"".$totalstock; ?></th>
                        <th>...</th>
                         <th>...</th>
                         <th>....</th>
                         <th>...</th>
                         <th>....</th>
                      </tr>
                     <?php } ?>
                    </tfoot>
                  </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="ACCStockInShopreportPrint.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
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
