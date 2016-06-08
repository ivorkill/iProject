<?php
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "UPDATE events SET title=?, start=?, end=?, WHERE id=?";
$result = $mysqli->prepare($sql);
$result->execute(array($title,$start,$end,$id));
?>
