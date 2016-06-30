<?PHP
session_start();
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
$a=$_POST['aa'];
$b=$_POST['bb'];
$c=$_POST['cc'];
$d=$_POST['country'];
$e=$_POST['dd'];
$f=$_POST['ee'];
$g=$_POST['ff'];
$h=$_POST['gg'];
$i=$_POST['hh'];
$query="insert into signup(name,cmpny_name,email,password,address,country,city,country_code,phn_no) values('$a','$b','$c','$e','$f','$d','$g','$h','$i')";
$result=mysql_query($query);
$query="insert into signin(email,name,password) values('$c','$a','$e')";
$result=mysql_query($query);
$_SESSION['email2']=$_POST['cc'];
$_SESSION['ghost']=$_POST['aa'];
echo "<script>
			alert('Account successfully Created');
			window.location.href='/combine-sh/index.php';
			</script>";  
?>
