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
         <div class="search">	<form action="search.php" method="post">  
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
$q=$_SESSION['email2'];
$query2="select * from cart where email='$q'";
$result=mysql_query($query2);
$count=0;
while($row2=mysql_fetch_array($result))
{
	$count++;
}
$query="select * from cart2 where email= '$q'";
$result=mysql_query($query);
while($row2=mysql_fetch_array($result))
{
	$count++;
}
?>
<?PHP
$query10="select * from signup where email= '$q'";
$result10=mysql_query($query10);
$row10=mysql_fetch_array($result10)
?>
	    <ul class="last"><li><a href="cart.php">Cart(<?php echo $count ?>)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Edit Details </h4>
    		   <form action="editke.php" method="post">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><p class="code">Name:</p><input type="text"  name="aa" value="<?PHP echo $row10['name']?>" onfocus="this.value = '';"  onblur="if (this.value == '') {this.value = 'Name';}"></div>
		    			<div><p class="code">Company Name</p><input type="text"  name="bb" value="<?PHP echo $row10['cmpny_name']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></div>
		    			<div><p class="code">Password:</p><input type="password" name="dd" value="<?PHP echo $row10['password']?>" onfocus="this.value = '';"    onblur="if (this.value == '') {this.value = 'password';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><p class="code">Address:</p><input type="text" onfocus="this.value = '';" name="ee" value="<?PHP echo $row10['address']?>"onblur="if (this.value == '') {this.value = 'Address';}"></div>
		    		<div><p class="code">Country:</p><select id="country" value="<?PHP echo $row10['country']?>" name="country" onchange="change_country(this.value)" class="frm-field required">
		            <option value="<?PHP echo $row10['country']?>">Select a Country</option>         
		            <option value="AX">Åland Islands</option>
		            <option value="AF">Afghanistan</option>
		            <option value="AL">Albania</option>
		            <option value="DZ">Algeria</option>
		            <option value="AS">American Samoa</option>
		            <option value="AD">Andorra</option>
		            <option value="AO">Angola</option>
		            <option value="AI">Anguilla</option>
		            <option value="AQ">Antarctica</option>
		            <option value="AG">Antigua And Barbuda</option>
		            <option value="AR">Argentina</option>
		            <option value="AM">Armenia</option>
		            <option value="AW">Aruba</option>
		            <option value="AU">Australia</option>
		            <option value="AT">Austria</option>
		            <option value="AZ">Azerbaijan</option>
		            <option value="BS">Bahamas</option>
		            <option value="BH">Bahrain</option>
		            <option value="BD">Bangladesh</option>
		            <option value="BB">Barbados</option>
		            <option value="BY">Belarus</option>
		            <option value="BE">Belgium</option>
		            <option value="BZ">Belize</option>
		            <option value="BJ">Benin</option>
		            <option value="BM">Bermuda</option>
		            <option value="BT">Bhutan</option>
		            <option value="BO">Bolivia</option>
		            <option value="BA">Bosnia and Herzegovina</option>
		            <option value="BW">Botswana</option>
		            <option value="BV">Bouvet Island</option>
		            <option value="BR">Brazil</option>
		            <option value="IO">British Indian Ocean Territory</option>
		            <option value="BN">Brunei</option>
		            <option value="BG">Bulgaria</option>
		            <option value="BF">Burkina Faso</option>
		            <option value="BI">Burundi</option>
		            <option value="KH">Cambodia</option>
		            <option value="CM">Cameroon</option>
		            <option value="CA">Canada</option>
		            <option value="CV">Cape Verde</option>
		            <option value="KY">Cayman Islands</option>
		            <option value="CF">Central African Republic</option>
		            <option value="TD">Chad</option>
		            <option value="CL">Chile</option>
		            <option value="CN">China</option>
		            <option value="CX">Christmas Island</option>
		            <option value="CC">Cocos (Keeling) Islands</option>
		            <option value="CO">Colombia</option>
		            <option value="KM">Comoros</option>
		            <option value="CG">Congo</option>
		            <option value="CD">Congo, Democractic Republic</option>
		            <option value="CK">Cook Islands</option>
		            <option value="CR">Costa Rica</option>
		            <option value="CI">Cote D'Ivoire (Ivory Coast)</option>
		            <option value="HR">Croatia (Hrvatska)</option>
		            <option value="CU">Cuba</option>
		            <option value="CY">Cyprus</option>
		            <option value="CZ">Czech Republic</option>
		            <option value="DK">Denmark</option>
		            <option value="DJ">Djibouti</option>
		            <option value="DM">Dominica</option>
		            <option value="DO">Dominican Republic</option>
		            <option value="TP">East Timor</option>
		            <option value="EC">Ecuador</option>
		            <option value="EG">Egypt</option>
		            <option value="SV">El Salvador</option>
		            <option value="GQ">Equatorial Guinea</option>
		            <option value="ER">Eritrea</option>
		            <option value="EE">Estonia</option>
		            <option value="ET">Ethiopia</option>
		            <option value="FK">Falkland Islands (Islas Malvinas)</option>
		            <option value="FO">Faroe Islands</option>
		            <option value="FJ">Fiji Islands</option>
		            <option value="FI">Finland</option>
		            <option value="FR">France</option>
		            <option value="FX">France, Metropolitan</option>
		            <option value="GF">French Guiana</option>
		            <option value="PF">French Polynesia</option>
		            <option value="TF">French Southern Territories</option>
		            <option value="GA">Gabon</option>
		            <option value="GM">Gambia, The</option>
		            <option value="GE">Georgia</option>
		            <option value="DE">Germany</option>
		            <option value="GH">Ghana</option>
		            <option value="GI">Gibraltar</option>
		            <option value="GR">Greece</option>
		            <option value="GL">Greenland</option>
		            <option value="GD">Grenada</option>
		            <option value="GP">Guadeloupe</option>
		            <option value="GU">Guam</option>
		            <option value="GT">Guatemala</option>
		            <option value="GG">Guernsey</option>
		            <option value="GN">Guinea</option>
		            <option value="GW">Guinea-Bissau</option>
		            <option value="GY">Guyana</option>
		            <option value="HT">Haiti</option>
		            <option value="HM">Heard and McDonald Islands</option>
		            <option value="HN">Honduras</option>
		            <option value="HK">Hong Kong S.A.R.</option>
		            <option value="HU">Hungary</option>
		            <option value="IS">Iceland</option>
		            <option value="IN">India</option>
		            <option value="ID">Indonesia</option>
		            <option value="IR">Iran</option>
		            <option value="IQ">Iraq</option>
		            <option value="IE">Ireland</option>
		            <option value="IM">Isle of Man</option>
		            <option value="IL">Israel</option>
		            <option value="IT">Italy</option>
		            <option value="JM">Jamaica</option>
		            <option value="JP">Japan</option>
		            <option value="JE">Jersey</option>
		            <option value="JO">Jordan</option>
		            <option value="KZ">Kazakhstan</option>
		            <option value="KE">Kenya</option>
		            <option value="KI">Kiribati</option>
		            <option value="KR">Korea</option>
		            <option value="KP">Korea, North</option>
		            <option value="KW">Kuwait</option>
		            <option value="KG">Kyrgyzstan</option>
		            <option value="LA">Laos</option>
		            <option value="LV">Latvia</option>
		            <option value="LB">Lebanon</option>
		            <option value="LS">Lesotho</option>
		            <option value="LR">Liberia</option>
		            <option value="LY">Libya</option>
		            <option value="LI">Liechtenstein</option>
		            <option value="LT">Lithuania</option>
		            <option value="LU">Luxembourg</option>
		            <option value="MO">Macau S.A.R.</option>
		            <option value="MK">Macedonia</option>
		            <option value="MG">Madagascar</option>
		            <option value="MW">Malawi</option>
		            <option value="MY">Malaysia</option>
		            <option value="MV">Maldives</option>
		            <option value="ML">Mali</option>
		            <option value="MT">Malta</option>
		            <option value="MH">Marshall Islands</option>
		            <option value="MQ">Martinique</option>
		            <option value="MR">Mauritania</option>
		            <option value="MU">Mauritius</option>
		            <option value="YT">Mayotte</option>
		            <option value="MX">Mexico</option>
		            <option value="FM">Micronesia</option>
		            <option value="MD">Moldova</option>
		            <option value="MC">Monaco</option>
		            <option value="MN">Mongolia</option>
		            <option value="ME">Montenegro</option>
		            <option value="MS">Montserrat</option>
		            <option value="MA">Morocco</option>
		            <option value="MZ">Mozambique</option>
		            <option value="MM">Myanmar</option>
		            <option value="NA">Namibia</option>
		            <option value="NR">Nauru</option>
		            <option value="NP">Nepal</option>
		            <option value="NL">Netherlands</option>
		            <option value="AN">Netherlands Antilles</option>
		            <option value="NC">New Caledonia</option>
		            <option value="NZ">New Zealand</option>
		            <option value="NI">Nicaragua</option>
		            <option value="NE">Niger</option>
		            <option value="NG">Nigeria</option>
		            <option value="NU">Niue</option>
		            <option value="NF">Norfolk Island</option>
		            <option value="MP">Northern Mariana Islands</option>
		            <option value="NO">Norway</option>
		            <option value="OM">Oman</option>
		            <option value="PK">Pakistan</option>
		            <option value="PW">Palau</option>
		            <option value="PS">Palestinian Territory, Occupied</option>
		            <option value="PA">Panama</option>
		            <option value="PG">Papua new Guinea</option>
		            <option value="PY">Paraguay</option>
		            <option value="PE">Peru</option>
		            <option value="PH">Philippines</option>
		            <option value="PN">Pitcairn Island</option>
		            <option value="PL">Poland</option>
		            <option value="PT">Portugal</option>
		            <option value="PR">Puerto Rico</option>
		            <option value="QA">Qatar</option>
		            <option value="RE">Reunion</option>
		            <option value="RO">Romania</option>
		            <option value="RU">Russia</option>
		            <option value="RW">Rwanda</option>
		            <option value="SH">Saint Helena</option>
		            <option value="KN">Saint Kitts And Nevis</option>
		            <option value="LC">Saint Lucia</option>
		            <option value="PM">Saint Pierre and Miquelon</option>
		            <option value="VC">Saint Vincent And The Grenadines</option>
		            <option value="WS">Samoa</option>
		            <option value="SM">San Marino</option>
		            <option value="ST">Sao Tome and Principe</option>
		            <option value="SA">Saudi Arabia</option>
		            <option value="SN">Senegal</option>
		         </select></div>		        
		          <div><p class="code">City:</p><input type="text" onfocus="this.value = '';" name="ff" value="<?PHP echo $row10['city']?>"onblur="if (this.value == '') {this.value = 'City';}"></div>
		           <div>
		          </div><p class="code">Country Code + Phone Number</p>
		          	<input type="text" class="code" value="<?PHP echo $row10['country_code']?>"name="gg"> - <input type="text" value="<?PHP echo $row10['phn_no']?>" class="number" name="hh" >
		          </div>
		      <button class="grey">Submit</button>
		    <div class="clear"></div>
		    </form>
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