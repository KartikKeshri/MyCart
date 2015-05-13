
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
<html>
	<title>
		Payment
	</title>
	<body>
		<h1 align="center"> <a href=""><font color="blue">Your Bill Please</font></a></h1>
		<h2 align="center">Through Debit Card</h2>
		<a href="pay1.php" ><font color='red'><h4 align="center">Click Here!</h4></font></a> <br>
		<h2 align="center">Through Net Banking</h2>
		<a href="pay2.php" ><font color='red'><h4 align="center">Click Here!</h4></font></a> 
	</body>
</html>
<?php include'footer.php';
include 'footer_bottom.php';
?>