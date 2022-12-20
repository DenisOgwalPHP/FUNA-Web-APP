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
    <title>Funa | Date Stock In Report Print</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="window.print();">
    <div class="wrapper">
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
        <div class="row">
       <h3 align="center">Stock In List By Shop </h3>
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


$shopname = $_SESSION['shopreport'];
require_once('../../connect/connect.php');
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
                    
                    </tfoot>
                  </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

       
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>