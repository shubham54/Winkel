<!DOCTYPE HTML>
<html>
<head>
<title>winkel.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
<?PHP
session_start();
?>
       <div class="header-top">
			<div class="cssmenu">
				<ul>
					
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
                 <li><a class="color6" href="offers.php">OFFERS</a>
			  </li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
         <form action="search.php" method="post">
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				</form>
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
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
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
               <img src="images/Sneakers-Slider-Men-NewUI.JPG" alt=""/>
            </div>
            <!--/slide -->
            <div class="slide">
                <img src="images/Men-formal-store-Slider6-1600X430-28thSep.jpg" alt=""/>
            </div>
            <!--/slide -->
            <div class="slide">
                <img src="images/Men-Slider-Phosphorus-NewUI-30sep.JPG" alt=""/>
            </div>
            <!--/slide -->
            <div class="slide">
                <img src="images/Footwear-NA-women-slider-1300x470-30thSep.jpg" width="1300" height="370" alt=""/>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Featured Products</h2>
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
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
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
                        </form></div>
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
                        </form></div>
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
                        </form></div>
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
                        </form></div>
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
                        </form></div>
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
						<img src="images1/new arrival/7th/FCUK-Fc1236bbgj-Fcuk-Black2FBlack-Analog-Watch-5929-6547951-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Fcuk Black/Black Analog Watch</p>
							<div class="price1">
							  <span class="actual">Rs 10500 </span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="360" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                  
				</div>
				<div class="col_1_of_3 span_1_of_3">
				
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/8th/Timex-T49973-Black2FGrey-Digital-Watch-8386-135309-1-catalog.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Timex T49973 Black/Grey Digital Watch</p>
							<div class="price1">
							  <span class="reducedfrom">Rs 5495</span>
							  <span class="actual">Rs 3847</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="361" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/9th/Suunto-Brown-Stainless-Steel-Digital-Watch-0552-4669351-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Suunto Brown Stainless Steel Digital Watch</p>
							<div class="price1">
							  <span class="actual">Rs 41500</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="362" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
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
						<img src="images1/new arrival/10th/Levi27s-Yellow-Wallet-5860-978569-1-catalog.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Levi's Yellow Wallet</p>
							<div class="price1">
							  <span class="actual">Rs 801</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="363" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                
				</div>
				<div class="col_1_of_3 span_1_of_3">
					
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/11th/Puma-Black-Belt-5652-054092-1-catalog.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Puma Black Belt</p>
							<div class="price1">
							  <span class="actual">Rs 1019</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="325" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="images1/new arrival/12th/Ray-Ban-Pink-Aviator-Large-Metal-6623-4554551-1-catalog.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Ray Ban Pink Aviator Large Metal</p>
							<div class="price1">
							  <span class="actual">Rs 11490</span>
							</div>
						</div>
						<div><form action="hell1.php" method="post">
                         <input type="hidden" value="366" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
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
                        </form></div>
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
                        </form></div>
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
                        </form></div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   
				</div>
				<div class="clear"></div>
			</div>			 							 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/t-img1.jpg"  alt="" />
               	<img src="images/t-img2.jpg"  alt="" />
                <img src="images/t-img3.jpg"  alt="" />
              </div>
             </div>
              <div class="btn"><a href="accem.php">Check it Out</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">Upcoming News,Eventsand Offers.</p>
			    <div class="subscribe">
					 <form action="subs.php">
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
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
			        <p>© Winkel.com<a href="index.php" target="_blank"></a></p>
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