<?php
	$previous_id = $song_id - 1;
	$next_id = $song_id + 1;
	$previous_query = "SELECT * FROM songs WHERE id = $previous_id";
	$current_query = "SELECT * FROM songs WHERE id = $song_id";
	$next_query = "SELECT * FROM songs WHERE id = $next_id";
	$previous = $mysqli->query($previous_query);
	$current = $mysqli->query($current_query);
	$next = $mysqli->query($next_query);
?>