<!DOCTYPE HTML>
<html>
<head>
<title>ADD TO CART </title>
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
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>	
</head>
<body>
<?php 

include_once 'Header.php';
include_once '../Model/DBConn.php';
            
			
			/*if(isset($_REQUEST["cartcntr"]))
			{
				$im=$_REQUEST["cartcntr"];
                echo "<div align='center'><img src=$im width='500' height='400'></div>";   
            }*/
            $db = new DBConn();
			
			if(isset($_REQUEST["db"])){
            $iid=($_REQUEST["db"]);
                $sql = "select * from product where pr_id=$iid";
            $rs = $db->runQuery($sql);
            }            
        if($rs )
        {
           $row = mysql_fetch_array($rs);
		   
		   echo "<div align='center'><img src='$row[4]' width='500' height='400'></div>";
		   echo "<div align='center'><table align='top_right' border=20 width=500 height=200>
                <tr><td>Product Id<td>$row[0]<td></td></tr>
                <tr><td>Product Name<td>$row[1]<td></td></tr>
                <tr><td>Product Price<td>$row[2]<td></td></tr>
           </table>
           <form action='show.php' action=post align='center'>
                  <font color='red'> <h4>No of units</h4></font><input type='text' name='num'>
                  <input type=hidden name='id1' value=$row[0]>
				  <input type='submit' value='ADD TO CART'>
           </form></div>";
        }
        else
        {
            header("location:index.php");
        }
?>		
<?php include_once 'footer.php'; ?>
<?php include_once 'footer_bottom.php'; ?>
