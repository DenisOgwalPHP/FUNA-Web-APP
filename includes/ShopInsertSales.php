<?php
session_start();
if(isset($_SESSION['user'])){
	}
	else{
		
		}
function siteURL() {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'].'/';
		return $protocol;
	}

	define( 'SITE_URL', siteURL() );

	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
		$dir .= $parts[$i] . "/";
	}

	$url = SITE_URL.$dir;

$title = "";
$message = "";
function title($text){
		$title = $text;
		return $title;
	}

	//Message function: Returns a message to the user notifying them of their account status
	function message($text){
		$message = "<p>".$text."</p>";
		return $message;
	}
	// cURL Get Contents
	function curl_get_contents($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	
if(isset($_REQUEST['submit'])){	
// getting inputs from the form		
	$denomination = $_POST['deno500'];
	$qty= $_POST['deno500pie'];
	$cost = $_POST['deno500amm'];
	$cost200=$cost-(0.05*$cost);
	$cost20=$cost200;
	
	$denomination1 = $_POST['deno1000'];
	$qty1= $_POST['deno1000pie'];
	$cost1 = $_POST['deno1000amm'];
	$cost120=$cost1-(0.05*$cost1);
	$cost12=$cost120;
	
	$denomination2 = $_POST['deno2000'];
	$qty2= $_POST['deno2000pie'];
	$cost2 = $_POST['deno2000amm'];
	$cost220=$cost2-(0.05*$cost2);
	$cost22=$cost220;
	
	$denomination3 = $_POST['deno5000'];
	$qty3= $_POST['deno5000pie'];
	$cost3 = $_POST['deno5000amm'];
	$cost320=$cost3-(0.05*$cost3);
	$cost32=$cost320;
	
	$denomination4 = $_POST['deno10000'];
	$qty4= $_POST['deno10000pie'];
	$cost4 = $_POST['deno10000amm'];
	$cost420=$cost4-(0.05*$cost4);
	$cost42=$cost420;
	
	$denomination5 = $_POST['deno20000'];
	$qty5= $_POST['deno20000pie'];
	$cost5 = $_POST['deno20000amm'];
	$cost520=$cost5-(0.05*$cost5);
	$cost52=$cost520;
	
	$denomination6 = $_POST['deno50000'];
	$qty6= $_POST['deno50000pie'];
	$cost6 = $_POST['deno50000amm'];
	$cost620=$cost6-(0.05*$cost6);
	$cost62=$cost620;
	
	$staffno = $_SESSION['UserName'];
	$shops = $_SESSION['Shop'];		
	require_once('../connect/connect.php');
	if($qty!=""||$qty1!=""||$qty2!=""||$qty3!=""||$qty4!=""||$qty5!=""||$qty6!=""){
		if($qty!=""){
	$query = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination','$qty','$cost','$cost20','Pending')";
			$result=mysqli_query($link,$query);
			
			$que7 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='500' and ShopName='$shops'";
			$res7=mysqli_query($link,$que7);
			$ro7=mysqli_fetch_assoc($res7);	
			if(mysqli_num_rows($res7)==1){
				$bal7=$ro7['Balance'];
				$realbal7= $bal7-$qty;
				$qu7 = "UPDATE shopstockbalance SET Status='Old' where Denomination='500' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link7,$qu7);
				
				$quer7 = "INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','500','$realbal7','Latest')";
				mysqli_query($link,$quer7);
				
			}
	}
	if($qty1!=""){
	$query1 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination1','$qty1','$cost1','$cost12','Pending')";
			mysqli_query($link,$query1);
			
			$que8 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='1000' and ShopName='$shops'";
			$res8=mysqli_query($link,$que8);
			$ro8=mysqli_fetch_assoc($res8);	
			if(mysqli_num_rows($res8)==1){
				$bal8=$ro8['Balance'];
				$realbal8= $bal8-$qty1;
				$qu8 = "UPDATE shopstockbalance SET Status='Old' where Denomination='1000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu8);
				
				$quer8 = "INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','1000','$realbal8','Latest')";
				mysqli_query($link,$quer8);		
			}		
	}
	if($qty2!=""){
	$query2 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination2','$qty2','$cost2','$cost22','Pending')";
			mysqli_query($link,$query2);
			
			$que9 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='2000' and ShopName='$shops'";
			$res9=mysqli_query($link,$que9);
			$ro9=mysqli_fetch_assoc($res9);	
			if(mysqli_num_rows($res9)==1){
				$bal9=$ro9['Balance'];
				$realbal9= $bal9-$qty2;
				$qu9 = "UPDATE shopstockbalance SET Status='Old' where Denomination='2000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu9);
				
				$quer9 = "INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','2000','$realbal9','Latest')";
				mysqli_query($link,$quer9);		
			}			
	}
	if($qty3!=""){
	$query3 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination3','$qty3','$cost3','$cost32','Pending')";
			mysqli_query($link,$query3);
			
			$que10 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='5000' and ShopName='$shops'";
			$res10=mysqli_query($link,$que10);
			$ro10=mysqli_fetch_assoc($res10);	
			if(mysqli_num_rows($res10)==1){
				$bal10=$ro10['Balance'];
				$realbal10= $bal10-$qty3;
				$qu10 = "UPDATE shopstockbalance SET Status='Old' where Denomination='5000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu10);
				
				$quer10= "INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','5000','$realbal10','Latest')";
				mysqli_query($link,$quer10);		
			}				
	}
	if($qty4!=""){
	$query4 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination4','$qty4','$cost4','$cost42','Pending')";
			mysqli_query($link,$query4);
			
			$que11 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='10000' and ShopName='$shops'";
			$res11=mysqli_query($link,$que11);
			$ro11=mysqli_fetch_assoc($res11);	
			if(mysqli_num_rows($res11)==1){
				$bal11=$ro11['Balance'];
				$realbal11= $bal11-$qty4;
				$qu11 = "UPDATE shopstockbalance SET Status='Old' where Denomination='10000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu11);
				
				$quer11="INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','10000','$realbal11','Latest')";
				mysqli_query($link,$quer11);		
			}				
	}
	if($qty5!=""){
	$query5 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination5','$qty5','$cost5','$cost52','Pending')";
			mysqli_query($link,$query5);
			$que12 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='20000' and ShopName='$shops'";
			$res12=mysqli_query($link,$que12);
			$ro12=mysqli_fetch_assoc($res12);	
			if(mysqli_num_rows($res12)==1){
				$bal12=$ro12['Balance'];
				$realbal12= $bal12-$qty5;
				$qu12 = "UPDATE shopstockbalance SET Status='Old' where Denomination='20000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu12);
				
				$quer12="INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','20000','$realbal12','Latest')";
				mysqli_query($link,$quer12);		
			}				
	}
	if($qty6!=""){
	$query6 = "INSERT INTO `shopsales`(ShopName,StaffNo,Denomination,Quantity,MoneyRecieved,DiscountedMoneyRecieved,ApprovedBy) VALUES('$shops','$staffno','$denomination6','$qty6','$cost6','$cost62','Pending')";
			mysqli_query($link,$query6);
			$que13 = "SELECT Balance from shopstockbalance where Status='Latest' and Denomination='50000' and ShopName='$shops'";
			$res13=mysqli_query($link,$que13);
			$ro13=mysqli_fetch_assoc($res13);	
			if(mysqli_num_rows($res13)==1){
				$bal13=$ro13['Balance'];
				$realbal13= $bal13-$qty6;
				$qu13 = "UPDATE shopstockbalance SET Status='Old' where Denomination='50000' and Status='Latest' and ShopName='$shops'";
				mysqli_query($link,$qu13);
				
				$quer13="INSERT INTO `shopstockbalance`(ShopName,Denomination,Balance,Status) VALUES('$shops','50000','$realbal11','Latest')";
				mysqli_query($link,$quer13);		
			}			
	}
				echo '<script type="application/javascript">';
				echo'alert("Sales Recorded");';
				echo'window.location.href="../pages/forms/ShopAddSales.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Submission to main office failed");';
				echo'window.location.href="../pages/forms/ShopAddSales.php";';
				echo '</script>';
			}
	
			
	}else{
		echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../pages/forms/ShopAddSales.php";';
				echo '</script>';
			die;
		}
?>