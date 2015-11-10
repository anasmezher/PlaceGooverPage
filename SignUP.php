<html >
<head >
<title>Wellcome To Place Finder
</title>
</head>
<body BGCOLOR="#660033" BACKGROUND="IMG/back2.jpg" WIDTH="4000"  >
<?php
include("Config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
$sql1="SELECT * FROM users ";
$result1=mysqli_query($db,$sql1);
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
//$active=$row['UserName'];
$count1=mysqli_num_rows($result1);	
// username and password sent from Form
$myusername1=mysqli_real_escape_string($db,$_POST['username1']); 
$mypassword1=mysqli_real_escape_string($db,$_POST['password1']); 
$PhoneNumber1=mysqli_real_escape_string($db,$_POST['phonenumber1']);
$sql="INSERT INTO `users`(`ID`,`UserName`, `Password`, `Phone`) VALUES( '($count1)+1','$myusername1','$mypassword1','$PhoneNumber1')";
$result=mysqli_query($db,$sql);
if ($result){echo "User $myusername1 ADDED SUCCESSFULLY";}	
}
?>
<p Align="center">
<br>
&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;&raquo;Welcome To PlaceFinder Page&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;&laquo;<br>
......................................................


<br>
<br>
<br>

<
<form action="" method="post" align="center" >
<label>SignUp :__________________________________________.</label><br />
<label>UserName :</label>
<input type="text" name="username1" value=" "/><br />
<label>Password :</label>
<input type="password" name="password1" value=""/><br/>
<label>Phone Number :</label>
<input type="number" name="phonenumber1" value=" "/><br />
<input type="submit" value=" sign up " name="Sign"/><br />
__________________________________________________.<br />
</form>
<br>
<br>
<br>
<br>
<br>
<button onclick="window.location.href='login.php'">BACK</button><br />
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