
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
	<tr><td>Username</td><td><input type="text" name="np2"></td></tr>
	<tr><td>Password</td><td><input type="password" name="pp2"></td></tr>
	<tr><td></td><td ><input type="submit" value="Click to Pay"></td></tr>
</table>
</form>
<?php 
if(isset($_REQUEST['ans']))
{
	echo "<h1 align='center'><font color='red'>".$_REQUEST['ans']."</font></h1>";
}
?>
<?php include'footer.php';
include 'footer_bottom.php';
?>