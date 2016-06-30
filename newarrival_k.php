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
         <div class="search">	
         <form action="search.php" method="post">  
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
		  	<h2 class="head">Kid's</h2>
			<div class="top-box">
			 <div class="col_1_of_3 span_1_of_3"> 
			  
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/1/U.S.-Polo-Assn.-Grey-Milange-T-Shirt-4602-1310851-1-product.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">U.S. Polo Assn.Grey Milange T-Shirt</p>
							<div class="price1">
							  <span class="actual">Rs 899</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="447" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
              
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	 
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/2/Gini-Jony-Navy-Cotton-Half-SDL867692147-1-e8916.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Gini-Jony-Navy-Cotton-Half</p>
							<div class="price1">
							  <span class="actual">Rs. 649</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="448" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
		
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/3/Gini-26-Jony-Blue-T-Shirt-0704-7576651-1-catalog.jpg" alt=""/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Gini-26-Jony-Blue-T-Shirt</p>
							<div class="price1">
							  <span class="reducedfrom">Rs.660.00</span>
							  <span class="actual">Rs.499</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="449" name="aa">
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
						<img src="kids/new arrival/4/Priyank-Blue-Party-Dress-5628-5027751-1-catalog.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Priyank-Blue-Party-Dress</p>
							<div class="price1">
							  <span class="actual">Rs. 860</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="450" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
            
				</div>
				<div class="col_1_of_3 span_1_of_3">
	
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/5/Priyank-Blue-Party-Dress-2906-1127751-1-product.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Priyank-Blue-Party-Dress</p>
							<div class="price1">
							  <span class="actual">Rs. 1005</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="451" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
            
				</div>
				<div class="col_1_of_3 span_1_of_3">
		
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/6/United-Colors-of-Benetton-Pink-Casual-Top-6410-3106951-1-product.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">United-Colors-of-Benetton-Pink-Casual-Top</p>
							<div class="price1">
							  <span class="actual">Rs. 650</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="452" name="aa">
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
						<img src="kids/new arrival/7/Adidas-Messi-15.4-Fxg-Blue-Football-Shoes-9226-5406751-7-product.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas-Messi-15.4-Fxg-Blue-Football-Shoes</p>
							<div class="price1">
							  <span class="actual">Rs. 3499</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="453" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
        
				</div>
				<div class="col_1_of_3 span_1_of_3">
	
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/8/Beanz-Meadow-Sandal-Blue-Sandals-7672-2374351-1-product.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Beanz-Meadow-Sandal-Blue-Sandals</p>
							<div class="price1">
							  <span class="reducedfrom">Rs. 1200</span>
							  <span class="actual">Rs. 999</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="454" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/9/Doink-Tan-Loafers-6207-0128651-1-product.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="455" name="aa">
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
						<img src="kids/new arrival/10/Adidas-Blue-Backpack-1193-716815-1-product.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Adidas-Blue-Backpack</p>
							<div class="price1">
							  <span class="actual">Rs. 1000</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="456" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/11/Simba-16-Inches-Princess-Endless-Dream-Pink-School-Backpack-3840-3411211-1-product.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Simba-16-Inches-Princess-Endless-Dream-Pink-School-Backpack</p>
							<div class="price1">
							  <span class="actual">Rs.840</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="457" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
              
				</div>
				<div class="col_1_of_3 span_1_of_3">
	
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/12/Simba-18-Inches-Dora-Explore-The-Harbour-Red-Trolley-Bag-2731-9421211-1-product.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Simba-18-Inches-Dora-Explore-The-Harbour-Red-Trolley-Bag</p>
							<div class="price1">
							  <span class="actual">Rs.1299</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="458" name="aa">
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
						<img src="kids/new arrival/13/Disney-Sg100276-Black2FMulti-Oval-6201-2680931-1-product.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Disney-Sg100276-Black2FMulti-Oval</p>
							<div class="price1">
							  <span class="actual">Rs.395</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="459" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
			
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/14/Leecooper-Junior-Dark-Grey2FPink-Aviator-1862-652476-1-product.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Leecooper-Junior-Dark-Grey2FPink-Aviator</p>
							<div class="price1">
							  <span class="actual">Rs. 629</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="460" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
               
				</div>
				<div class="col_1_of_3 span_1_of_3">
		
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="kids/new arrival/15/Disney-C35089-28Black29-Black2FBlack-Wrap-Around-8892-6970931-1-product.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Disney-C35089-28Black29-Black2FBlack-Wrap-Around</p>
							<div class="price1">
							  <span class="actual">Rs.395</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="461" name="aa">
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