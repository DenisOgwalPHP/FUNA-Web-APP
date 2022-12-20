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
	
	$denomination1 = $_POST['deno1000'];
	$qty1= $_POST['deno1000pie'];
	$cost1 = $_POST['deno1000amm'];
	
	$denomination2 = $_POST['deno2000'];
	$qty2= $_POST['deno2000pie'];
	$cost2 = $_POST['deno2000amm'];
	
	$denomination3 = $_POST['deno5000'];
	$qty3= $_POST['deno5000pie'];
	$cost3 = $_POST['deno5000amm'];
	
	$denomination4 = $_POST['deno10000'];
	$qty4= $_POST['deno10000pie'];
	$cost4 = $_POST['deno10000amm'];
	
	$denomination5 = $_POST['deno20000'];
	$qty5= $_POST['deno20000pie'];
	$cost5 = $_POST['deno20000amm'];
	
	$denomination6 = $_POST['deno50000'];
	$qty6= $_POST['deno50000pie'];
	$cost6 = $_POST['deno50000amm'];
	
	$staffno = $_SESSION['UserName'];
	$tse=$_POST['tse'];	
	$shops=$_SESSION['Shop'];
	require_once('../connect/connect.php');
	if($qty!=""||$qty1!=""||$qty2!=""||$qty3!=""||$qty4!=""||$qty5!=""||$qty6!="" ){
		if($qty!=""){
			$query = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination','$qty','$cost','$staffno','Pending','Pending')";
			$result=mysqli_query($link,$query);
			
			$que = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='500' and TSENo='$tse'";
			$res=mysqli_query($link,$que);
			$ro=mysqli_fetch_assoc($res);	
			if(mysqli_num_rows($res)==1){
				$bal=$ro['balance'];
				$realbal= $bal+$qty;
				$qu = "UPDATE tsestockbalance SET Status='Old' where Denomination='500' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu);
				
				$quer = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','500','$realbal','Latest')";
				mysqli_query($link,$quer);
				
			}
			if(mysqli_num_rows($res)==0){
				$querr = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','500','$qty','Latest')";
				mysqli_query($link,$querr);
			}	
			
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
			$query1 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination1','$qty1','$cost1','$staffno','Pending','Pending')";
			mysqli_query($link,$query1);
			
			$que1 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='1000' and TSENo='$tse'";
			$res1=mysqli_query($link,$que1);
			$ro1=mysqli_fetch_assoc($res1);	
			if(mysqli_num_rows($res1)==1){
				$bal1=$ro1['balance'];
				$realbal1= $bal1+$qty1;
				$qu1 = "UPDATE tsestockbalance SET Status='Old' where Denomination='1000' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu1);
			
				$quer1 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','1000','$realbal1','Latest')";
				mysqli_query($link,$quer1);
				
			}if(mysqli_num_rows($res1)==0){
				$querr1 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','1000','$qty1','Latest')";
				mysqli_query($link,$querr1);
			}
			
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
			$query2 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination2','$qty2','$cost2','$staffno','Pending','Pending')";
			mysqli_query($link,$query2);
			
			$que2 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='2000' and TSENo='$tse'";
			$res2=mysqli_query($link,$que2);
			$ro2=mysqli_fetch_array($res2);	
			if(mysqli_num_rows($res2)==1){
				$bal2=$ro2['balance'];
				$realbal2= $bal2 + $qty2;
				$qu2 = "UPDATE tsestockbalance SET Status='Old' where Denomination='2000' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu2);
				
				$quer2 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','2000','$realbal2','Latest')";
				mysqli_query($link,$quer2);
				
			}
			if(mysqli_num_rows($res2)==0){
				$querr2 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','2000','$qty2','Latest')";
				mysqli_query($link,$querr2);
			}
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
			$query3 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination3','$qty3','$cost3','$staffno','Pending','Pending')";
			mysqli_query($link,$query3);
			
			$que3 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='5000' and TSENo='$tse'";
			$res3=mysqli_query($link,$que3);
			$ro3=mysqli_fetch_array($res3);	
			if(mysqli_num_rows($res3)==1){
				$bal3=$ro3['balance'];
				$realbal3= $bal3+ $qty3;
				$qu3 = "UPDATE tsestockbalance SET Status='Old' where Denomination='5000' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu3);
				
				$quer3 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','5000','$realbal3','Latest')";
				mysqli_query($link,$quer3);
			}
			if(mysqli_num_rows($res3)==0){
				$querr3 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','5000','$qty3','Latest')";
				mysqli_query($link,$querr3);
			}
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
			$query4 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination4','$qty4','$cost4','$staffno','Pending','Pending')";
			mysqli_query($link,$query4);
			$que4 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='10000' and TSENo='$tse'";
			$res4=mysqli_query($link,$que4);
			$ro4=mysqli_fetch_assoc($res4);	
			if(mysqli_num_rows($res4)==1){
				$bal4=$ro4['balance'];
				$realbal4= (int)$bal4+(int)$qty4;
				$qu4 = "UPDATE tsestockbalance SET Status='Old' where Denomination='10000' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu4);
				//mysqli_close();
				$quer4 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','10000','$realbal4','Latest')";
				mysqli_query($link,$quer4);
				
			}
			if(mysqli_num_rows($res4)==0){
				$querr4 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','10000','$qty4','Latest')";
				mysqli_query($link,$querr4);
			}
			
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
			$query5 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination5','$qty5','$cost5','$staffno','Pending','Pending')";
			mysqli_query($link,$query5);
			$que5 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='20000' and TSENo='$tse'";
			$res5=mysqli_query($link,$que5);
			$ro5=mysqli_fetch_assoc($res5);	
			if(mysqli_num_rows($res5)==1){
				$bal5=$ro5['balance'];
				$realbal5= (int)$bal5+(int)$qty5;
				$qu5 = "UPDATE tsestockbalance SET Status='Old' where Denomination='20000' and Status='Latest'and TSENo='$tse'";
				mysqli_query($link,$qu5);
				$quer5 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','20000','$realbal5','Latest')";
				mysqli_query($link,$quer5);
			}if(mysqli_num_rows($res5)==0){
				$querr5 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','20000','$qty5','Latest')";
				mysqli_query($link,$querr5);
				}
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
			$query6 = "INSERT INTO `tsestock`(TSENo,Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$tse','$denomination6','$qty6','$cost6','$staffno','Pending','Pending')";
			mysqli_query($link,$query6);
			$que6 = "SELECT balance from tsestockbalance where Status='Latest' and Denomination='50000' and TSENo='$tse'";
			$res6=mysqli_query($link,$que6);
			$ro6=mysqli_fetch_assoc($res6);	
			if(mysqli_num_rows($res6)==1){
				$bal6=$ro6['balance'];
				$realbal6= (int)$bal6+(int)$qty6;
				$qu6 = "UPDATE tsestockbalance SET Status='Old' where Denomination='50000' and Status='Latest' and TSENo='$tse'";
				mysqli_query($link,$qu6);
				$quer6 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','50000','$realbal6','Latest')";
				mysqli_query($link,$quer6);
			}if(mysqli_num_rows($res6)==0){
				$querr6 = "INSERT INTO `tsestockbalance`(TSENo,Denomination,balance,Status) VALUES('$tse','50000','$qty6','Latest')";
				mysqli_query($link,$querr6);
				}
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
				echo'alert("Stock submitted to TSE");';
				echo'window.location.href="../pages/forms/ShopAddStock.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Submission to TSE failed");';
				echo'window.location.href="../pages/forms/ShopAddStock.php";';
				echo '</script>';
			}
	
			
	}else{
		echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../pages/forms/ShopAddStock.php";';
				echo '</script>';
			die;
		}
?>