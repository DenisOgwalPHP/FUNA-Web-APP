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
    <title>FUNA | Sales By TSE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

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
              <li><a href="ACCGeneralStockIn.php"><i class="fa fa-circle-o"></i> Regional</a></li>
               <li><a href="ACCMainOfficeStockIn.php"><i class="fa fa-circle-o"></i> Main Office</a></li>
                <li><a href="ACCShopStockIn.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="ACCDateStockIn.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                <li><a href="ACCTSEStockIn.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
          
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Stock In reports</span>
                 <small class="label pull-right bg-blue">4</small>
              </a>
              <ul class="treeview-menu">
                <li><a href="../examples/ACCStockInGeneralreport.php"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../examples/ACCStockInShopreport.php"><i class="fa fa-circle-o"></i> Per Shop</a></li>
                <li><a href="../examples/ACCStockInDatereport.php"><i class="fa fa-circle-o"></i> Per date</a></li>
                 <li><a href="../examples/ACCStockInTSEreport.php"><i class="fa fa-circle-o"></i> Per TSE</a></li>
              </ul>
            </li>
            
             <li class="treeview active">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Sales Records</span>
                 <small class="label pull-right bg-red">2</small>
              </a>
              <ul class="treeview-menu">
              <li><a href="ACCShopSales.php"><i class="fa fa-circle-o"></i> By Shop</a></li>
               <li class="active"><a href="ACCSalesByTSE.php"><i class="fa fa-circle-o"></i>By TSE</a></li>
              </ul>
            </li>
           <li class="treeview">
              <a href="ACCExpensesRecord.php">
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
            General TSE Sales
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard3.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="SalesByTSE.php">Sales Record</a></li>
            <li class="active">Per TSE</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">TSE Sales Details</h3>
                     &nbsp;  &nbsp;  &nbsp;<form action="ACCSalesByTSE.php" method="post">
                   <div>
                   <Select size="1" name="TSE" class="form-control">
                    <option value="">Choose TSE No</option>
                  <?php
                 require_once('../../connect/connect.php');
					$sales9 ="SELECT StaffNo FROM `staffregistration` where StaffType='TSE'";
					$result9=mysqli_query($link,$sales9);
					while($row9=mysqli_fetch_assoc($result9)){
                     echo '<option value="'.$row9['StaffNo'].'">'.$row9['StaffNo'].'</option>';
					}
					?>
                   </Select>
                   </div>
                   &nbsp;  &nbsp;  &nbsp;
                   <div>
                     <button type="submit" name="submit" value="submit" class="btn btn-primary">Get Details</button>
                   </div>
                   </form>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>TSE No</th>
                      <th>Denomination</th>
                      <th>Quantity(Pieces)</th>
                      <th>Money Sold</th>
                       <th>Shop Approval</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					   if(isset($_REQUEST['submit'])){	
$TSE = $_POST['TSE'];
$dates=date("Y-m-d");
					 // require_once('../../connect/connect.php');
                $sales8 ="SELECT Date,MoneySold,DiscountedMoneySold,TSENo,ShopApproval,Denomination,Quantity FROM `tsesales` where `TSENo`='".$TSE."' and Date like'$dates%' and ShopApproval !='Pending' ";
$result8=mysqli_query($link,$sales8);
$counter4=1;
 $totalsales=0;;
$totaldiscountedsales=0;;
while($row8=mysqli_fetch_assoc($result8)){
	
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
                     echo  "<td>".$row8['TSENo']."</td>";
					 echo  "<td>".$row8['Denomination']."</td>";
                     echo  "<td>".$row8['Quantity']."</td>";
					  echo  "<td>".$row8['MoneySold']."</td>";
					  echo  "<td>".$row8['ShopApproval']."</td>";
                   echo" </tr>" ;
				    $totalsales1+=$row8['MoneySold'];
				   $totaldiscountedsales1+=$row8['DiscountedMoneySold'];
				   $counter4++;
}
					   
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>...</th>
                        <th>...</th>  
                        <th>Actual Sales</th>
                        <th><?php echo"".$totalsales;?></th>
                        <th>Discounted Sales</th>
                        <th><?php echo"".$totaldiscountedsales;?></th>
                         <th>...</th>
                        
                           <?php }?>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </div>
           <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">TSE Interim Sales Details</h3>
                   </div>
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>TSE No</th>
                      <th>Denomination</th>
                      <th>Quantity(Pieces)</th>
                      <th>Money Sold</th>
                       <th>Shop Approval</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					   if(isset($_REQUEST['submit'])){	
$TSE = $_POST['TSE'];
$dates=date("Y-m-d");
					 // require_once('../../connect/connect.php');
                  $sales8 ="SELECT Date,MoneySold,DiscountedMoneySold,TSENo,ShopApproval,Denomination,Quantity FROM `tsesales` where `TSENo`='".$TSE."' and Date like'$dates%' and ShopApproval='Pending' ";
$result8=mysqli_query($link,$sales8);
$counter4=1;
$totalsales1=0;
 $totaldiscountedsales1=0;
while($row8=mysqli_fetch_assoc($result8)){
	
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
                     echo  "<td>".$row8['TSENo']."</td>";
					 echo  "<td>".$row8['Denomination']."</td>";
                     echo  "<td>".$row8['Quantity']."</td>";
					  echo  "<td>".$row8['MoneySold']."</td>";
					  echo  "<td>".$row8['ShopApproval']."</td>";
                   echo" </tr>" ;
				  $totalsales1+=$row8['MoneySold'];
				   $totaldiscountedsales1+=$row8['DiscountedMoneySold'];
				   $counter4++;
}
					   
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>...</th>
                        <th>...</th>  
                        <th>Actual Sales</th>
                        <th><?php echo"".$totalsales1;?></th>
                        <th>Discounted Sales</th>
                        <th><?php echo"".$totaldiscountedsales1;?></th>
                         <th>...</th>
                         
                          <?php }?>
                      </tr>
                    </tfoot>
                  </table>
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
        <strong>Copyright &copy; 2017 FUNA<!-- <a href="http://almsaeedstudio.com">Almsaeed Studio</a>-->.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
