
<!DOCTYPE HTML>
<html>
<head>
<title>MyCART</title>
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
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>

<?php 
    include_once 'Header.php'; 
?> 

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
    
<div class="slider">
	<div class="callbacks_container">
	    <ul class="rslides" id="slider">
	        <li><img src="images/nn.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/pp10.jpg" class="img-responsive" alt=""/></li>
			<li><img src="images/front slider/lenovo.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/banner1.jpg" class="img-responsive" alt=""/></li>
	        <li><img src="images/premium_shoe.jpg" class="img-responsive" alt=""/></li>
			</ul>
	</div>
</div>
    
<div class="column_center">
  <div class="container">
	<div class="search"> 
	<div class="clearfix"> </div>
	</div>
	<ul class="social">
	  <li class="find">Find us here</li>
	  <li><a href="https://www.facebook.com/kartik.keshri.739"> <i class="fb"> </i> </a></li>
	  <li><a href="#"> <i class="tw"> </i> </a></li>
	  <li><a href="#"> <i class="dribble"> </i></a></li>
	  <div class="clearfix"> </div>
	</ul>
	<div class="clearfix"> </div>
  </div>
</div>
<div class="brand">
 <div class="container">
	<img src="images/brands.jpg" class="img-responsive" alt=""/>
 </div>
