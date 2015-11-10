	<html >
	<head >
	<title>Place Finder
	</title>
	</head>
	<body BGCOLOR="#660033" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
	<button onclick="window.location.href='Supervisor.php'">Back</button>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	Users :
	<br>
	<br>
	<TABLE border=3  >
	<FONT FACE="Times New Roman" SIZE="3" COLOR="#FF00FF">
	<TR BGCOLOR="#CC99CC">
	<TD>  ID    </TD>
	<TD> User Name  </TD>
	<TD> Phone   </TD>
	</TR>

	<?PHP


	$user_name = "root";
	$password = "anas111";
	$database = "places";
	$server = "127.0.0.1";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {

	$SQL = "SELECT * FROM `users`";
	$result = mysql_query($SQL);

	while ( $db_field = mysql_fetch_assoc($result) ) {
		$newwID=$db_field['ID'];
		$newename=$db_field['UserName'];
		$newphone=$db_field['Phone'];
	echo "<TR>
	<TD><FONT  SIZE=3 COLOR='#330066'>$newwID </FONT></TD>
	<TD><FONT  SIZE=3 COLOR='#330066'>$newename </FONT></TD>
	<TD><FONT  SIZE=3 COLOR='#330066'> $newphone</FONT> </TD>
	<TD><button > DELETE </button></TD></TR>";
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
