<?php 
session_start();
?> 
<body>
        <div class="header">
        <div class="header_top">
        <div class="container">
	  <div class="header_top_left">
   	          
              <ul class="nav">                    
                  <li><font color="blue" align="center">MyC@RT</font></li>
                  <li><a href="Register.php"><font color="red">Register</font></a></li>
                  <?php
				  if(!isset($_SESSION['login']))
				  echo "<li><a href='login.php'><font color='red'>Login</font></a></li>";
                  ?>
				  <?php
					if(isset($_SESSION["login"]))
					echo '<li><a href="../Controller/myacnt_cntr.php"><font color="red">MyAccount</font></a></li>';
                  ?>
				  <!--<li><a href="#"><font color="red">Your Cart</font></a></li>-->
                  <li><font color="blue">
                  <?php 
                //  session_start();
                        if (isset($_SESSION["login"])) {
                            echo "Hello ".$_SESSION["login"]."!";
                            echo '<li><a href="../Controller/signout_cntr.php"><font color="red">Logout</font></a></li>';    
                        }
                  ?>
                        </font>
                  </li>
				  
				  <li><table align="right">		   
				     <tr><td bgcolor="#2EFEF7" ><a href="show1.php" ><font color="#0000FF"><h3>CART
                                                    <?php                 
                                                       //session_start();   
                                                       $r=0;
													   if(isset($_SESSION["sno"]))
													   {
															$r=$_SESSION["sno"];													
													   }
													   	echo "(".$r.")";
                                                    ?></h3></font></a></td></tr>	
				  </table>
				  </li>
                        
		  <div class="clearfix"> </div>                
                </ul>
              <div class="clearfix"> </div>
          </div>
	  <div class="clearfix"> </div>
	</div>
  </div>
            <?php
                if (isset($_REQUEST["msg2"])) {
                            echo "<h4><font color='blue'>".$_REQUEST["msg2"]."</font><br><h4>";           
                        }
             ?>
  <div class="header_bottom">
	<div class="container">	 			
			
		<div class="header_bottom_right">			
	        <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
                                    <li><a href="index.php">HOME</a></li>
                                <!--    <li class="active"><a href="single.php">New</a></li> -->
															
                                        <li><a href="">Women</a>
											<ul>
												<li><a href="womenclothing.php">All Clothing</a></li>
												<li><a href="womenfootwear.php">Footwear</a></li>
												<li><a href="jewellery.php">Jewellery</a></li>
												
											</ul>
										</li>
										<li><a href="">Men</a>
											<ul>
                                                    <li><a href="menclothing.php">Clothing</a></li>
                                                    <li><a href="menfootwear.php">Footwear</a></li>
                                                    <li><a href="fragrances.php">All Fragrances</a></li>
                                                    <!--<li><a href="products.php">Watches and Sunglasses</a></li>-->
											</ul>
										</li>
                                        <li><a href="">Products</a>
											<ul>
												<li><a href="laptops.php">Laptops</a></li>
												<li><a href="mobiles.php">Mobiles</a></li>
												<li><a href="televisions.php">Televisions</a></li>	
											</ul>
										</li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->		  
	      <div class="clearfix"></div>		   
      </div>
    </div>
  </div>
</div>

    </body>
