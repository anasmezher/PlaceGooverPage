<html >
<head >
<title>Place Finder
</title>
</head>
<body BGCOLOR="#660033" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
<button onclick="window.location.href='HTML.php'">LogOut</button>
<button onclick="window.location.href="> ADD New SupreVisor </button>
<button onclick="window.location.href='Users.php'"> View Users </button><br />
<br>
<br>
<br>
<br>
<br>
<br>
Places To ADD :
<br>
<br>
<TABLE border=3  >
<FONT FACE="Times New Roman" SIZE="3" COLOR="#FF00FF">
<TR BGCOLOR="#CC99CC">
<TD>  ID    </TD>
<TD> Place Name  </TD>
<TD> Place Country   </TD>
<TD> Place City    </TD>
<TD> Latitude </TD>
<TD> Longitude </TD>
<TD> Place Type  </TD>
<TD> Rate </TD>
<TD> Place Details  </TD>
</TR>

<?PHP


$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL = "SELECT * FROM `tosupervisor`";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {
	$newwID=$db_field['ID'];
	$newplacename=$db_field['PlaceName'];
	$newplacecountry=$db_field['PlaceCountry'];
	$newplacedetails=$db_field['PlaceDetails'];
	$newplacecity=$db_field['PlaceCity'];
	$newplacelati=$db_field['PlaceLatitude'];
	$newplacelangi=$db_field['Placelangitude'];
	$newplacetype=$db_field['PlaceType'];
	$newplacerate=$db_field['PlaceRate'];
	$Todelete="onclick=window.location.href='Delete.php?var=$newplacename'";
	$ToADD="onclick=window.location.href='insertnewplace.php?var=$newplacename'";
		$newpage="onclick=window.location.href='pictures.php?var=$newplacename'";
echo "<TR>
<TD ><FONT  SIZE=3 COLOR='#990000'> $newwID</FONT> </TD>
<TD> <FONT  SIZE=3 COLOR='#330066'>$newplacename </FONT></TD>
<TD><FONT  SIZE=3 COLOR='#330066'> $newplacecountry</FONT> </TD>
<TD><FONT  SIZE=3 COLOR='#330066'> $newplacecity </FONT></TD>
<TD> <FONT  SIZE=3 COLOR='#330066'>$newplacelati</FONT></TD>
<TD> <FONT  SIZE=3 COLOR='#330066'>$newplacelangi</FONT> </TD>
<TD><FONT  SIZE=3 COLOR='#330066'> $newplacetype</FONT> </TD>
<TD><FONT  SIZE=3 COLOR='#330066'>$newplacerate </FONT></TD>
<TD><FONT  SIZE=3 COLOR='#330066'> $newplacedetails</FONT> </TD>
<TD><button $ToADD> ACCEPT </button></TD>
<TD><button $Todelete > DELETE </button></TD>
<TD><button > UPDATE </button></TD>
<TD><button $newpage > View Pictures </button></TD></TR>";
}
}
else {

print "Database NOT Found ";


}
mysql_close($db_handle);
?>
</FONT>
</TABLE>
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
