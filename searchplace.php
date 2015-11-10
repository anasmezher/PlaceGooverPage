<?php  
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$user_name = "root";
$password = "anas111";
$database = "places";
$server = "127.0.0.1";
$Pname=$obj->{'PlaceName'};
$PCity=$obj->{'PlaceCity'};
$Ptype=$obj->{'PlaceType'};
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
  if ($Pname=="searchwithoutname"){
  $result = mysql_query("SELECT * FROM `placedetails` WHERE `PlaceCity`= $PCity
                                                 AND `PlaceType` = $Ptype  ");
	$rows = array();
    while($row = mysql_fetch_array($result))
    {
        $rows[] = $row;
        print "<tr><td>".$row['PlaceName']."".$row['Rate']."".$row['PDetails']
		
		."".$row['Latitude']."".$row['Longitude']."</td></tr>";
    }
    echo "</table>";

    print json_encode($rows);
  mysql_close($db_handle);}
  else{
	   $result = mysql_query("SELECT * FROM `placedetails` WHERE `PlaceName` = $Pname AND `PlaceCity` = $PCity
                                                 AND `PlaceType` = $Ptype  
                                           OR   `PlaceName` = $Pname AND `PlaceCity` = $PCity												 ");
	$rows = array();
    while($row = mysql_fetch_array($result))
    {
        $rows[] = $row;
        print "<tr><td>".$row['PlaceType']."".$row['Rate']."".$row['PDetails']
		
		."".$row['Latitude']."".$row['Longitude']."</td></tr>";
    }
    echo "</table>";

    print json_encode($rows);
  mysql_close($db_handle);
  }
  }
  ?>