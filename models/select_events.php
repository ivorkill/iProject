<?php
if(isset($_SESSION['user'])!="")
{
$json = array();

$sql = "SELECT * FROM events ORDER BY id";

$result = $mysqli->query($sql) or die(print_r($mysqli->errorInfo()));

echo json_encode($result->fetch_array(PDO::FETCH_ASSOC));
}
?>
