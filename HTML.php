<html >
<head >
<title>Place Finder
</title>
</head>
<body BGCOLOR="#FF3300" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
<form action="" method="post" >
<label> <FONT FACE="Times New Roman" SIZE="3" COLOR="#660000">
 Sign in As Suprvisor :   </FONT>
 </label>
<label>  <FONT FACE="Times New Roman" SIZE="3" COLOR="##990000">
 UserName :</FONT>
</label>
<input type="text" name="username" value=""/>
<label> <FONT FACE="Times New Roman" SIZE="3" COLOR="#990000">
 Password :</FONT>
</label>
<input type="password" name="password"  value=""/>
<input type="submit" value=" Submit "/>
<label>      </label>
</form>
<?php
include("Config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 

$sql="SELECT id FROM supervisors WHERE UserName='$myusername' and Password='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active=$row['UserName'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("&myusername");
$_SESSION['login_user']=$myusername;

header("location: Supervisor.php");

}
else 
{
$error="Your Login Name or Password is invalid";
}
}

?>
<button onclick="window.location.href='login.php'">LogOut</button><br />
<br>
<p Align="right">
To Download Application Click on the Picture Below
<br>
&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;
<A href="APK/place finder.APK">
<img src="IMG/icon2.png" width=40 height=40>
</A>
&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;
<br >___________________________________<br>

</p><FONT FACE="Times New Roman" SIZE="3" COLOR="#660033">

Places You Can Explore : </FONT>
<br>
<br>
<TABLE border=3 >

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
session_start();

$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL = "SELECT * FROM `placedetails`";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {
	$newwID=$db_field['ID'];
	$newplacename=$db_field['PlaceName'];
	$newplacecountry=$db_field['PlaceCountry'];
	$newplacedetails=$db_field['PDetails'];
	$newplacecity=$db_field['PlaceCity'];
	$newplacelati=$db_field['Latitude'];
	$newplacelangi=$db_field['Longitude'];
	$newplacetype=$db_field['PlaceType'];
	$newplacerate=$db_field['Rate'];
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
<TD><button $newpage > View Pictures </button></TD></TR>";
}
}
else {

print "Database NOT Found ";


}
mysql_close($db_handle);
?>

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
<br>
<br>
<br>
<p align="center">
<br >___________________________________<br>
<FONT  SIZE=2>&copy; Copy Right For **PlaceFinder**2015</font>
<img src="IMG/icon2.png" width=15 height=15>
</p>
</body>
</html>
