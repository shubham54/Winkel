<?PHP
session_start();
$abc2=$_SESSION['email2'];
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
$query2="select * from signup where email='$abc2'";
$result=mysql_query($query2);
$row=mysql_fetch_array($result);
if(isset($_POST['aa']))
{
	$a=$_POST['aa'];
	$f=$row['name'];
	$query=mysql_query("update signup set name='$a' where name='$f' ");
	$query3="select * from signin where email='$abc2'";
    $result3=mysql_query($query3);
    $row3=mysql_fetch_array($result3);
	$f=$row3['name'];
	$query4=mysql_query("update signin set name='$a' where name='$f' ");
}
if(isset($_POST['bb']))
{
	$b=$_POST['bb'];
	$f=$row['cmpny_name'];
	$query=mysql_query("update signup set cmpny_name='$b' where cmpny_name='$f'");
}
if(isset($_POST['dd']))
{
	$e=$_POST['dd'];
	$f=$row['password'];
	$query=mysql_query("update signup set password='$e' where password='$f' ");
	$query3="select * from signin where email='$abc2'";
    $result3=mysql_query($query3);
    $row3=mysql_fetch_array($result3);
	$f=$row3['password'];
	$query4=mysql_query("update signin set password='$e' where password='$f' ");
}
if(isset($_POST['ee']))
{
	$f=$_POST['ee'];
	$f=$row['address'];
	$query=mysql_query("update signup set address='$f' where address='$f' ");
}
if(isset($_POST['ff']))
{
	$g=$_POST['ff'];
	$f=$row['city'];
	$query=mysql_query("update signup set city='$g' where city='$f' ");

}
if(isset($_POST['gg']))
{
	$h=$_POST['gg'];
	$f=$row['country_code'];
	$query=mysql_query("update signup set country_code='$h' where country_code='$f' ");

}
if(isset($_POST['hh']))
{
	$i=$_POST['hh'];
	$f=$row['phn_no'];
	$query=mysql_query("update signup set phn_no='$i' where phn_no='$f' ");
}
if(isset($_POST['country']))
{
	$d=$_POST['country'];
	$f=$row['country'];
	$query=mysql_query("update signup set country='$d' where country='$f' ");
}
$query2="select * from signup where email='$abc2'";
$result=mysql_query($query2);
$row=mysql_fetch_array($result);
$_SESSION['ghost']=$row['name'];
echo "<script>
			alert('Account successfully Edited');
			window.location.href='/combine-sh/index.php';
			</script>";  
?>
