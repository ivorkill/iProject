<?php
$sql = "DELETE form events WHERE is=".$id;
$result = $mysqli->prepare($sql);
$result->execute();
?>
