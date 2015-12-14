<?php
	$previous_id = $song_id - 1;
	$next_id = $song_id + 1;
	$song_id = $_GET['song_id'];
	$song = $result->fetch_assoc();
?>