<?php
	$total_songs = 100;
	$offset = 5;
<<<<<<< HEAD
=======
	$upper_limit = ($current_day - 2) * $offset;
    $sql = "SELECT * FROM songs ORDER BY id DESC LIMIT ".$upper_limit. "," . $offset;
>>>>>>> 2a9d3bb36bba21caa981dadd2cba74efc0c53ed0
	$upper_limit = $total_songs - $offset * ($current_day - 2);
	$bottom_limit  = $upper_limit - $offset + 1;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $bottom_limit AND $upper_limit ORDER BY id DESC";
    $result = $mysqli->query($sql);
?>