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
	$region = $_POST['region'];
	$Shop = $_POST['Shop'];
	require_once('../connect/connect.php');
	$query = "INSERT INTO `shopmapping` (Region,ShopName) VALUES('$region','$Shop')";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Shop Registered");';
				echo'window.location.href="../pages/forms/RegionRegForm.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Shop Registration Failed");';
				echo'window.location.href="../pages/forms/RegionRegForm.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../pages/forms/RegionRegForm.php";';
				echo '</script>';
			die;
		}
?>