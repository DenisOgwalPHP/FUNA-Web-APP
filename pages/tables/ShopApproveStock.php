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
    <title>FUNA | Shop Approve Stock</title>
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
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script>
 function InsertValuess(){
		var update=document.getElementById('status').value;
		var tot5=d5*500;
		deno500amm.value=tot5;
		}
 </script>
  </head>
  <body class="skin-yellow">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../DashBoard4.php" class="logo"><b>FUNA</b></a>
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
                <li class="active"><a href="../../DashBoard4.php"><i class="fa fa-circle-o"></i>Main Menu</a></li>
              </ul>
           <li>
              <a href="../forms/ShopAddSales.php">
                <i class="fa fa-calendar"></i> <span>Add Sales</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            
             <li>
              <a href="ShopApproveSales.php">
                <i class="fa fa-calendar"></i> <span>Approve Sales</span> <small class="label pull-right bg-yellow">Approve</small>
              </a>
            </li>
            
             <li>
              <a href="../forms/ShopAddStock.php">
                <i class="fa fa-calendar"></i> <span>Add Stock To TSE</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
            <li>
              <a href="../forms/Shopexpenses.php">
                <i class="fa fa-calendar"></i> <span>Add Expenses</span> <small class="label pull-right bg-green">ADD</small>
              </a>
            </li>
              <li class="active">
              <a href="ShopApproveStock.php">
                <i class="fa fa-calendar"></i> <span>Approve Stock</span> <small class="label pull-right bg-yellow">Approve</small>
              </a>
            </li>
            
            <li class="treeview">
              <a href="../examples/ShopStockReport.php">
                <i class="fa fa-pie-chart"></i>
                <span>Shop Stock Report</span>
                 <small class="label pull-right bg-blue">View</small>
              </a>
            </li>
          
          
            <li class="treeview">
              <a href="../examples/ShopSalesReport.php">
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
            Shop Stock
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../DashBoard4.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="ShopApproveStock.php"> Stock Record</a></li>
            <li class="active">Shop Stock</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Interim Shop Stock</h3>
                </div><!-- /.box-header -->
               
                <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>Denomination</th>
                      <th>Quantity(Pieces)</th>
                      <th>Money worth</th>
                      <th>Issued By</th>
                       <th align="center">Approve</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					  $Actualvalue1=0;
					   $salesid=0;
					$Discountedvalue1=0;			  	
					$shopname = $_SESSION['Shop'];
					$dates=date("Y-m-d");
				  require_once('../../connect/connect.php');
                  $sales8 ="SELECT MainOfficeIssueID,Date,Denomination,Quantity,MoneyWorth,IssuedBy FROM `shopstock` where Shop='$shopname'  and ApprovalStatus ='Pending'";
					$result8=mysqli_query($link,$sales8);
					$counter4=1;

					while($row8=mysqli_fetch_assoc($result8)){
					?>
	 
    				 <?php
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
					   echo  "<td>".$row8['Denomination']."</td>";
					    echo  "<td>".$row8['Quantity']."</td>";
					 echo  "<td>".$row8['MoneyWorth']."</td>"; 
					  echo  "<td>".$row8['IssuedBy']."</td>"; 
					   $salesid2=$row8['MainOfficeIssueID'];
					  echo'<td><form method="get" ><a href="ShopApproveSales.php?salesid='.$salesid2.'"><button type="submit" name="status"  value="'.$salesid2.'" class="btn btn-primary pull-center">Approve</button></a></form></td>';
					
                   echo" </tr>" ;
				   $counter4++;	  
				   $Actualvalue1 +=$row8['MoneyWorth'];
				
}	
					?>
                   <?php
						 $staffno= $_SESSION['UserName'];
						 if(isset($_GET['status'])){
						$salesid3=$_GET['status'];
                          if(isset($salesid3)){
				$sales20 ="UPDATE shopstock SET ApprovedBy='$staffno',ApprovalStatus='Approved' Where MainOfficeIssueID='$salesid3'";
				mysqli_query($link,$sales20); 
				echo '<script type="application/javascript">';
				echo'alert("Successfully Approved");';
				echo'window.location.href="ShopApproveStock.php";';
				echo '</script>';
						  }
						 }
						  ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      
                        <th></th>
                        <th></th>
                        <th></th>
                          <th>Total Stock</th>
                        <th><?php echo"".$Actualvalue1; ?></th>
                         <th ></th>
                      </tr>
                     
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Approved Stock</h3>
                </div><!-- /.box-header -->
               
                <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width: 10px">#</th>
                      <th>Date</th>
                      <th>Denomination</th>
                      <th>Quantity(Pieces)</th>
                      <th>Money worth</th>
                      <th>Issued By</th>
                       <th >Approve By</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					   $sales8 ="SELECT MainOfficeIssueID,Date,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy FROM `shopstock` where Shop='$shopname'  and ApprovalStatus ='Approved'";
					$result8=mysqli_query($link,$sales8);
					$counter4=1;
					$Actualvalue=0;
					while($row8=mysqli_fetch_assoc($result8)){
					?>
	 
    				 <?php
                    echo" <tr>";
                     echo "<td>".$counter4."</td>";
                     echo  "<td>".$row8['Date']."</td>";
					   echo  "<td>".$row8['Denomination']."</td>";
					    echo  "<td>".$row8['Quantity']."</td>";
					 echo  "<td>".$row8['MoneyWorth']."</td>"; 
					  echo  "<td>".$row8['IssuedBy']."</td>";
					   echo  "<td>".$row8['ApprovedBy']."</td>"; 
					 
                   echo" </tr>" ;
				   $counter4++;	  
				   $Actualvalue +=$row8['MoneyWorth'];
				
}	
					   
					?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Stock</th>
                        <th><?php echo"".$Actualvalue; ?></th>
                         <th></th>
                          <th></th>
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
