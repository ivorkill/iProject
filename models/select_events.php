<?php
	$list = array();
	$sql = "SELECT * FROM events";
	$result = $mysqli->query($sql);
	while ($events = $result->fetch_assoc()){
    	$list[] = $events;
    }
    return $list;

    var_dump($sql);
    echo $list;
	var_dump($result);
		if (false === $result) {
	 echo mysql_error();
	}
?>