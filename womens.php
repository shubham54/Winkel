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
		  	<h2 class="head">Women's</h2>
		  	
			<div class="top-box">
			 <div class="col_1_of_3 span_1_of_3"> 
			   
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/1st/Miss-Bennett-London-Beige-Half-Sleeve-Top-2708-9140541-1-pdp_slider_l.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Miss Bennett London Beige Half Sleeve Top</p>
							<div class="price1">
							  <span class="actual">Rs.699</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="405" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/2nd/TOPSHOP-Black-Jamie-Flares-6907-8208951-1-pdp_slider_l.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">TOPSHOP
Black Jamie Flares</p>
							<div class="price1">
							  <span class="actual">Rs.4590</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="406" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/3rd/Dorothy-Perkins-Blue-Colored-Printed-Shift-Dress-6003-5934061-1-pdp_slider_l.jpg" alt=""/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Dorothy Perkins
Blue Colored Printed Shift Dress</p>
							<div class="price1">
							  <span class="reducedfrom"></span>
							  <span class="actual">Rs.3290</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="407" name="aa">
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
						<img src="images1/women/new arrival/4th/MIAMINX-Grey-Colored-Solid-Shift-Dress-9519-4499061-1-pdp_slider_l.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">MIAMINX
Grey Colored Solid Shift Dress</p>
							<div class="price1">
							  <span class="actual">Rs.999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="408" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/5/TOPSHOP-Strappy-Square-Neck-Bodycon-Dress-5202-2518951-1-pdp_slider_l.jpg"
                         alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">TOPSHOP
Strappy Square Neck Bodycon Dress</p>
							<div class="price1">
							  <span class="actual">Rs.4490</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="409" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/6/TOPSHOP-Oversized-Checked-Shirt-7414-9218951-1-pdp_slider_l.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">TOPSHOP
Oversized Checked Shirt</p>
							<div class="price1">
							  <span class="actual">Rs.3690</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="410" name="aa">
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
						<img src="images1/women/new arrival/7/Miss-Bennett-London-Pu-Biker-Jacket-7023-1240541-1-pdp_slider_l.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Miss Bennett London
Pu Biker Jacket</p>
							<div class="price1">
							  <span class="actual">Rs.4499</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="411" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/8/Vero-Moda-White-Solid-Shirt-1104-1389651-1-pdp_slider_l.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Vero Moda
White Solid Shirt</p>
							<div class="price1">
							  <span class="reducedfrom"></span>
							  <span class="actual">Rs.2895</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="412" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				  
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/9/Only-Blue-Solid-Shirt-7124-2365161-1-pdp_slider_l.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Only
Blue Solid Shirt</p>
							<div class="price1">
							  <span class="actual">Rs.1995</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="413" name="aa">
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
						<img src="images1/women/new arrival/10/Miss-Bennett-London-Denim-Pini-Dress-1211-6225341-1-pdp_slider_l.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Miss Bennett London
Denim Pini Dress</p>
							<div class="price1">
							  <span class="actual">Rs.1840</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="414" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/11/Lara-Karen-3-4Th-Japnese-Sleeve-Printed-Tunic-1606-4145541-1-pdp_slider_l.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Lara Karen
3/4Th Japnese Sleeve Printed Tunic</p>
							<div class="price1">
							  <span class="actual">Rs.1200</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="415" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/12/Vero-Moda-Black-A-Line-Skirt-With-Belt-6404-8579651-1-pdp_slider_l.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Vero Moda
Black A-Line Skirt With Belty</p>
							<div class="price1">
							  <span class="actual">Rs.2295</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="416" name="aa">
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
						<img src="images1/women/new arrival/13/TOPSHOP-Ribbed-High-Neck-Top-0813-9097951-1-pdp_slider_l.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">TOPSHOP
Ribbed High Neck Top</p>
							<div class="price1">
							  <span class="actual">Rs.1390</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="417" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
					
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/14/Sangria-Tunic-With-Short-Sleeves-And-Tie-Up-At-Contrast-Yoke-1610-3211641-1-pdp_slider_l.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Sangria
Tunic With Short Sleeves And Tie Up At Contrast Yoke</p>
							<div class="price1">
							  <span class="actual">Rs.560</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="418" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/women/new arrival/15/United-Colors-of-Benetton-Black-Solid-T-Shirt-3606-1315751-1-pdp_slider_l.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">United Colors of Benetton
Black Solid T Shirt</p>
							<div class="price1">
							  <span class="actual">Rs.1299</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="419" name="aa">
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