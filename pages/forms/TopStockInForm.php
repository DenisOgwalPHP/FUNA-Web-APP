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
    <title>FUNA | Stock In</title>
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
    <script src="script/script.js"></script>
    <script>
     function calculate500(){
		var d5=document.getElementById('deno500pie').value;
		var tot5=d5*500;
		deno500amm.value=tot5;
		}
     function calculate1000(){
		var d10=document.getElementById('deno1000pie').value;
		var tot10=d10*1000;
		deno1000amm.value=tot10;
		}
	 function calculate2000(){
		var d20=document.getElementById('deno2000pie').value;
		var tot20=d20*2000;
		deno2000amm.value=tot20;
		}	
	 function calculate5000(){
		var d50=document.getElementById('deno5000pie').value;
		var tot50=d50*5000;
		deno5000amm.value=tot50;
		}
	 function calculate10000(){
		var d100=document.getElementById('deno10000pie').value;
		var tot100=d100*10000;
		deno10000amm.value=tot100;
		}	
	function calculate20000(){
		var d200=document.getElementById('deno20000pie').value;
		var tot200=d200*20000;
		deno20000amm.value=tot200;
		}
	function calculate50000(){
		var d500=document.getElementById('deno50000pie').value;
		var tot500=d500*50000;
		deno50000amm.value=tot500;
		}
		
	/* calculating final sums*/	
	 function calculatetotal(){
		var dtot5=document.getElementById('deno500amm').value||0;
		var dtot10=document.getElementById('deno1000amm').value||0;
		var dtot20=document.getElementById('deno2000amm').value||0;
		var dtot50=document.getElementById('deno5000amm').value||0;
		var dtot100=document.getElementById('deno10000amm').value||0;
		var dtot200=document.getElementById('deno20000amm').value||0;
		var dtot500=document.getElementById('deno50000amm').value||0;
		var tottot5=parseInt(dtot5)+parseInt(dtot10)+parseInt(dtot20)+parseInt(dtot50)+parseInt(dtot100)+ parseInt(dtot200)+parseInt(dtot500);
		overallammount.value=tottot5;
		}					
    </script>
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
            <li class="active">
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
            
            <li>
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
            General Stock In Form
            <small>Additions</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="StockInForm.php">Form</a></li>
            <li class="active">Stock In Form</li>
          </ol>
        </section>
<!-- <script type="text/javascript">
	 	var e=document.getElementById("optionsto");
                   e.onchange=function(){
						
					
						} ;
     </script>-->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Add Stock</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="../../includes/TopInsertStockIn.php" method="post">
                  <div class="box-body">
                  <div class="form-group" align="center">
                    <label for="exampleInputPassword1">Denomination </label> 										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label for="exampleInputPassword1">No of Pieces </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="exampleInputPassword1">Total Ammount(UGX) </label>
                    </div>
                  	<div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno500" value="500"  placeholder="500" readonly>
                      <input type="number" class="form-horizontal" name="deno500pie" id="deno500pie" oninput="calculate500()" placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno500amm" id="deno500amm" placeholder="Total Ammount" readonly>
                    </div>
                    <div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno1000" value="1000" placeholder="1000" readonly>
                      <input type="number"class="form-horizontal" name="deno1000pie"id="deno1000pie" oninput="calculate1000()" placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno1000amm" id="deno1000amm" placeholder="Total Ammount" readonly>
                    </div>
                    <div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno2000" value="2000" placeholder="2000" readonly>
                      <input type="number"class="form-horizontal" name="deno2000pie"id="deno2000pie" oninput="calculate2000()" placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno2000amm"id="deno2000amm" placeholder="Total Ammount" readonly>
                    </div>
                    <div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno5000" value="5000" placeholder="5000" readonly>
                      <input type="number"class="form-horizontal"name="deno5000pie"id="deno5000pie"  oninput="calculate5000()" placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno5000amm"id="deno5000amm" placeholder="Total Ammount" readonly>
                    </div>
                    <div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno10000" value="10000" placeholder="10000"  readonly>
                      <input type="number"class="form-horizontal"name="deno10000pie"id="deno10000pie"oninput="calculate10000()"placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno10000amm"id="deno10000amm" placeholder="Total Ammount" readonly>
                    </div>
                   <div class="form-group" align="center">
                      <input type="number" class="form-horizontal" name="deno20000" value="20000" placeholder="20000" readonly>
                      <input type="number"class="form-horizontal"name="deno20000pie"id="deno20000pie"oninput="calculate20000()"placeholder="No of pieces">
                        <input type="number" class="form-horizontal" name="deno20000amm"id="deno20000amm" placeholder="Total Ammount" readonly>
                    </div>
                    
                    <div class="form-group" align="center">
                     <input type="number" class="form-horizontal" name="deno50000" value="50000" placeholder="50000" readonly>
                     <input type="number"class="form-horizontal"name="deno50000pie"id="deno50000pie"oninput="calculate50000()"placeholder="No of pieces">
                       <input type="number"class="form-horizontal"name="deno50000amm"id="deno50000amm"placeholder="Total Ammount"readonly>
                    </div>
                  </div><!-- /.box-body -->
                      <button type="submit" name="submit" Value="submit"  class="btn btn-primary pull-right">Submit</button>
                </form>
                <div>
                <button type="submit"name="total"Value="total" onClick="calculatetotal()" class="btn btn-primary pull-left">   Total</button> 	&nbsp;&nbsp;&nbsp;	
              <label for="exampleInputPassword1">Total: </label> &nbsp;&nbsp;&nbsp;	
                     <input type="number" class="form-horizontal" name="overallammount" id="overallammount" placeholder="Total" readonly>
                     
                  </div>
                  <div>&nbsp;</div>
              </div><!-- /.box -->
</div>
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title"> Main Stock In</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table id="example2" class="table table-bordered table-hover">
                    <thead>
                       <tr>
                    <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>From</th>
                      <th>Denomination</th>
                      <th>Quantity</th>
                      <th>Money Worth</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
require_once('../../connect/connect.php');
$sales9 ="SELECT Date,Denomination,Quantity,MoneyWorth,IssuedBy FROM `mainofficestock`";
$result9=mysqli_query($link,$sales9);
$counter5=1;
while($row9=mysqli_fetch_assoc($result9)){
	
                    echo" <tr>";
                     echo "<td>".$counter5."</td>";
                     echo  "<td>".$row9['Date']."</td>";
                     echo  "<td>".$row9['IssuedBy']."</td>";
					 echo  "<td>".$row9['Denomination']."</td>";
					 echo  "<td>".$row9['Quantity']."</td>";
					  echo  "<td>".$row9['MoneyWorth']."</td>";
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
                        <th></th>   
                         <th>Total stock.</th>  
                         <th><?php
						 $dates=date("Y-m-d");
						 $sales10 ="SELECT SUM(MoneyWorth) FROM `mainofficestock` where Date like '$dates%'";
                         $result10=mysqli_query($link,$sales10);
						 $row10=mysqli_fetch_array($result10);
							$firstshop10=$row10[0];
						 echo "".$firstshop10;
						  ?></th>    
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
             <div class="col-md-6">
              <!-- general form elements disabled -->
             </div>
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
