<?PHP
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
if(isset($_POST['email']) && isset($_POST['password']))
{
	$a=$_POST['email'];
	$b=$_POST['password'];
	$query = "SELECT 1 FROM signin WHERE email = '$a' AND password = '$b'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0)
	{
		session_start();
		$query = "SELECT * FROM signin WHERE email = '$a' AND password = '$b'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$_SESSION['email2']=$row['email'];
		$_SESSION['ghost']=$row['name'];
		/*echo "<script>
			alert('Login successfully');
			window.location.href='/combine-sh/index.php';
			</script>"; */
		header("location:/combine-sh/index.php"); 
	}
	else
	{
		echo "<script>
			alert('Either Email or Password is wrong');
			window.location.href='/combine-sh/login.php';
			</script>";
	}
}
else
	{
		echo "<script>
			alert('Either Email or Password is wrong');
			window.location.href='/combine-sh/login.php';
			</script>"; 
	}
?>