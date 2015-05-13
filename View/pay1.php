
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

<form action="finalpay.php" method="post">
<table align="center" width=300>
	<tr><td>Name on card</td><td><input type="text" name="na"></td></tr>
	<tr><td>Card No</td><td><input type="text" name="cdno"></td></tr>
	<tr><td>Expiry Date</td><td><input type="date" name="dt" placeholder="MM/YYYY"></td></tr>
	<tr><td>Cvv(3 digit)</td><td><input type="text" name="cvv"></td></tr>
    <tr><td>Pin(4 digit)</td><td><input type="password" name="pn"></td></tr>
	<tr><td></td><td ><input type="submit" value="Click to Pay"></td></tr>
</table>
</form>
<?php
   if(isset($_REQUEST['msgkk']))
   {
		echo "<h1 align='center'><font color='red'>".$_REQUEST['msgkk']."</font></h1>";
   }
   else
   if(isset($_REQUEST['ms']))
	echo "<h1 align='center'><font color='blue'>".$_REQUEST['ms']."</font></h1>";
?>

<?php include'footer.php';
include 'footer_bottom.php';
?>