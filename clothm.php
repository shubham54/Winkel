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
				</li><li><a class="color6" href="offers.php">OFFERS</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  <form action="search.php" method="post">
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit"> </form>
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
						<img src="images1/new arrival/1st/Nike-Grey-Printed-Round-Neck-T-Shirt-8533-2692841-1-catalog.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">NIKE GREY PRINTED ROUND NECK T-SHIRT</p>
							<div class="price1">
							  <span class="actual">Rs 888</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="330" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/2nd/Levi27s-Blue-Regular-Fit-Casual-Shirt-7103-5545321-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Levi's Blue Regular Fit Casual Shirt</p>
							<div class="price1">
							  <span class="actual">Rs 1150</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="331" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
            
				</div>
				<div class="col_1_of_3 span_1_of_3">
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/3rd/U.S.-Polo-Assn.-Fuchsia-Solid-Polo-T-Shirts-5681-686815-1-catalog.jpg" alt=""/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">U.S. Polo Assn. Fuchsia Solid Polo T-Shirts</p>
							<div class="price1">
							  <span class="reducedfrom">Rs 2000</span>
							  <span class="actual">Rs 1399</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="332" name="aa">
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
						<img src="images1/cloth/4th/Nike-As-Cool-Comp-Ls-Blue-Sports-Jersey-2322-6203841-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Nike As Cool Comp Ls Blue Sports Jersey</p>
							<div class="price1">
							  <span class="actual">Rs 1995</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="333" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
			
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/5th/Nike-Aw77-Ft-Cuff-Grey-Track-Pant-3602-5227751-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Nike Aw77 Ft Cuff Grey Track Pant</p>
							<div class="price1">
							  <span class="actual">Rs 2495</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="334" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/6th/Adidas-Real-Madrid-Away-Grey-Sports-Jerseys-1826-1273651-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Real Madrid Away Grey Sports Jerseys</p>
							<div class="price1">
							  <span class="actual">Rs 3999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="335" name="aa">
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
						<img src="images1/cloth/7th/Adidas-Pes-Body-Knows-Black-Round-Neck-T-Shirt-0178-8283751-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Pes Body Knows Black Round Neck T-Shirt</p>
							<div class="price1">
							  <span class="actual">Rs 1199 </span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="336" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/8th/Adidas-Rs-S---Black-Tight-7309-4183751-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas Rs S Black Tight</p>
							<div class="price1">
							  <span class="reducedfrom">Rs 5495</span>
							  <span class="actual">Rs 1999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="337" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/9th/United-Colors-of-Benetton-Black-Printed-Round-Neck-T-Shirt-5402-9645751-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">United Colors of Benetton Black Printed Round Neck T-Shirt</p>
							<div class="price1">
							  <span class="actual">Rs 1099</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="338" name="aa">
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
						<img src="images1/cloth/10th/United-Colors-of-Benetton-Navy-Blue-Casual-Jacket-6510-1052751-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">United Colors of Benetton Navy Blue Casual Jacket</p>
							<div class="price1">
							  <span class="actual">Rs 3999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="339" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 
				</div>
				<div class="col_1_of_3 span_1_of_3">
	
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/11th/Allen-Solly-Grey-Skinny-Fit-Jeans-7763-6273841-1-catalog.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Allen Solly Grey Skinny Fit Jeans</p>
							<div class="price1">
							  <span class="actual">Rs 3440</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="340" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/cloth/12th/Wrangler-Blue-Mid-Rise-Regular-Fit-Jeans-28Rockville29-0805-3844061-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Wrangler Blue Mid Rise Regular Fit Jeans (Rockville)</p>
							<div class="price1">
							  <span class="actual">Rs 2995</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="341" name="aa">
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
						<img src="images1/new arrival/13th/Arrow-Black-Tapered-Fit-Formal-Trouser-6560-3760061-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Arrow Black Tapered Fit Formal Trouser</p>
							<div class="price1">
							  <span class="actual">Rs 2099</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="342" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
	
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/14th/London-Bridge-Brown-Solid-Formal-Trouser-7502-1545851-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">London Bridge Brown Solid Formal Trouser</p>
							<div class="price1">
							  <span class="actual">Rs 1199</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="343" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/15th/Gas-Blue-Mid-Rise-Regular-Fit-Jeans-4108-2881161-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Gas Blue Mid Rise Regular Fit Jeans</p>
							<div class="price1">
							  <span class="actual">Rs 5990</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="344" name="aa">
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