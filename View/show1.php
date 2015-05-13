
<!DOCTYPE HTML>
<html>
<head>
<title>Show Cart</title>
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
<font color='red'><H1 align="center"><ul>YOUR SHOPPING BILL</ul></H1></font>
		<table align="center" width="500" border=10>
			<tr bgcolor="pink"><td><font color="blue">Sno</font></td>
				<td><font color="blue">Name</font></td>
				<td><font color="blue">No of units</font></td>
				<td><font color="blue">Price</font></td>
				<td><font color="blue">Total</font></td>
				
			</tr>
<?php		
$var=0;
if(isset($_SESSION['sno']))
			$var=$_SESSION['sno'];
			$tot=0;
			$z=0;
			$o=1;
			$t=2;
			$three=3;
			for($i=1;$i<=$var;$i++)
			{
				$pr=$_SESSION['print'][$i][1];
				$nn=$_SESSION['print'][$i][2];
				$x=$pr*$nn;
				$A=$_SESSION['print'][$i][$z];
				$B=$_SESSION['print'][$i][$o];
				$C=$_SESSION['print'][$i][$t];
				$D=$_SESSION['print'][$i][$three];
				echo"<tr bgcolor='pink'><td>$i</td>
				    <td>$A</td><td>$B</td><td>$C</td><td>$D</td></tr>
				<br>";
				$tot=$tot+$x;
			}
			echo"<tr>
				    <td colspan=4>TOTAL AMOUNT</td><td>Rs $tot</td>/-</tr>";
					$tot=0;
?>
</table>
				<a href="index.php" align="center"><font color="blue" ><h4 align='center'>Continue Shopping</h4></font></a>
				<a href="payment.php" align="center"><font color="blue" ><h4 align='center'>Payment</h4></font></a>
					<?php include'footer.php';
					include 'footer_bottom.php';
					?>