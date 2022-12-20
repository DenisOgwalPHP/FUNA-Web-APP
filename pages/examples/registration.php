<?php
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

// starting to test for password match
if($_POST['password'] == $_POST['password2']){
			$password = $_POST['password2'];
			}else{
			//TODO: Passwords did not match, throw the user out!
			unset($_POST);
				echo '<script type="application/javascript">';
				echo'alert("passwords Do not match");';
				echo'window.location.href="register.php";';
				echo '</script>';
		}

// getting inputs from the form		
	$password = $_POST['password2'];
	$encryptedpassword = md5($password);
	$staffno = $_POST['staffno'];
	require_once('../../connect/connect.php');
	
	//checking if user is already registered
			$count ="SELECT COUNT('StaffNo') AS Counter FROM `accountcreation` WHERE `StaffNo` = '".$staffno."'";
			$result=mysqli_query($link,$count);
			$row=mysqli_fetch_assoc($result);
		if($row['Counter'] == 0){
				//echo '<script type="application/javascript">';
				//echo'alert("Creating Your Account");';
				//echo'window.location.href="register.php";';
				/*echo '<!--</script>';*/
	//creating the account
			$query = "INSERT INTO `accountcreation` (StaffNo,Password,ApprovalStatus) VALUES('$staffno','$encryptedpassword','Pending')";
			mysqli_query($link,$query);
			
	//Checking if the account is created
			$newcount ="SELECT COUNT('StaffNo')As Counter1 FROM `accountcreation` WHERE `StaffNo` = '".$staffno."'";
			$result1=mysqli_query($link,$newcount);
			$row1=mysqli_fetch_assoc($result1);	
			if($row1['Counter1']== 1){
				$newinsert ="INSERT INTO `login` (StaffNo,Status) Values ('$staffno','Offline') ";
				mysqli_query($link,$newinsert);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Account Has Been Created, Wait for Approval to begin Using it");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be created");';
				echo'window.location.href="register.php";';
				echo '</script>';
			}
			}else{
			//Wrong username or password message
				echo '<script type="application/javascript">';
				echo'alert("Account Already Exists");';
				echo'window.location.href="register.php";';
				echo '</script>';
	}
	}else{
			echo '<script type="application/javascript">';
				echo'alert("failed to find region shop belongs to");';
				echo'window.location.href="register.php";';
				echo '</script>';
			die;
		}
?>