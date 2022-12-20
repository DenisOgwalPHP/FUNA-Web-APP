<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Funa | Stock General report</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

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
						 $counter4++;
						  $totalStockbalance+=$moneyworths;
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

       
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>