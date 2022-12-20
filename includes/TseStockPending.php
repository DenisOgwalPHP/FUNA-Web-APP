<?php
require_once('connect/connect.php');
$sales ="SELECT SUM(MoneyWorth) as Sales FROM `tsestock` where ApprovalStatus='Pending'";
$result=mysqli_query($link,$sales);

$row=mysqli_fetch_assoc($result);
$totalsales=$row['Sales'];
if($totalsales>=1){
echo "$totalsales";
}else{
	echo "0";
	}
?>