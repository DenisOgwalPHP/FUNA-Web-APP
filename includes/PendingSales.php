<?php
require_once('connect/connect.php');
$dates=date("Y-m-d");
$sales ="SELECT SUM(MoneyRecieved) as Sales FROM `shopsales` where ApprovedBy like 'Pending' and Date like '$dates%'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalsales=$row['Sales'];

$sales1 ="SELECT SUM(MoneySold) as Sales FROM `tsesales` where Date like '$dates%' and ShopApproval ='Pending'";
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
