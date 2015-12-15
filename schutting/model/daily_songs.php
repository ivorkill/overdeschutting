<?php
<<<<<<< HEAD
	$total_days = 100;
	$offset = 5;
	$upper_limit = $total_days - $offset * ($current_day - 1);
	$bottom_limt  = $upper_limit - $offset;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $upper_limit AND $bottom_limt";
=======
	$total_songs = 100;
	$offset = 5;
	$upper_limit = $total_songs - $offset * ($current_day - 2);
	$bottom_limit  = $upper_limit - $offset;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $bottom_limit AND $upper_limit";
>>>>>>> master
    $result = $mysqli->query($sql);
?>