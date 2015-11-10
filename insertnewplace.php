<html >
<head >
<title>Place Finder
</title>
<?PHP
session_start();
 $var_value = $_GET['var'];
$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";
echo "$var_value";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
 $highest_id = mysql_result(mysql_query("SELECT MAX(`ID`) FROM `placedetails`"), 0);
 $sql2="SELECT * FROM `tosupervisor` WHERE `PlaceName` = '$var_value'";
 $result1=mysql_query($sql2);
 $db_field = mysql_fetch_assoc($result1);
	$newplacename=$db_field['PlaceName'];
	$newplacecountry=$db_field['PlaceCountry'];
	$newplacedetails=$db_field['PlaceDetails'];
	$newplacecity=$db_field['PlaceCity'];
	$newplacelati=$db_field['PlaceLatitude'];
	$newplacelangi=$db_field['Placelangitude'];
	$newplacetype=$db_field['PlaceType'];
	$newplacerate=$db_field['PlaceRate'];
$sql="INSERT INTO `placedetails`(`ID`, `PlaceName`, `PlaceCountry`, `PlaceCity`, `Latitude`, `Longitude`, `Rate`, `PDetails`, `PlaceType`) VALUES( '($highest_id)+1','$newplacename','$newplacecountry','$newplacecity'
,'$newplacelati','$newplacelangi','$newplacerate','$newplacedetails','$newplacetype')";

$result=mysql_query($sql);
 if ($result){
	 echo "Place $newplacename ADDED Successfully Press Back To Continue";
 }
  $query33=  "DELETE FROM `tosupervisor` WHERE `PlaceName` = '$var_value'";
  $result=mysql_query($query33);
  mysql_close($db_handle);
?>
</body>
</html>