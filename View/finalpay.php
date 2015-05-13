
<!DOCTYPE HTML>
<html>
<head>
<title>Payment</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>

<?php 
include_once 'Header.php';
?>
<?php
	$name = "";
	$card = "";
	$expdt = "";
	$cvv = "";
	$pin = "";
	$un = "";
	$ps = "";
	$v = "";
	static $check = 0;
	if(isset($_POST['np2']))
	{
		$un = $_POST['np2'];
		$check = 1;
	}
	if(isset($_POST['pp2']))
	{
	    $ps = $_POST['pp2'];
		$check = 1;
	}
	if(isset($_POST['na']))
	{
		$name = $_POST['na'];
	}
	if(isset($_POST['cdno']))
	{
		$card = $_POST['cdno'];
	}
	if(isset($_POST['dt']))
	{
		$expdt = $_POST['dt'];
	}
	if(isset($_POST['cvv']))
	{
		$cvv = $_POST['cvv'];
	}
	if(isset($_POST['pn']))
	{
		$pin = $_POST['pn'];
	}
	if($check!=1&&(strlen($name)<5||strlen($name)>15))
	{
		$msgk = "Enter valid name";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if($check!=1&&strlen($card)!=16)
	{
		$msgk = "Enter valid card number";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if($check!=1&&strlen($expdt)!=7)
	{
		$msgk = "Wrong expiry date <br> Try Again!";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if(($check!=1&&strlen($name)<5||strlen($name)>15))
	{
		$msgk = "Enter valid name";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if($check!=1&&strlen($cvv)!=3)
	{
		$msgk = "Enter valid cvv number.";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if($check!=1&&strlen($pin)!=4)
	{
		$msgk = "Enter a valid pin number";
		header("location:pay1.php?msgkk=$msgk");
	}
	else if($check!=1)
	echo "<h1 align='center'>Payment Successfull!</h1>";
	else if($check==1)
	{
		if(strlen($un)<5||strlen($ps)>15)
		{
			$v = "Invalid Username or password";
			header("location:pay2.php?ans=$v");
		}
		else
		echo "<h1 align='center'>Payment Successfull!</h1>";
		
		if(isset($_SESSION['sno']))
		{
		    unset($_SESSION['sno']);
		   # header("location:finalpay.php");
		}
	}
	if(isset($_SESSION['sno']))
	{
		unset($_SESSION['sno']);
		header("location:finalpay.php");
	}
	
?>
<?php include'footer.php';
include 'footer_bottom.php';
?>