</div>
<div class="sap_tabs">	
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Most Popular</span></li>	  
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<ul class="tab_img">
									    <li>
										<div class="view view-first">
										<img src="images/product/Television/images.jpg" class="img-responsive" alt=""/>
											<div class="mask">
						                        <div class="info"> </div>
								            </div>
												<div class="tab_desc">
                                                    <form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Sony Bravia</a></h3>
														<p>Rs 70,000</p>
														
														<Button type="submit" name = "id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h1"> Add to cart</Button>                                                        
													</form>	 
												</div>
										  </div>
									    </li>
									        <li>
										<div class="view view-first">
                                            <img src="images/product/Television/t1.jpg" class="img-responsive" alt=""/>
											<div class="mask">
                                            <div class="info"> </div>
								            </div>
								            <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Samsung Lcd</a></h3>
														<p>Rs 64,599</p>
														
														
														<Button type="submit" name ="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h2"> Add to cart </Button>                                                                                   
													</form>		 
											</div>
										</div>
										</li>
										<li>
										  <div class="view view-first">
                                           <img src="images/product/laptops/dell6.jpg" class="img-responsive" alt=""/>
											<div class="mask">
						                        <div class="info"> </div>
								            </div>
								                <div class="tab_desc">
												   <form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">DELL XPS</a></h3>
														<p>Rs 85,000</p>
														<Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h3">Add to cart </Button>                                                                                                 
												  </form>		  	  
                                                </div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
									    <li>
									     <div class="view view-first">
                                            <img src="images/product/laptops/sony3.jpg" class="img-responsive" alt=""/>
											<div class="mask">
						                        <div class="info"> </div>
								            </div>
												<div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
													    <h3><a href="#">Sony</a></h3>
														<p>Rs 49,000</p>
													    <Button type="submit" name ="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h4">Add to cart </Button>                                                                                                 
													</form>		  	
												</div>
										  </div>
										</li>
										<li>
										 <div class="view view-first">
                                          <img src="images/product/mobiles/moto3.jpg" class="img-responsive" alt=""/>
											<div class="mask">
						                        <div class="info"> </div>
								            </div>
												<div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">MotoG2</a></h3>
														<p>Rs 12,999</p>
													    <Button type="submit" name ="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h5">Add To Cart</Button>

													</form>		  
												</div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
										<li class="last">
										  <div class="view view-first">
                                            <img src="images/product/mobiles/sam3.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								                <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Samsung Galaxy Note2</a></h3>
														<p>Rs 37,500</p>
														<Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h6"> Add To Cart</Button>                                                                      
													</form>		  		 
												</div>
										  </div>
											<div class="sale-box"> </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			   <img src="images/pic8.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								                <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Feel Tank</a></h3>
													    <p>Rs 6000</p>
													    <Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h7">Add To Cart</Button>                                                                           
													</form>		  		  
										   	    </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic7.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								                <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Feel Tank</a></h3>
													    <p>Rs 6500</p>  
													    <Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h8">Add To Cart</Button>                                                                         
													</form>		  		 
												</div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic3.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								            <div class="tab_desc">
												<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Feel Tank</a></h3>
														<p>rs 4500</p>
														<Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h9">Add To Cart</Button>                                                                          
												</form>		  		 
											</div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
									    <li>
									     <div class="view view-first">
					   		  			   <img src="images/pic9.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								                </div>
								            <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Feel Tank</a></h3>
													    <p>Rs 3200</p>
													    <Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h10">Add To Cart</Button>                                                                        
													</form>		  
											</div>
										  </div>
										</li>
										<li>
										 <div class="view view-first">
					   		  			   <img src="images/pic5.jpg" class="img-responsive" alt=""/>
											<div class="mask">
						                        <div class="info"> </div>
								                </div>
								                <div class="tab_desc">
													<form action="../Controller/addcart_cntr.php" method="post">
														<h3><a href="#">Feel Tank</a></h3>
													    <p>Rs 6000</p>
													    <Button type="submit" name="id" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="h11">Add To Cart</Button>                                                                                 
													</form>		  
												</div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
										<li class="last">
										  <div class="view view-first">
					   		  			   <img src="images/pic6.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 4900</p>
												  <a href="../Controller/addcart_cntr.php" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
											<div class="sale-box"> </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			   <img src="images/pic10.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 5100</p>
												  <a href="../Controller/addcart_cntr.php" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic2.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 6230</p>
												  <a href="../Controller/addcart_cntr.php" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic3.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 4261</p>
												  <a href="../Controller/addcart_cntr.php" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
									    <li>
									     <div class="view view-first">
					   		  			   <img src="images/pic4.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 5649</p>
												  <a href="../Controller/addcart_cntr.php" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										 <div class="view view-first">
					   		  			   <img src="images/pic12.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 2900</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
										<li class="last">
										  <div class="view view-first">
					   		  			   <img src="images/pic11.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 2500</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
											<div class="sale-box"> </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			   <img src="images/pic10.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 4700</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic2.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 5100</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										  <div class="view view-first">
					   		  			   <img src="images/pic9.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 4320</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
									    <li>
									     <div class="view view-first">
					   		  			   <img src="images/pic4.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 4100</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										</li>
										<li>
										 <div class="view view-first">
					   		  			   <img src="images/pic13.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>Rs 3590</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
										  <div class="sale-box"> </div>
										</li>
										<li class="last">
										  <div class="view view-first">
					   		  			   <img src="images/pic8.jpg" class="img-responsive" alt=""/>
											 <div class="mask">
						                        <div class="info"> </div>
								              </div>
								              <div class="tab_desc">
												  <h3><a href="#">Feel Tank</a></h3>
												  <p>$4900</p>
												  <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""/></a>
											  </div>
										  </div>
											<div class="sale-box"> </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>		        					 	        					 
						  </div>	
                  </div>
          </div>
          <div class="clearence">
          	<div class="container">
          		<div class="m_3"><span class="left_line1"> </span><i class="clearence"> </i><span class="right_line1"> </span></div>
          	</div>
          </div>
          <div class="content_bottom">
          	<div class="container">
          		<ul class="grid1">
          		  <li>
					<div class="view view-first">
					  <img src="images/b1.jpg" class="img-responsive" alt=""/>
					    <div class="tab_desc">
                                            <form action="../Controller/addcart_cntr.php" method="post">
												<h3><a href="#">Feel Tank</a></h3>
												<p>Rs 6200</p>
												<input type="hidden" name="id" value="h7">
												<input type="hidden" name="cart" value="images/b1.jpg">
												<input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="Add To Cart">                                                                                                 
											</form>		  		 
                        </div>
					</div>
				  </li>
				  <li>
					<div class="view view-first">
					  <img src="images/b2.jpg" class="img-responsive" alt=""/>
					    <div class="tab_desc">
                                            <form action="../Controller/addcart_cntr.php" method="post">
                                                <h3><a href="#">Feel Tank</a></h3>
												<p>Rs 4100</p>
                                                <input type="hidden" name="id" value="h8">
												<input type="hidden" name="cart" value="images/b2.jpg">
												<input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="Add To Cart">                                                                                                 
											</form>		  		                                                                                
                        </div>
					</div>
					<div class="sale-box1"> </div>
				  </li>
				  <li>
					<div class="view view-first">
					  <img src="images/b3.jpg" class="img-responsive" alt=""/>
					    <div class="tab_desc">
                                            <form action="../Controller/addcart_cntr.php" method="post">
												<h3><a href="#">Feel Tank</a></h3>
												<p>Rs 4300</p>
												<input type="hidden" name="id" value="h9">
												<input type="hidden" name="cart" value="images/b3.jpg">
												<input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="Add To Cart">                                                                                                 
										  </form>		  		 
                                                                                
                        </div>
					</div>
				  </li>
				  <li class="grid1_last">
					<div class="view view-first">
					  <img src="images/b4.jpg" class="img-responsive" alt=""/>
					    <div class="tab_desc">
											<form action="../Controller/addcart_cntr.php" method="post">
                                                   <h3><a href="#">Feel Tank</a></h3>
												   <p>Rs 4300</p>
                                                   <input type="hidden" name="id" value="h10">
                                                   <input type="hidden" name="cart" value="images/b4.jpg">
                                                   <input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: black; background-color: #ff0066; border: 3pt ridge lightgrey" value="Add To Cart">                                                                                
										    </form>		  		 
                        </div>
					</div>
					<div class="sale-box1"> </div>
				  </li>
				  <div class="clearfix"> </div>
				</ul>
          	</div>
          </div>
       <div class="brands">
       	<div class="m_3"><span class="left_line"> </span><h3>Favourite Brands</h3><span class="right_line"> </span></div>
       	<div class="container">
       		<ul class="brands_list">
       		  <li><img src="images/br1.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br2.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br3.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br4.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br5.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br6.jpg" class="img-responsive" alt=""/></li>
       		  <li><img src="images/br7.jpg" class="img-responsive" alt=""/></li>
       		  <li class="brand_last"><img src="images/br8.jpg" class="img-responsive" alt=""/></li>
       		  <div class="clearfix"> </div>
       		</ul>
       	</div>
       </div>
       <div class="grid-1">
       	<div class="container">
       		<h1>About MyCART</h1>
       		<p>MyCART is a leading destination for online shopping in India, offering some of the best prices and a completely hassle-free experience with options of paying through Cash on Delivery, Debit Card, Credit Card and Net Banking processed through secure and trusted gateways. Now shop for your favorite books, apparel, footwear, lifestyle accessories, baby care products, toys, posters, sports and fitness, mobile phones, laptops, cameras, movies, music, health and beauty, televisions, refrigerators, air-conditioners, washing machines, MP3 players and products from a host of other categories available. Some of the top selling electronic brands on the website are Samsung, HTC, Nokia, Dell, HP, Sony, Canon, Nikon, LG, Toshiba, Philips, Braun, Bajaj and Morphy Richards. Browse through our cool lifestyle accessories, apparel and footwear brands featured on our site with expert descriptions to help you arrive at the right buying decision. MyCART also offers free home delivery for many of our products along with easy EMI options. Get the best prices and the best online shopping experience every time, guaranteed.</p>
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