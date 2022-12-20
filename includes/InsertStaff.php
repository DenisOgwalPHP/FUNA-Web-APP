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
	$staffname = $_POST['staffname'];
	$stafftype = $_POST['stafftype'];
	$shop = $_POST['Shops'];
	$identification = $_POST['NIN'];
	$identificationType = $_POST['Idtype'];
	require_once('../connect/connect.php');
	$fetchlogin ="SELECT COUNT('StaffNo')As Counter1 FROM `staffregistration` WHERE `StaffType` = '".$stafftype."'";
	$result2=mysqli_query($link,$fetchlogin);
			$row3=mysqli_fetch_assoc($result2);	
			$numberofstaff=$row3['Counter1'];
			$increment=$numberofstaff+1;
			if($stafftype=="Top"){
						if($increment<=9){
						$staffno ="TOP00".$increment;
						}elseif($increment<=99){
						$staffno ="TOP0".$increment;
						}else{
						$staffno ="TOP".$increment;
						}
			}else if($stafftype=="Logistics"){
						if($increment<=9){
						$staffno ="LOG00".$increment;
						}elseif($increment<=99){
						$staffno ="LOG0".$increment;
						}else{
						$staffno ="LOG".$increment;
						}
			}else if($stafftype=="Regional Manager"){
						if($increment<=9){
						$staffno ="REG00".$increment;
						}elseif($increment<=99){
						$staffno ="REG0".$increment;
						}else{
						$staffno ="REG".$increment;
						}
			}else if($stafftype=="Accounts Manager"){
						if($increment<=9){
						$staffno ="ACC00".$increment;
						}elseif($increment<=99){
						$staffno ="ACC0".$increment;
						}else{
						$staffno ="ACC".$increment;
						}
			}else if($stafftype=="Shop Attendant"){
						if($increment<=9){
						$staffno ="SHO00".$increment;
						}elseif($increment<=99){
						$staffno ="SHO0".$increment;
						}else{
						$staffno ="SHO".$increment;
						}
			}else{
						if($increment<=9){
						$staffno ="TSE00".$increment;
						}elseif($increment<=99){
						$staffno ="TSE0".$increment;
						}else{
						$staffno ="TSE".$increment;
						}
			}		
	$query = "INSERT INTO `staffregistration` (StaffNo,StaffName,StaffType,Shop,Identification,IdentificationType) VALUES('$staffno','$staffname','$stafftype','$shop','$identification','$identificationType')";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Staff Registered with Staff No.'.$staffno.'");';
				echo'window.location.href="../pages/forms/StaffRegistration.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Staff registration Failed");';
				echo'window.location.href="../pages/forms/StaffRegistration.php.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../pages/forms/StaffRegistration.php.php";';
				echo '</script>';
			die;
		}
?>