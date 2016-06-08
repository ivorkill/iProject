<?php
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "INSERT INTO events (title, start, end) VALUES (:title, :start, :end)";
$result = $mysqli->prepare($sql);
$result->exevute(array(':title'=>$title, ':start=>$start', ':end'=>$end));
?>
