<?php
	$total_songs = 100;
	$offset = 5;
	$upper_limit = $total_songs - $offset * ($current_day - 2);
	$bottom_limit  = $upper_limit - $offset;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $bottom_limit AND $upper_limit";
    $result = $mysqli->query($sql);
?>