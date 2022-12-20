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
    <title>Funa | Shop Stock report</title>
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
                   <h4 align="left"><?php echo"".$_SESSION['Shop']." ";?> Shop Sales</h4> 
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Date</th>
                      <th>Actual Value</th>
                      <th>Discounted Money Recieved</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
		
					  require_once('../../connect/connect.php');
					$shop=$_SESSION['Shop'];
					$dates=date("Y-m-d");
					 $sales9 ="SELECT Date,SUM(MoneyRecieved) As Money1,SUM(DiscountedMoneyRecieved) As money2  FROM `shopsales` where ShopName='$shop' and Date like'$dates%'";
					$result9=mysqli_query($link,$sales9);
					$counter=1;
					while($row9=mysqli_fetch_assoc($result9)){
					    echo"<td>".$row9['Date']."</td>";
                        echo"<td>".$row9['Money1']."</td>";
                        echo"<td>".$row9['money2']."</td>";
						echo"</tr>";
					}
					?>
                    </tbody>
                    </table>
                    
                     <h4 align="left">TSE Sales</h4> 
                     <table id="example1" class="table table-bordered table-striped">
					 <thead>
                      <tr>
                      <th>Date</th>
                      <th>Actual Value</th>
                      <th>Discounted Money Sold</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					  
					 // require_once('../../connect/connect.php');
					$shop=$_SESSION['Shop'];
					 $sales10 ="SELECT tsesales.Date,SUM(MoneySold) As Money3,SUM(DiscountedMoneySold) As money4 FROM `tsesales`,`staffregistration` where Shop='$shop' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result10=mysqli_query($link,$sales10);
					$counter=1;
					while($row10=mysqli_fetch_assoc($result10)){
					    echo"<td>".$row10['Date']."</td>";
						echo"<td>".$row10['Money3']."</td>";
                        echo"<td>".$row10['money4']."</td>";
						echo"</tr>";
					}
					
				
					
					
				?></tbody>
                </table> 
                   <h4 align="left"><?php echo"".$_SESSION['Shop']." ";?> Sales Summary</h4> 
              <table id="example1" class="table table-bordered table-striped">
                   <thead>
                      <tr>
                       <th></th>
                      <th>500</th>
                      <th>1000</th>
                      <th>2000</th>
                      <th>5000</th>
                      <th>10000</th>
                      <th>20000</th>
                      <th>50000</th>
                      </tr>
                      
                       <tr>
                       <th>Pieces</th>
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales11 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='500'" ;
					$result11=mysqli_query($link,$sales11);
					$row11=mysqli_fetch_assoc($result11);
					    $Stockbalance=$row11['Balance'];
						
                      $shop=$_SESSION['Shop'];
					 $sales12 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop' and Denomination='500' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result12=mysqli_query($link,$sales12);
					$row12=mysqli_fetch_assoc($result12);
					$tsebalance=$row12['balance']; 
					$totalbalance=$tsebalance+$Stockbalance;
					echo"".$totalbalance;
                        ?>
                        
                        
                        </td>
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales13 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='1000'" ;
					$result13=mysqli_query($link,$sales13);
					$row13=mysqli_fetch_assoc($result13);
					    $Stockbalance1=$row13['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales14 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop' and Denomination='1000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result14=mysqli_query($link,$sales14);
					$row14=mysqli_fetch_assoc($result14);
					$tsebalance1=$row14['balance']; 
					$totalbalance1=$tsebalance1+$Stockbalance1;
					echo"".$totalbalance1;
						?></td>
                        
                        
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales15 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='2000'" ;
					$result15=mysqli_query($link,$sales15);
					$row15=mysqli_fetch_assoc($result15);
					    $Stockbalance2=$row15['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales16 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop' and Denomination='2000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result16=mysqli_query($link,$sales16);
					$row16=mysqli_fetch_assoc($result16);
					$tsebalance2=$row16['balance']; 
					$totalbalance2=$tsebalance2+$Stockbalance2;
					echo"".$totalbalance2;
						?></td>
                        
                        
                        
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales17 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='5000'" ;
					$result17=mysqli_query($link,$sales17);
					$row17=mysqli_fetch_assoc($result17);
					    $Stockbalance3=$row17['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales18 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop' and Denomination='5000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result18=mysqli_query($link,$sales18);
					$row18=mysqli_fetch_assoc($result18);
					$tsebalance3=$row18['balance']; 
					$totalbalance3=$tsebalance3+$Stockbalance3;
					echo"".$totalbalance3;
						?></td>
                        
                        
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales19 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='10000'" ;
					$result19=mysqli_query($link,$sales19);
					$row19=mysqli_fetch_assoc($result19);
					    $Stockbalance4=$row19['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales20 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop'and Denomination='10000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result20=mysqli_query($link,$sales20);
					$row20=mysqli_fetch_assoc($result20);
					$tsebalance4=$row20['balance'];
					$totalbalance4=$tsebalance4+$Stockbalance4;
					echo"".$totalbalance4; 
						?></td>
                        
                        
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales21 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='20000'" ;
					$result21=mysqli_query($link,$sales21);
					$row21=mysqli_fetch_assoc($result21);
					    $Stockbalance5=$row21['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales22 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop'and Denomination='20000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result22=mysqli_query($link,$sales22);
					$row22=mysqli_fetch_assoc($result22);
					$tsebalance5=$row22['balance']; 
					$totalbalance5=$tsebalance5+$Stockbalance5;
					echo"".$totalbalance5; 
						?></td>
                        
                        
                      <td><?php $shop=$_SESSION['Shop'];
					 $sales23 ="SELECT SUM(Quantity)AS Balance FROM `shopsales` where ShopName='$shop' and Date like'$dates%' and Denomination='50000'" ;
					$result23=mysqli_query($link,$sales23);
					$row23=mysqli_fetch_assoc($result23);
					    $Stockbalance6=$row23['Balance'];
						
						 $shop=$_SESSION['Shop'];
					 $sales24 ="SELECT SUM(Quantity)AS balance FROM `tsesales`,`staffregistration` where Shop='$shop'and Denomination='50000' and tsesales.Date like'$dates%' and staffregistration.StaffNo=tsesales.TSENO" ;
					$result24=mysqli_query($link,$sales24);
					$row24=mysqli_fetch_assoc($result24);
					$tsebalance6=$row24['balance']; 
					$totalbalance6=$tsebalance6+$Stockbalance6;
					echo"".$totalbalance6; 
						?></td>
                      </tr>
                       <tr>
                       <th>Money Worth</th>
                      <td><?php $moneyworth5=$totalbalance*500; echo"".$moneyworth5; ?></td>
                      <td><?php $moneyworth10=$totalbalance1*1000; echo"".$moneyworth10;?></td>
                      <td><?php $moneyworth20=$totalbalance2*2000; echo"".$moneyworth20;?></td>
                      <td><?php $moneyworth50=$totalbalance3*5000; echo"".$moneyworth50;?></td>
                      <td><?php $moneyworth100=$totalbalance4*10000; echo"".$moneyworth100;?></td>
                      <td><?php $moneyworth200=$totalbalance5*20000; echo"".$moneyworth200;?></td>
                      <td><?php $moneyworth500=$totalbalance6*50000; echo"".$moneyworth500;?></td>
                      </tr>
                    </tbody>
                      <tfoot>
                     <tr>
                       <th>Total Money Worth:</th>
                    <th> <?php $Totalmoneyworth=$moneyworth5+$moneyworth10+$moneyworth20+$moneyworth50+$moneyworth100+$moneyworth200+$moneyworth500;
					 echo"".$Totalmoneyworth;?></th>
                      
                      <th>Total Money At Hand:</th>
                    <th> <?php $Discount=0.05*$Totalmoneyworth;
					$discountedmoneyworth=$Totalmoneyworth-$Discount;
					 echo"".$discountedmoneyworth;?></th>
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