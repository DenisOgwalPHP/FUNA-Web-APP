<?php
session_start();
/*if(!$_SESSION['user'] ){
	header('location:index.php');
	
	}
	else{	
	header('location:DashBoard2.php');		
	}*/
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
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptedpassword = md5($password);
	require_once('connect/connect.php');
	$fetchlogin ="SELECT COUNT('StaffNo')As Counter1 FROM `login` WHERE `StaffNo` = '".$email."' and `Status`='Online' ";
	$result2=mysqli_query($link,$fetchlogin);
			$row3=mysqli_fetch_assoc($result2);	
			if($row3['Counter1']== 0){			
	$newfetch ="SELECT accountcreation.StaffNo,accountcreation.Password,staffregistration.StaffName,staffregistration.StaffType,staffregistration.Shop FROM `accountcreation`,`staffregistration` WHERE accountcreation.StaffNo = '".$email."' and accountcreation.ApprovalStatus ='Approved'  and accountcreation.StaffNo = staffregistration.StaffNo";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)<=1){
				$staffno= $row2[0];
				$staffName= $row2[2];
				$stafftype=$row2[3];
				$shops= $row2[4];
	          $fetchedpassword = $row2[1];
			if( $fetchedpassword ==$encryptedpassword){
				$_SESSION['user']=$staffName;
				$_SESSION['UserName']=$staffno;
				$_SESSION['UserType']=$stafftype;
				$_SESSION['Shop']=$shops;
				$newinsert ="UPDATE `login` SET StaffNo='$staffno', Status='Online' where StaffNo='$staffno'";
				mysqli_query($link,$newinsert);
				if($stafftype=="Top"){
				header('Location: DashBoard.php');
				}else if($stafftype=="Logistics"){
					header('Location: DashBoard1.php');
					}
					else if($stafftype=="Regional Manager"){
						header('Location: DashBoard2.php');
						}
					else if($stafftype=="Accounts Manager"){
						header('Location: DashBoard3.php');
						}
					else if($stafftype=="Shop Attendant"){
						header('Location: DashBoard4.php');
						}
					else{
						echo '<script type="application/javascript">';
						echo'alert("This Staff No Has No Authority to Access this system");';
						echo'window.location.href="index.php";';
						echo '</script>';
						}
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Staff No");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("UserName Does Not exist");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Your Already logged in some where");';
				echo'window.location.href="index.php";';
				echo '</script>';
					
				}
	}else{
			header("location: pages/examples/register.php");
			die;
		}
?>