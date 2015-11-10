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

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE 
  //  post_author = $user_id AND post_status = 'publish'
  // ORDER BY ID DESC LIMIT $number_of_posts";
  if($db_found){
  mysql_query("INSERT INTO `tosupervisor`(`ID`, `PlaceName`, `PlaceCountry`, `PlaceCity`, `PlaceLatitude`, `Placelangitude`, `PlaceRate`, `PlaceType`, `PlaceDetails`) 
  VALUES ('".$obj->{'ID'}."','".$obj->{'PlaceName'}."','".$obj->{'PlaceCountry'}."','".$obj->{'PlaceCity'}."','".$obj->{'PlaceLatitude'}."','".$obj->{'Placelangitude'}."','".$obj->{'PlaceRate'}."','".$obj->{'PlaceType'}."','".$obj->{'PlaceDetails'}."')");

mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
  echo json_encode(array('posts'=>$posts)); }
  ?>