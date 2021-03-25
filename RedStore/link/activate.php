<?php
session_start();
ob_start();
?>

<?php


include 'dbase.php';

if (isset($_GET['token'])) {
	$token = $_GET['token'];

	$updatequery = " update redcart set status='active' where token='$token' ";

	$query =  mysqli_query($con,$updatequery);
	if ($query) {
		if (isset($_SESSION['win'])) {
	$_SESSION['win'] = "Hi $username Create account  successfully, account is active now ! ";
	$_SESSION['win_code'] = "Good job!";
			header('location:index.php');
		}else{
			$_SESSION['win'] = "Create account  successfully,You are logged out. ";
			$_SESSION['win_code'] = "Good job!";
			header('location:index.php');
		}
	}else{
		$_SESSION['msgs'] = "Account not update ";
		$_SESSION['msgs_code'] = "Error";
			header('location:index.php');
	}
}

?>


