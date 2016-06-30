<?PHP
session_start();
$database="winkel";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.msql_error());
}
mysql_select_db("$database",$con);
$abc2=$_SESSION['email2'];
$query=mysql_query(" delete from cart where email= '$abc2'");
$query=mysql_query(" delete from cart2 where email= '$abc2'");
echo "<script>
			alert('Thanks for shopping your Order has been placed');
			window.location.href='/combine-sh/index.php';
			</script>"; 
?>