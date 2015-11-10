<html >
<head >
<title>Place Finder
</title>
</head>
<body BGCOLOR="#660033" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
<button onclick="window.location.href='HTML.php'">Back</button>

<br>
<br>
<br>
<br>
<br>
<br>


<?PHP
session_start();
 $var_value = $_GET['var'];
$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
echo "Photos for $var_value";
$SQL = "SELECT * FROM `placephotos` WHERE `PlaceName` ='$var_value'";
if ($db_found) {


$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {
	$newwph=$db_field['PhotoNumber'];
	$myImg="IMGes/pic_$newwph.jpg";
echo "<img src='$myImg'>";
}
}
else {

print "Database NOT Found ";


}
mysql_close($db_handle);
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p Align="center">
<br>
<br>
<br>
<br >___________________________________<br>
<FONT  SIZE=2>&copy; Copy Right For **PlaceFinder**2015</font>
<img src="IMG/icon2.png" width=15 height=15>
</p>
</body>
</html>
