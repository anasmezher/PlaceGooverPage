<html >
<head >
<title>Place Finder
</title>
<?PHP
session_start();
 $var_value = $_GET['var'];

 $query=  "DELETE FROM `tosupervisor` WHERE `PlaceName` = '$var_value'";
$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";
echo "$var_value";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
$result=mysql_query($query);
 if (mysql_query($query)){
	 echo "Place $var_value Delleted Successfully Press Back To Continue";
  mysql_close($db_handle);}

?>
</body>
</html>