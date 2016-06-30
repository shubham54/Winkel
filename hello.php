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
					
					<li><?php echo "hello ".$_SESSION['ghost'] ?></li> |
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
				<input type="submit" value="Subscribe" id="submit" name="submit"></form>
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>No Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
        <?PHP
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
$q=$_SESSION['email2'];
$query2="select * from cart where email='$q'";
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
            
<?PHP
$connect=mysql_connect("localhost","root","");
mysql_select_db("winkel",$connect);
$value=$_POST['s'];
$temp=$value;
$a=0;
$c=0;
$ayush=strlen($value);
$ayush=$ayush-1;
$colorflag=0;
$brandflag=0;
$genderflag=0;
$typeflag=0;
$arr1=array();
$arr2=array();
$arr3=array();
$arr4=array();
$query1=mysql_query("select * from products");
	while($rows1=mysql_fetch_array($query1))
	{
		$temp10=preg_replace('/\s+/','',$rows1['brand_name']);
		$temp12=strtolower($temp10);
			$arr1[$rows1['color']]=0;
			$arr2[$temp12]=0;
			$arr3[$rows1['type1']]=0;
			$arr4[$rows1['type2']]=0;
	}
	/*foreach($arr2 as $y => $y_value)
	{
		echo "key=".$y."value=".$y_value;
		echo "<br>";
	}*/
for($x=0;$x<strlen($value);$x++)
{
		if($value[$x]==' ' || $x==($ayush))
		{
			if($x==($ayush))
			$c++;
			$b=substr($temp,$a,$c);
			$a=$x+1;
			$c=0;
			$value2=0;
	if(array_key_exists("$b",$arr1))
	{
	$colorflag=1;
	$color=$b;
	}
	if(array_key_exists("$b",$arr2))
	{
	$brandflag=1;
	$brand=$b;
	}
	if(array_key_exists("$b",$arr3))
	{
	$genderflag=1;
	$gender=$b;
	}
	if(array_key_exists("$b",$arr4))
	{
	$typeflag=1;
	$type=$b;
	}
	}
	else
	{
		$c++;
	}
		
}
/*echo "$genderflag";
echo "$typeflag";
echo "$colorflag";
echo "$brandflag";*/
if($genderflag==1 && $typeflag==1 && $colorflag==1 && $brandflag==1)
{
$query=mysql_query("select * from products where type1='$gender' and type2='$type' and brand_name='$brand' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==1 && $colorflag==1 && $brandflag==0)
{
	$query=mysql_query("select * from products where type1='$gender' and type2='$type' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==1 && $colorflag==0 && $brandflag==1)
{
	$query=mysql_query("select * from products where type1='$gender' and type2='$type' and brand_name='$brand' ");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==0 && $colorflag==1 && $brandflag==1)
{
	$query=mysql_query("select * from products where type1='$gender' and brand_name='$brand' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==1 && $colorflag==1 && $brandflag==1)
{
	$query=mysql_query("select * from products where type2='$type' and brand_name='$brand' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==0 && $colorflag==1 && $brandflag==1)
{
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==1 && $colorflag==0 && $brandflag==1)
{
	$query=mysql_query("select * from products where  type2='$type' and brand_name='$brand'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==1 && $colorflag==1 && $brandflag==0)
{
	$query=mysql_query("select * from products where type2='$type' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==0 && $colorflag==0 && $brandflag==1)
{
	$query=mysql_query("select * from products where type1='$gender' and brand_name='$brand' ");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==0 && $colorflag==1 && $brandflag==0)
{
	$query=mysql_query("select * from products where type1='$gender' and color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==1 && $colorflag==0 && $brandflag==0)
{
	$query=mysql_query("select * from products where type1='$gender' and type2='$type'  ");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==0 && $colorflag==0 && $brandflag==1)
{
	$query=mysql_query("select * from products where brand_name='$brand' ");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==0 && $colorflag==1 && $brandflag==0)
{
	$query=mysql_query("select * from products where color='$color'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==0 && $typeflag==1 && $colorflag==0 && $brandflag==0)
{
	$query=mysql_query("select * from products where type2='$type' ");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
elseif($genderflag==1 && $typeflag==0 && $colorflag==0 && $brandflag==0)
{
	$query=mysql_query("select * from products where type1='$gender'");
	$x=0;
while($row=mysql_fetch_array($query))
{
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
					<div><form action="hell1.php" method="post">
                         <input type="hidden" value="<?PHP echo $row['id']?>" name="aa">
                            <input class="cart-right" type="submit" value="">
                        </form></div>
					<div class="clear"></div>
				 </div>				
                  </div>
			</div>
<?PHP
if(($x+1)%3==0)
	echo'<div class="clear"></div></div>';
	$x++;
}
?>
<?PHP
}
else
{
	  $value2=0;
	$query1=mysql_query("select * from products where product_name='$value'");
	while($rows1=mysql_fetch_array($query1))
	{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brand:-$rows1[1]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name Of Product:-$rows1[2]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price Of Product:- Rs.$rows1[4]&nbsp;&nbsp;&nbsp;<br><br>";
	
				$value2=$value2+1;
			
	}
	if($value2==0)
	{
		echo '<h1 style="text-align:center; font-size:20px; font-family:"Times New Roman", Times, serif;">Sorry No Matching Products found</h1><br>';
	}	
}	
?>
	<div class="top-box">
				<div class="clear"></div>
			</div>			 							 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					<h4>Categories</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>Shirts</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>T-Shirts</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>Shots</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>Trouser</label>
								<label class="checkbox"><input type="radio" name="checkbox" ><i></i>Jeans</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>Jersey</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>Jacket</label>
								<label class="checkbox"><input type="radio" name="checkbox"><i></i>track Pant</label>
							</div>
						</div>
		       </section>
					
                   <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 500 - Rs 700</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 700 - Rs 1000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 1000 - Rs 1500</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 1500 - Rs 2000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 2000 - Rs 2500</label>
								<label class="checkbox"><input type="radio" name="checkbox1" ><i></i>Rs 2500 - Rs 3000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 3500 - Rs 4000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 4000 - Rs 4500</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 4500 - Rs 5000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 5000 - Rs 5500</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 5500 - Rs 6000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 6000 - Rs 6500</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 6500 - Rs 7000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 7000 - Rs 7500</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 7500 - Rs 8000</label>
								<label class="checkbox"><input type="radio" name="checkbox1"><i></i>Rs 8000 - Rs 8500</label>	
							</div>
						</div>
		        </section>
		       <section  class="sky-form">
					<h4>Brand Name</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Adidas</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Allen Solly</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Arrow</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Gas</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Levi's</label>
								<label class="checkbox"><input type="radio" name="checkbox2" ><i></i>London Bridge</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Nike</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>U.S Polo</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>U.C.B</label>
								<label class="checkbox"><input type="radio" name="checkbox2"><i></i>Wrangler</label>	
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Colors</h4>
                    <div class="row row1 scroll-pane">
                    	<div class="col col-4">
                    		<label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color1"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color2"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color3"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color4"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color5"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color6"> </span></label>
                            <label class="checkbox"><input type="radio" name="checkbox3"><i></i><span class="color7"> </span></label>
                         </div>
                    </div>
		       </section>
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