<?php
require_once('connect/connect.php');
$dates=date("Y-m-d");
$shops=$_SESSION['Shop'];
$sales ="SELECT SUM(MoneyRecieved) as Sales FROM `shopsales` where ApprovedBy like 'Pending' and Date like '$dates%' and ShopName='$shops'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalsales=$row['Sales'];

$sales1 ="SELECT SUM(MoneySold) as Sales FROM `tsesales`,`staffRegistration` where tsesales.Date like '$dates%' and ShopApproval ='Pending' and staffregistration.StaffNo=tsesales.TSENO and Shop='$shops'";
$result1=mysqli_query($link,$sales1);
$row1=mysqli_fetch_assoc($result1);
$totalsales1=$row1['Sales'];

$totals=$totalsales+$totalsales1;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>
