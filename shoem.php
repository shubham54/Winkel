<!DOCTYPE HTML>
<html>
<head>
<title>winkel.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>
      <div class="header-top">
			 <div class="cssmenu">
							<ul>
                <?php
				session_start();
				?>
					
					<li><a href="edit.php"><?php echo "hello ".$_SESSION['ghost'] ?></a></li> |
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			  <div class="clear"></div>
 		</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images1/url.jpg" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Home</a></li>
			<li><a class="color4" href="womens.php">women</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Shop</h4>
								<ul>
									
									<li><a href="wbags.php">Handbags</a></li>
									<li><a href="womens.php">Clothing</a></li>
									<li><a href="wwatches.php">Watches</a></li>
                                    <li><a href="wshoes.php">Shoes</a></li>
								</ul>	
							</div>							
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color5" href="clothm.php">Men</a>
				<div class="megapanel">
                   <div class="row">
					 <div class="col1">
							<div class="h_nav">
								<h4>Shop</h4>
								<ul>
                                	
									<li><a href="beltm.php">Belts</a></li>
									<li><a href="clothm.php">Clothing</a></li>
                                    <li><a href="shoem.php">Shoes</a></li>
                                    <li><a href="accem.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
					</div>
                </div>
				</li>
				<li><a class="color6" href="clothes_k.php">Kids</a>
                <div class="megapanel">
                   <div class="row">
					 <div class="col1">
							<div class="h_nav">
								<h4>Shop</h4>
								<ul>
                                	
									<li><a href="shoes_k.php">Shoes</a></li>
									<li><a href="clothes_k.php">Clothing</a></li>
									<li><a href="watches_k.php">Watches</a></li>
                                    <li><a href="accessories_k.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
					</div>
                </div>
				</li>
				<li><a class="color6" href="offers.php">OFFERS</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  <form action="search.php" method="post">
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit"></form>
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			
		</ul>
        <?PHP
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
$abc2=$_SESSION['email2'];
$query2="select * from cart where email='$abc2'";
$result=mysql_query($query2);
$count=0;
while($row2=mysql_fetch_array($result))
{
	$count++;
}
$query="select * from cart2 where email= '$abc2'";
$result=mysql_query($query);
while($row2=mysql_fetch_array($result))
{
	$count++;
}
?>
	    <ul class="last"><li><a href="cart.php">Cart(<?php echo $count ?>)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">Men's</h2>
		  	
			<div class="top-box">
			 <div class="col_1_of_3 span_1_of_3"> 
			  
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/1st/Crocs-Beach-Line-Grey-Boat-Shoes-1623-4774061-1-catalog.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Crocs Beach Line Grey Boat Shoes</p>
							<div class="price1">
							  <span class="actual">Rs 5295</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="345" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/2nd/Adidas-Originals-Adv-Boost-Black-Sneakers-3202-2348451-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Originals Adv Boost Black Sneakers</p>
							<div class="price1">
							  <span class="actual">Rs 5400</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="346" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/3rd/Bugatti-Jovanni-Black-Boots-1540-6474241-1-catalog.jpg" alt=""/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Bugatti Jovanni Black Boots</p>
							<div class="price1">
							  <span class="reducedfrom">Rs 7999</span>
							  <span class="actual">Rs 9999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="347" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="clear"></div>
			</div>	
			<div class="top-box">
			  <div class="col_1_of_3 span_1_of_3">
			  	 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/4th/Nike-Air-Max-2015-Black-Running-Shoes-9330-5682331-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Nike Air Max 2015 Black Running Shoes</p>
							<div class="price1">
							  <span class="actual">Rs 10397</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="348" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/5th/Woodland-Blue-Outdoor-Shoes-1302-1320851-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Woodland Blue Outdoor Shoes</p>
							<div class="price1">
							  <span class="actual">Rs 3295</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="349" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/6th/Adidas-Originals-Ar-2.0-BLACK-SNEAKERS-8678-0743151-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Originals Veritas Mid Weave Black Sneakers</p>
							<div class="price1">
							  <span class="actual">Rs 7999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="350" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 
				</div>
				<div class="clear"></div>
			</div>	
			<div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/7th/Reebok-R-Crossfit-Sprint-2.0-Sbl-YELLOW-TRAINING-SHOES-8610-3634751-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Reebok R Crossfit Sprint 2.0 Sbl YELLOW TRAINING SHOES</p>
							<div class="price1">
							  <span class="actual">Rs 8999 </span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="351" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/8th/Dune-Table-Top-Tan-Lifestyle-Shoes-2365-9922741-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Dune Table Top Tan Lifestyle Shoes</p>
							<div class="price1">
							  <span class="reducedfrom">Rs 8999</span>
							  <span class="actual">Rs 7199</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="352" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				  
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/9th/Adidas-Adipower-Vector-WHITE-CRICKET-5516-9234111-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Adipower Vector WHITE CRICKET</p>
							<div class="price1">
							  <span class="actual">Rs 9999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="353" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="clear"></div>
			</div>	
		 <h2 class="head">Staff Pick</h2>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/10th/Nike-Air-Max-2015-Navy-Blue-Running-Shoes-5028-7720851-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Nike Air Max 2015 Navy Blue Running Shoest</p>
							<div class="price1">
							  <span class="actual">Rs 15995</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="354" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/11th/Aldo-Henrik-Navy-Blue-Moccasins-6002-6461151-1-catalog.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Aldo Henrik Navy Blue Moccasins</p>
							<div class="price1">
							  <span class="actual">Rs 6792</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="355" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/12th/Asics-Gel-Noosa-Tri-10-Blue-Running-Shoes-6030-3569611-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Asics Gel-Noosa Tri 10 Blue Running Shoes</p>
							<div class="price1">
							  <span class="actual">Rs 6649</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="356" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="clear"></div>
			</div>	
		   <h2 class="head">New Products</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/13th/Puma-Evospeed-4.4-Fg-Orange-Football-Shoes-9306-7618851-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Puma Evospeed 4.4 Fg Orange Football Shoes</p>
							<div class="price1">
							  <span class="actual">Rs 5499</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="357" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/14th/Reebok-R-Crossfit-Nano-4.0-Blue-Training-Shoes-2806-1840211-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Reebok R Crossfit Nano 4.0 Blue Training Shoesr</p>
							<div class="price1">
							  <span class="actual">Rs 9999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="358" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/shoe/15th/Dune-Rescue-Di-Navy-Blue-Moccasins-2315-7922741-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Dune Rescue Di Navy Blue Moccasins</p>
							<div class="price1">
							  <span class="actual">Rs 8799</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="359" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="clear"></div>
			</div>			 							 			    
		  </div>
			<div class="rsingle span_1_of_single">
				
		       <script src="js/jquery.easydropdown.js"></script>
		      </div
		      ><div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/2.png"><span class="f-text" style="width:500px;">Free Shipping on orders over Rs 1000</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/3.png"><span class="f-text">Call us! toll free-222-555-6666 </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
			 <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
 				  </div>
				  <div class="col_1_of_f_2 span_1_of_f_2">
						<h3>From Twitter</h3>
				       <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>You’re not alone when it comes to the heartache felt because you can't buy stuff in your cart. #OnlineShoppingLingo</p>
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Best online shooping site.#winkelisthebest</p>
							</div>
							<div class="clear"> </div>
					  </div>
				</div>
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Information</h3>
						<div class="company_address">
                        	<p>When you log into Winkel.com, you will find that all the fun elements of shopping in malls have been exceptionally replicated. The easy-to-use interface that includes filters, compare options, buying guides, interactive descriptions and reviews, you'll see that shopping on Winkel is fun and easy.</p>
                         </div>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>INDIA</p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail@winkel.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="https://plus.google.com/" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="https://www.linkedin.com/" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="https://www.rss.com/
" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="https://www.facebook.com/" target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	                <div class="copy">
			           <p>© Winkel.com<a href="index.php"  target="_blank"></a></p>
		            </div>
		       <div class="f-list2">
				<ul>
					<li class="active"><a href="about.php">About Us</a></li> |
					<li><a href="delivery.php">Delivery & Returns</a></li> |
					<li><a href="delivery.php">Terms & Conditions</a></li> |
					<li><a href="contact.php">Contact Us</a></li> 
				</ul>
			  </div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
</body>
</html>