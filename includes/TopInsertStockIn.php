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
	require_once('../connect/connect.php');
	if($qty!=""||$qty1!=""||$qty2!=""||$qty3!=""||$qty4!=""||$qty5!=""||$qty6!=""){
		if($qty!=""){
	$query = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination','$qty','$cost','$staffno','Pending','Pending')";
			$result=mysqli_query($link,$query);
	}
	if($qty1!=""){
	$query1 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination1','$qty1','$cost1','$staffno','Pending','Pending')";
			mysqli_query($link,$query1);
	}
	if($qty2!=""){
	$query2 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination2','$qty2','$cost2','$staffno','Pending','Pending')";
			mysqli_query($link,$query2);
	}
	if($qty3!=""){
	$query3 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination3','$qty3','$cost3','$staffno','Pending','Pending')";
			mysqli_query($link,$query3);
	}
	if($qty4!=""){
	$query4 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination4','$qty4','$cost4','$staffno','Pending','Pending')";
			mysqli_query($link,$query4);
	}
	if($qty5!=""){
	$query5 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination5','$qty5','$cost5','$staffno','Pending','Pending')";
			mysqli_query($link,$query5);
	}
	if($qty6!=""){
	$query6 = "INSERT INTO `mainofficestock`(Denomination,Quantity,MoneyWorth,IssuedBy,ApprovedBy,ApprovalStatus) VALUES('$denomination6','$qty6','$cost6','$staffno','Pending','Pending')";
			mysqli_query($link,$query6);
	}
				echo '<script type="application/javascript">';
				echo'alert("Stock submitted to Main Office");';
				echo'window.location.href="../pages/forms/TopStockInForm.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Submission to main office failed");';
				echo'window.location.href="../pages/forms/TopStockInForm.php";';
				echo '</script>';
			}
	
			
	}else{
		echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../pages/forms/TopStockInForm.php";';
				echo '</script>';
			die;
		}
?>