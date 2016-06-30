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
<script src="js/ayush.js"></script>
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
$abc=$_POST['aa'];
$abc2=$_SESSION['email2'];
$query2="delete from cart where id=$abc AND email='$abc2'";
$result=mysql_query($query2);
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
		  	<h2 class="head">CART PRODUCTS...</h2>
            
<?PHP
$amt=0;
$count=0;
$abc2=$_SESSION['email2'];
$query3="SELECT * FROM cart where email='$abc2'";
$result3=mysql_query($query3);
while($row2=mysql_fetch_array($result3))
{
$query="SELECT * FROM products where id= $row2[1]";
$result=mysql_query($query);
$x=0;
while($row=mysql_fetch_array($result))
{
	if($x%3==0)
		echo '<div class="top-box">';?>
			<div class="col_1_of_3 span_1_of_3" >
    		 <div class="inner_content clearfix">
				<div class="product_image">
					<img src="<?PHP echo $row['url'];?>" alt=""/>
                </div>	
                   <div class="price">
				   <div class="cart-left">
						<p><?PHP echo $row['product_name']; $flag=1;?></p>
						<div class="price1">
                        		<span class="actual"><per>Rs.</per><?PHP echo $row['price'];?></span>
						</div>
					</div>
					<div><form action="hell3.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if($x%3==0)
	echo'</div>';
	$x++;
	$amt=$amt+$row['price'];
}
$count++;
}
?>
<div class="clear"></div>
<?PHP
$query="SELECT * FROM cart2 where email= '$abc2'";
$result=mysql_query($query);
$x=0;
while($row=mysql_fetch_array($result))
{
	$count++;
	$r=$row['id1']; $r1=$row['id2'];
	$query6="SELECT * FROM products where id =$r";
	$result6=mysql_query($query6);
	$row6=mysql_fetch_array($result6);
	$query7="SELECT * FROM products where id = $r1";
	$result7=mysql_query($query7);
	$row7=mysql_fetch_array($result7);
	$amt=$amt+$row['price'];
	if($x == 15)
		break;
	if($x<9 && $x%3==0)
		echo '<div class="top-box">';
	else if($x%3==0){
		echo' 
		<div class="top-box1">';}
		?>
			<div class="col_1_of_3 span_1_of_3" >
    		 <div class="inner_content clearfix">
				<div>
					<img src="<?PHP echo $row6['url'];?>" width="100px" height="150px" style="padding-left:50px; padding-top:30px;" alt=""/>
                    <img src="<?PHP echo $row7['url'];?>" width="100px" height="150px" alt=""/>
                </div>
               <div class="sale-box1"><span class="on_sale title_shop">Combo</span></div>	
                   <div class="price">
				   <div class="cart-left">
						<p><?PHP echo $row6['product_name']; $flag=1;?> AND <?PHP echo $row7['product_name']; $flag=1;?> </p>
						<div class="price1">
                        <?php
						$ayush=$row6['price']+$row7['price'];
						?>
                        <span class="reducedfrom"><per>Rs.</per><?PHP echo $ayush;?></span>
							  <span class="actual"><per>Rs.</per><?PHP echo $row['price'];?></span>
						</div>
					</div>
					<div><form action="hell6.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if($x%3==0)
	echo'</div>';
	$x++;
}?>
	<div class="clear"></div></div>

			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					<h4>No. Of Products:<?php echo "$count" ?></h4>
                    
		       </section>
					
                   <section  class="sky-form">
					<h4>Amount: RS.<?php echo "$amt" ?></h4>
						
		      </div>
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="js/jquery.easydropdown.js"></script>
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