<?php
	$offset = 5;
<<<<<<< HEAD
	$upper_limit = ($current_day - 2) * $offset;
    $sql = "SELECT * FROM songs ORDER BY id DESC LIMIT ".$upper_limit. "," . $offset;
=======
	$upper_limit = $total_songs - $offset * ($current_day - 2);
	$bottom_limit  = $upper_limit - $offset;
    $sql = "SELECT * FROM songs WHERE id BETWEEN $bottom_limit AND $upper_limit ORDER BY id DESC";
>>>>>>> 8d91e4ef4f5de697b11069fb843d5366ff62adeb
    $result = $mysqli->query($sql);
?>