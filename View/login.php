
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
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
    
<?php include_once 'Header.php'?>

    <div class="contact">
      	<div class="container">
      	    <div class="account_grid">
			   
			   <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
                                <form action="../Controller/login_cntr.php" method = "post" >
				  <div>
					<span>Username<label>*</label></span>
                                        <input type="text" name="username"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
                                        <input type="password" name="password"> 
				  </div>
                                      <a class="forgot" href="register.php">Forgot Your Password?</a>
                                      <input type="submit" value="Login">
                                
                                      <?php
                                                 if(isset($_REQUEST["msg"]))
                                                 echo "<br>".$_REQUEST["msg"]."<br>";
                                      ?>
                                </form>
			   </div>	
			   <div class="clearfix"> </div>
	    </div>
      	</div>
    </div>
      <div class="grid-2">
       	<div class="container">
       		<p>We accept<img src="images/paypal.png" class="img-responsive" alt="" align="middle" /></p>
       	</div>
       </div>
       
       <?php include_once 'footer.php';?>
       <?php include_once 'footer_bottom.php';?>
      
</body>
</html>		