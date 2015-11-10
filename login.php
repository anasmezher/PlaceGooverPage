<html >
<head >
<title>Wellcome To Place Finder
</title>
</head>
<body BGCOLOR="#660033" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
//<button onclick="window.location.href='SignUP.php'">SignUP</button><br />
<?php
include("Config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
$SQL = "SELECT * FROM `supervisors` WHERE UserName='$myusername' and Password='$mypassword'";
	$result = mysql_query($SQL);
$row=mysqli_fetch_array($result);
//$active=$row['UserName'];
$count=mysqli_num_rows($row);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0){echo "couldn't verfiy your data try again";}
else {
//session_register("&myusername");
$_SESSION['login_user']=$myusername;

header("location: HTML.php");
}

}
?>
<p Align="center">
<br>
&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;Welcome To PlaceFinder Page&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;<br>
......................................................


<br>
<br>
<br>

<form action="" method="post" align="center" >
<label>SignIn :__________________________________________.</label><br />
<label>UserName  :</label>
<input type="text" name="username" value=""/><br />
<label>Password   :</label>
<input type="password" name="password"  value=""/><br/>
<input type="submit" value=" Submit "/><br />
__________________________________________________.<br />
</p>
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

To Download Application Click on the Picture Below
<br>
&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;
<A href="APK/place finder.APK">
<img src="IMG/icon2.png" width=30 height=30>
</A>
&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;
<br >___________________________________<br>


<FONT FACE="Times New Roman" SIZE="3" COLOR="#660033">
<br >___________________________________<br>
<FONT  SIZE=2>&copy; Copy Right For **PlaceFinder**2015</font>
<img src="IMG/icon2.png" width=15 height=15>
</p>

<body>
</html >