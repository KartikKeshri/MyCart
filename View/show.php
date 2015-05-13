
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

<html>
    <head>
        <meta charset="UTF-8">
        <title>SHOW CART</title>
    </head>
    <body>
		  
        <?php
            include_once 'Header.php';
        ?>
		<font color='red'><H1 align="center"><ul>YOUR SHOPPING BILL</ul></H1></font>
		<table align="center" width="500" border=5>
			<tr bgcolor="pink"><td><font color="blue">Sno</font></td>
				<td><font color="blue">Name</font></td>
				<td><font color="blue">No of units</font></td>
				<td><font color="blue">Price</font></td>
				<td><font color="blue">Total</font></td>				
			</tr>
		
		
		<?php
			include_once '../Model/DBConn.php';
			if(isset($_REQUEST["id1"]))
            $iid=$_REQUEST["id1"];
                $sql = "select * from product where pr_id='$iid'";
            $db = new DBConn();
            $rs = $db->runQuery($sql);
        if($rs )
        {
           $row = mysql_fetch_array($rs);
		}
		else
		header("location:index.php");
			$var=$_SESSION['sno'];
			if(isset($_REQUEST['num']))
			  $n=$_REQUEST['num'];
			$name=$row[1];
			$price=$row[2];
			$tot=0;
			$c=$var;
			$_SESSION['print'][$var][0]=$name;
			$_SESSION['print'][$var][1]=$n;
			$_SESSION['print'][$var][2]=$price;
			$_SESSION['print'][$var][3]=$price*$n;
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
				echo"
					<style>
					td.one
					{
						border-style:solid;
						border-color:#0000ff;
					}
					td.two
					{
						border-style:solid;
						border-color:#ff0000 #0000ff;
					}`													
					td.three
					{
						border-style:solid;
						border-color:#ff0000 #00ff00 #0000ff;
					}
					td.four
					{
						border-style:solid;
						border-color:#ff0000 #0000ff #0000ff rgb(250,0,255);
					}
					</style>
					<tr ><td>$i</td>
				    <td >$A</td><td >$B</td><td>$C</td><td>$D</td></tr>
				<br>";
				$tot=$tot+$x;
			}
			echo"<tr>
				    <td colspan=4>TOTAL AMOUNT</td><td>Rs $tot/-</td></tr>";
					$tot=0;
		?>
		</table>
		<a href="index.php" align="center"><font color="blue" ><h4 align='center'>Continue Shopping</h4></font></a>
		<a href="payment.php" align="center"><font color="blue" ><h4 align='center'>Payment</h4></font></a>
		
		<?php
			include_once 'footer.php';
            include_once 'footer_bottom.php';
		?>
    </body>
</html>
