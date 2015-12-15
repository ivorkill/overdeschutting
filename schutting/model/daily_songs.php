<?php
	$offset = 5;
	$upper_limit = ($current_day - 2) * $offset;
    $sql = "SELECT * FROM songs ORDER BY id DESC LIMIT ".$upper_limit. "," . $offset;
    $result = $mysqli->query($sql);
?>