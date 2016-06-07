<?php
if(isset($_SESSION['user'])!="")
{
  $events = array();
  $query = "SELECT event, DATE_FORMAT(start_day,'%Y-%m-%D') AS start_day FROM events WHERE start_day LIKE '$year-$month%'";
  var_dump($query);
  $result = $mysqli->query($query) or die('cannot get results!');
  while($row = $mysqli->fetch_assoc($result)){
  	$events[$row['start_day']][] = $row;
  }

}
?>
