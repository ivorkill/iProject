<?php
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "INSERT INTO events (title, start, end) VALUES (:title, :start, :end)";
var_dump($sql);
$result = $mysqli->prepare($sql);
$result->execute(array(':title'=>$title, ':start=>$start', ':end'=>$end));
?>
