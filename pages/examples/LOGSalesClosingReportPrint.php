<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Funa | Sales General report</title>
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

       
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>