<?php
	$total_days = 100;
	$offset = 5;
	$upper_limit = $total_days - $offset * ($current_day - 1);
	$bottom_limt  = $upper_limit - $offset;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $upper_limit AND $bottom_limt";
    $result = $mysqli->query($sql);
?>